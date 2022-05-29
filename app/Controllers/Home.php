<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;

class Home extends BaseController
{
    public function index()
    {
        $data = [];
        // 세번 호출됨.

        echo view("header/header");
        if( empty($_SESSION['userId']) ) {
            echo view("main");
        } else {
            $fidResponse = Curl::curlGet(Define::setAPIServer()."/");

            $data = [
                'fid' => json_decode($fidResponse)
            ];
            echo view("fid/fid", $data);
        }
        echo view("footer");
    }
}