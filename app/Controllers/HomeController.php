<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;
use App\Libraries\service\UserServiceImpl;
use App\Models\FeedBoardModel;
use CodeIgniter\API\ResponseTrait;

class HomeController extends BaseController
{
    use ResponseTrait;

    public $db;

    public function __construct() {
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data = [];
        // 세번 호출됨.
        echo view("header/header");
        if( empty($this->session->user) ) {
            echo view("main");
            echo view("footer");
        } else {
            //$fidResponse = Curl::curlGet(Define::setAPIServer()."/");
            //$result = json_decode($fidResponse);

            $builder = $this->db->table('FEED_BOARD as FB');
            $result = $builder
                ->join('FEED_UPLOAD_IMG as FUI', 'FUI.board_idx = FB.idx', 'LEFT')
                ->get()
                ->getResultArray();

            $data = [
                //'feed' => $result->states
                'feed' => $result
            ];
            echo view("top");
            echo view("popup/content");
            echo view("feed/feed", $data);
        }
    }

    public function myPage($seg = null) {
        if($seg === null) {
            echo "잘못된 요청입니다.";
            return $this->fail(["msg" => "잘못된 요청입니다."], 500, "");
        }

        $data = [
            "userId" => $seg
        ];

        // Curl::curlGet(Define::setAPIServer()."/", $data);
        $response = Curl::curlPost(Define::setAPIServer()."/".$seg, null);
        $jsonDecode = json_decode($response);

        $userService = new UserServiceImpl();
        $userService->UserInformation($jsonDecode);

        $data = [
            "userService" => $userService
        ];

        echo view("header/header");
        echo view("top");
        echo view("popup/content");
        echo view("userPage/userPage", $data);
        echo view("footer");
    }

    public function getCollection() {
        echo view("header/header");
        echo view("top");
        echo view("popup/content");
        echo view("/saved");
    }
}