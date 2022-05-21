<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Server;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

class AccountsController extends BaseController
{
    use ResponseTrait;

    public function __construct() {

    }

    public function login() {
        $post = $this->request->getJSON();

        return Curl::curlPost(Server::setAPIServer()."/accounts/login", $post);
    }

    /* @author geol2
     * @see 회원가입 페이지
     */
    public function getEmailSignUp() {

        echo view('/header/loginHeader');
        echo view('/accounts/emailsignup');
        echo view('footer');
    }

    /* @author geol2
     * @see 회원가입 데이터 받고 API 서버로 전송
     */
    public function emailsignup() {
        $post = $this->request->getJSON();

        $post->password = password_hash($post->password, PASSWORD_BCRYPT);

        return Curl::curlPost(Server::setAPIServer()."/accounts/emailsignup", $post);
    }
}