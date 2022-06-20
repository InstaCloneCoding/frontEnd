<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;

class HomeController extends BaseController
{
    public function index()
    {
        $data = [];
        // 세번 호출됨.
        echo view("header/header");
        if( empty($this->session->user) ) {
            echo view("main");
        } else {
            $fidResponse = Curl::curlGet(Define::setAPIServer()."/");
            $result = json_decode($fidResponse);

            $data = [
                'feed' => $result->states
            ];
            echo view("top");
            echo view("popup/content");
            echo view("feed/feed", $data);
        }
        echo view("footer");
    }

    public function myInstaGramPage($seg = null) {
        if($seg === null) {
            echo "잘못된 요청입니다.";
            return;
        }

        $data = [
            "userId" => $seg
        ];

        // Curl::curlGet(Define::setAPIServer()."/", $data);
        $response = Curl::curlPost(Define::setAPIServer()."/".$seg, null);
        $jsonDecode = json_decode($response);

        $data["profile"] = $jsonDecode;

        echo view("header/header");
        echo view("top");
        echo view("popup/content");
        echo view("userPage/userPage", $data);
        echo view("footer");
    }
}