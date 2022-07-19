<?php

namespace App\Libraries\define;

use Exception;

class Define
{
    private static string $API_SERVER = "http://52.79.54.87:8081";

    private static string $LOCAL_SERVER = "http://localhost:8081";

    public function __construct() {
        log_message("notice", "API 요청 생성자");
    }

    public static function setAPIServer() {

        try {
            if (ENVIRONMENT == 'development') {
                log_message("info", "API 서버 요청");
                return self::$API_SERVER;
            } else if (ENVIRONMENT == 'production') {
                log_message("info", "로컬 서버 요청");
                return self::$LOCAL_SERVER;
            } else {
                throw new \Exception("알 수 없는 요청이 발생되었습니다.");
            }
        } catch (Exception $e) {
            log_message('error', $e->getMessage() );
            return 0;
        }

    }
}