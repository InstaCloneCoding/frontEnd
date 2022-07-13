<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;
use App\Libraries\service\UserServiceImpl;
use App\Models\FeedBoardModel;
use App\Models\FeedUploadImgModel;
use App\Models\LikeBoardModel;
use CodeIgniter\API\ResponseTrait;

class HomeController extends BaseController
{
    use ResponseTrait;

    public $db;

    public function __construct() { }

    public function index()
    {
        // 세번 호출됨.
        echo view("header/header");
        if( empty($this->session->user) ) {
            echo view("main");
            echo view("footer");
        } else {
            //$fidResponse = Curl::curlGet(Define::setAPIServer()."/");
            //$result = json_decode($fidResponse);
            $feedModel = model(FeedBoardModel::class, false);
            $feedUploadModel = model(FeedUploadImgModel::class, false);
            $likeBoardModel = model(LikeBoardModel::class, false);

            $feed = $feedModel
                ->select("FB.idx as fb_idx, FB.user_id as fb_user_id, FB.feed_content as fb_feed_content")
                ->select("FUI.idx as fui_idx, FUI.board_idx as fui_board_idx, FUI.file_name as fui_file_name")
                ->join("FEED_UPLOAD_IMG as FUI", "FUI.board_idx = FB.idx", "LEFT")
                ->findAll();

            // 댓글 모음
            for($i = 0; $i < count($feed); $i++) {
                $like = $likeBoardModel->where('board_idx', $feed[$i]['fb_idx'])
                    ->countAllResults();
                $feed[$i]['like_cnt'] = $like;
            }

            $data = [
                //'feed' => $result->states
                'feed' => $feed
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