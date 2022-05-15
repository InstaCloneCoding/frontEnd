<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

class AccountsController extends BaseController
{
    use ResponseTrait;

    public function __construct() {

    }

    public function index() {

    }

    public function login() {
        $post = $this->request->getJSON();


        $define = new Define();
        $response = Curl::curlPost($define->API_SERVER."/accounts/login", $post);

        return $response;
    }

    /* @author geol2
     * @see 회원가입 페이지
     */
    public function loadEmailSignUp() {

        echo view('/main/loginHeader');
        echo view('/accounts/emailsignup');
    }

    /* @author geol2
     * @see 회원가입 데이터 받고 API 서버로 전송
     */
    public function emailsignup() {
        $post = $this->request->getJSON();

        $post->password = password_hash($post->password, PASSWORD_BCRYPT);

        $define = new Define();
        $response = Curl::curlPost($define->API_SERVER."/accounts/emailsignup", $post);

        return $response;
    }
}