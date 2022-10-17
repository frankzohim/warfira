<?php


namespace App\Http\Services\Messaging\Mail;


use Illuminate\Support\Facades\Mail;

class SendMail
{

    /**
     * @param $address
     * @param $subject
     * @param array $data
     */
    public static function recover_account($address, $subject, array $data){

        Mail::to($address)->send(new RecoverAccountMail($subject, $data["temp_pass"]));
    }


    public static function new_account($address, $subject, array $data){

        Mail::to($address)->send(new NewAccountMail($subject));
    }
}
