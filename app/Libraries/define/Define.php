<?php

namespace App\Libraries\define;

class Server
{
    public $API_SERVER;

    public function __construct()
    {
    }

    public static function setAPIServer() {
        $API_SERVER = "http://localhost:8082";
        // $API_SERVER = "http://52.79.54.87";
    }

}