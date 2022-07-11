<?php

namespace App\Libraries\define;

class Define
{
    private static string $API_SERVER = "http://52.79.54.87:8081";

    private static string $LOCAL_SERVER = "http://localhost:8081";

    public function __construct() {
        log_message("info", "API 요청 생성자");
    }

    public static function setAPIServer() {
        if(ENVIRONMENT == 'development') {
            return self::$API_SERVER;
        } else if(ENVIRONMENT == 'production') {
            return self::$LOCAL_SERVER;
        }
    }
}