<?php


namespace App\Http\Services;

use App\Http\Services\Messaging\Mail\SendMail;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class AuthServices
{

    /**
     * @param array $assoc_array_data
     * @return array
     */
    public static function signUp(array $assoc_array_data){

        $validator = Validator::make($assoc_array_data,
            [
                'first_name' => 'bail|nullable|max:128',
                'email' => 'bail|required|email:rfc,dns|unique:users,email',
                'country_code' => 'bail|required|integer|exists:countries,origin',
                'phone' => 'bail|required|max:128',
                'password' => 'bail|required|min:8',
                'confirm_password' => 'same:password',
                'tc' => 'bail|nullable' // Valeur inconnue ajouter par un JS non localisé
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => $validator->errors()->first()
            ];
        }

        $country = Country::where('origin', $assoc_array_data['country_code'])->first();
        $user = new User();
        $user->email = $assoc_array_data['email'];
        $user->password = bcrypt($assoc_array_data['password']);
        $user->first_name = $assoc_array_data['first_name'];
        $user->mobile_number = $assoc_array_data['phone'];
        $user->country_code = $country->phone_code;
        $user->country_name = $country->en_name;
        $done = $user->save();

        // send email
        if($done) SendMail::new_account($assoc_array_data['email'], 'Bienvenu sur '. env('APP_NAME'), []);

        return [
            'status' => $done,
            'data' => $done
                ? 'You have successfully registered with us!!! You will receive an e-mail containing the account verification link.kindly check spam section incase mail not visible inbox'
                : 'An unexpected error occurred. Please try again!'
        ];
    }


    /**
     * @param array $assoc_array_data
     * @return array
     */
    public static function signIn(array $assoc_array_data){

        $validator = Validator::make($assoc_array_data,
            [
                'email' => 'bail|required|email:rfc,dns|exists:users,email',
                'password' => 'bail|required|min:8',
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => $validator->errors()->first()
            ];
        }

        $done = auth()->attempt($assoc_array_data);
        return [
            'status' => $done,
            'data' => $done ? '' : 'Wrong email address or password. Verify your inputs and try again!'
        ];
    }


    /**
     * @param array $assoc_array_data
     * @return array
     */
    public static function recoverPass(array $assoc_array_data){

        $validator = Validator::make($assoc_array_data,
            [
                'email' => 'bail|required|email:rfc|exists:users,email',
                'phone' => 'bail|required|exists:users,mobile_number',
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => 'Unable to find a matching account'
            ];
        }

        $user = User::where([
            ['email', $assoc_array_data['email']],
            ['mobile_number', $assoc_array_data['phone']]
        ])->first();

        $done = !empty($user);
        $new_password = '';
        if($done){

            $new_password .= substr(uniqid(mt_rand(), true) , 0, 10); // Generate a temporary password
            $user->password = bcrypt($new_password);
            $done = $user->save();

            // Send the new password through mail
            SendMail::recover_account($assoc_array_data['email'], 'Mot de passe oublié', ["temp_pass" => $new_password]);
        }

        return [
            'status' => $done,
            'data' => $done ? 'You have successfully recovered your password!!! You will receive an e-mail containing the new auto generated password. Change it once connected' : 'Unable to reset your password. Please try again '
        ];
    }


    /**
     * @param array $assoc_array_data
     * @return array
     */
    public static function changePass(array $assoc_array_data){

        $validator = Validator::make($assoc_array_data,
            [
                'current_password' => 'bail|required|password',
                'new_password' => 'bail|required|min:8',
                'confirm_password' => 'same:new_password',
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => $validator->errors()->first()
            ];
        }

        $user = User::where('email', auth()->user()->email)->first();
        $done = !empty($user);
        if($done){
            $user->password = bcrypt($assoc_array_data['new_password']);
            $done = $user->save();
        }
        return [
            'status' => $done,
            'data' => $done ? 'You have successfully changed your password!!!. You must log in with the new password' : 'An error occurred. Please retry !!!'
        ];
    }


    /**
     * @return bool
     */
    public static function logout(){
        auth()->logout();
        session()->flush();
        return true;
    }
}
