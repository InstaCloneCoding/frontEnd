<?php

namespace App\Libraries\curl;

use App\Libraries\define\Define;

class Curl
{

    public static function curlPost(string $path, \stdClass $data = null) {
        $headers = array("content-type: application/json");

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_POST, true); // POST 전송 여부
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close ($ch);

        $data = [
            "code" => $http_code,
            "msg" => json_decode($response)
        ];

        return json_encode($data);
    }

    public static function curlGet(String $path, $data = null) {
        if( is_array($data) ) {
            $path = $path . "?" . http_build_query($data, '',);
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $response = curl_exec($ch);
        $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        $data = [
            "code" => $http_code,
            "msg" => json_decode($response)
        ];

        return json_encode($data);
    }
}