<?php


namespace App\Http\Services;


use App\Models\Country;
use App\Models\User;
use App\Models\UserTraveller;
use Illuminate\Support\Facades\Validator;

class UserServices
{

    /**
     * @param array $assoc_array_data
     * @param $image
     * @return array
     */
    public static function editProfile(array $assoc_array_data, $image){

        $validator = Validator::make($assoc_array_data,
            [
                'title' => 'bail|required',
                'first_name' => 'bail|required|max:128',
                'last_name' => 'bail|required|max:128',
                'country_code' => 'bail|required|integer|exists:countries,origin',
                'phone' => 'bail|required|max:128',
                'address' => 'bail|required',
                'active' => 'in:profile',
                'image' => 'bail|nullable|mimes:jpeg,jpg,png,gif'
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => $validator->errors()->first()
            ];
        }

        $country = Country::where('origin', $assoc_array_data['country_code'])->first();
        $user = User::where('email', auth()->user()->email)->first();
        $user->title = $assoc_array_data['title'];
        $user->first_name = $assoc_array_data['first_name'];
        $user->last_name = $assoc_array_data['last_name'];
        $user->address = $assoc_array_data['address'];
        $user->mobile_number = $assoc_array_data['phone'];
        $user->country_code = $country->phone_code;
        $user->country_name = $country->en_name;
        $done = $user->save();

        if($done){
            // save image if present
            if(isset($assoc_array_data['image'])){
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('/users_images'), $imageName);
                $user->image = '/users_images/' . $imageName;
                $done = $user->save();
            }
        }

        return [
            'status' => $done,
            'data' => $done
                ? 'Update successful !!!'
                : 'An unexpected error occurred. Please try again!'
        ];
    }


    /**
     * @return mixed
     */
    public static function userTravellers(){
        $travellers = UserTraveller::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        foreach ($travellers as $traveller){
            $traveller->passport_issuing_country = empty($traveller->passport_issuing_country_code) ? null : Country::where('origin', $traveller->passport_issuing_country_code)->first();
            $traveller->passport_nationality_country = empty($traveller->passport_nationality_country_code) ? null :  Country::where('origin', $traveller->passport_nationality_country_code)->first();
        }
        return $travellers;
    }

    /**
     * @param array $assoc_array_data
     * @return array
     */
    public static function addTraveller(array $assoc_array_data){

        $validator = Validator::make($assoc_array_data,
            [
                'traveller_first_name' => 'bail|required|max:128',
                'traveller_last_name' => 'bail|required|max:128',
                'traveller_email' => 'bail|required|email:rfc',
                'traveller_date_of_birth' => 'bail|required',
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => $validator->errors()->first()
            ];
        }

        $traveller = new UserTraveller();
        $traveller->user_id = auth()->user()->id;
        $traveller->first_name = $assoc_array_data['traveller_first_name'];
        $traveller->last_name = $assoc_array_data['traveller_last_name'];
        $traveller->email = $assoc_array_data['traveller_email'];
        $traveller->date_of_birth = $assoc_array_data['traveller_date_of_birth'];
        $done = $traveller->save();

        return [
            'status' => $done,
            'data' => $done
                ? 'Traveller added successfully !!!'
                : 'An unexpected error occurred. Please try again!'
        ];
    }


    /**
     * @param array $assoc_array_data
     * @return array
     */
    public static function updateTraveller(array $assoc_array_data){

        $validator = Validator::make($assoc_array_data,
            [
                'traveller_id' => 'bail|required|integer|exists:user_travellers,id',
                'traveller_first_name' => 'bail|required|max:128',
                'traveller_last_name' => 'bail|required|max:128',
                'traveller_email' => 'bail|required|email:rfc',
                'traveller_date_of_birth' => 'bail|required',

                'passport_user_name' => 'bail|nullable|max:128',
                'passport_nationality' => 'bail|nullable|integer|exists:countries,origin',
                'passport_expiry_day' => 'bail|nullable|integer|min:1|max:31',
                'passport_expiry_month' => 'bail|nullable|max:3',
                'passport_expiry_year' => 'bail|nullable|integer',
                'passport_number' => 'bail|nullable',
                'passport_issuing_country' => 'bail|nullable|integer|exists:countries,origin'
            ]
        );

        if ($validator->fails()) {
            return [
                'status' => false,
                'data' => $validator->errors()->first()
            ];
        }

        $traveller = UserTraveller::find($assoc_array_data['traveller_id']);

        if(isset($assoc_array_data['traveller_first_name']))
            $traveller->first_name = $assoc_array_data['traveller_first_name'];
        if(isset($assoc_array_data['traveller_last_name']))
            $traveller->last_name = $assoc_array_data['traveller_last_name'];
        if(isset($assoc_array_data['traveller_email']))
            $traveller->email = $assoc_array_data['traveller_email'];
        if(isset($assoc_array_data['traveller_date_of_birth']))
            $traveller->date_of_birth = $assoc_array_data['traveller_date_of_birth'];


        if(isset($assoc_array_data['passport_user_name']))
            $traveller->passport_user_name = $assoc_array_data['passport_user_name'];
        if(isset($assoc_array_data['passport_nationality']))
            $traveller->passport_nationality_country_code = $assoc_array_data['passport_nationality'];
        if(isset($assoc_array_data['passport_expiry_day']))
            $traveller->passport_expiry_day = $assoc_array_data['passport_expiry_day'];
        if(isset($assoc_array_data['passport_expiry_month']))
            $traveller->passport_expiry_month = $assoc_array_data['passport_expiry_month'];
        if(isset($assoc_array_data['passport_expiry_year']))
            $traveller->passport_expiry_year = $assoc_array_data['passport_expiry_year'];
        if(isset($assoc_array_data['passport_number']))
            $traveller->passport_number = $assoc_array_data['passport_number'];
        if(isset($assoc_array_data['passport_issuing_country']))
            $traveller->passport_issuing_country_code = $assoc_array_data['passport_issuing_country'];


        $done = $traveller->save();

        return [
            'status' => $done,
            'data' => $done
                ? 'Traveller added successfully !!!'
                : 'An unexpected error occurred. Please try again!'
        ];
    }

}
