<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;
use App\Models\FeedBoardModel;

class HomeController extends BaseController
{
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

    public function getCollection() {
        echo view("header/header");
        echo view("top");
        echo view("popup/content");
        echo view("/saved");
    }
}