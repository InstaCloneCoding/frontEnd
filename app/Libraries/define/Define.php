<?php

namespace App\Libraries\define;

class Define
{
    public $API_SERVER;

    public function __construct() {
    }

    public static function setAPIServer() {
        // $API_SERVER = "http://localhost:8081";
         $API_SERVER = "http://52.79.54.87";

        return $API_SERVER;
    }

}