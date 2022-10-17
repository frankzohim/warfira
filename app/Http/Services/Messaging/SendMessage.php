<?php

namespace App\Http\Services\Messaging;

use App\Http\Services\Params;
use Illuminate\Support\Carbon;

class SendMessage {


    public static function generateCode(int $length = 4){
        return substr(uniqid(mt_rand(), true) , 0, $length);
    }


    public static function callAmadeusAPI($url, $params, $post = true){

        try {
            $auth = self::httpPost(
                Params::$AMADEUS_BASE_URL . "/v1/security/oauth2/token",
                array(
                    'Content-type:application/x-www-form-urlencoded',
                ),
                http_build_query(array(
                    "client_id" => "5Slv2Abjwr23p41bC3I64k3lXg25CbSl",
                    "client_secret" => "NvCNm0e0jh8SM9l0",
                    "grant_type" => "client_credentials"
                ))
            );
            $auth = json_decode($auth, true);
            $headers = array(
                'Authorization: ' . $auth['token_type'] . ' ' . $auth['access_token']
            );

            return json_decode(
                $post ?
                    self::httpPost($url,$headers,$params) :
                    self::httpGet($url."?".http_build_query($params), $headers)
                , true
            );
        }catch (\Exception $exception){
            return ['error' => $exception->getMessage()];
        }

    }

    public static function httpPost($url, $headers, $postData)
    {

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        //curl_setopt($ch, CURLOPT_POST, count($postData));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

        $output=curl_exec($ch);
        curl_close($ch);

        //dd($output);
        return $output;

    }

    public static function httpGet($url, $headers)
    {

        $ch = curl_init();

        curl_setopt($ch,CURLOPT_URL, $url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch,CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

        $output=curl_exec($ch);
        curl_close($ch);

        //dd($output);
        return $output;

    }
}
