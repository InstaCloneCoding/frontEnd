<?php

namespace App\Libraries\define;

class Define
{

    public $API_SERVER = "http://localhost:8081";
    // public $API_SERVER = "http://52.79.54.87";

    public function __construct()
    {
        define("API_SERVER", "http://localhost:8081");
    }
}