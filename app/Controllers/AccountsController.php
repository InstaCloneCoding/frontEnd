<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define as Define;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

class AccountsController extends BaseController
{
    use ResponseTrait;

    public function __construct() {

    }

    public function login() {
        $post = $this->request->getJSON();

        return Curl::curlPost(Define::setAPIServer()."/accounts/login", $post);
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

        $post->userPassword = password_hash($post->userPassword, PASSWORD_BCRYPT);

        return Curl::curlPost(Define::setAPIServer()."/accounts/emailsignup", $post);
    }

    /* @author geol2
     * @see 로그인 패스워드 리셋
     */
    public function password($path = 'reset') {

        echo view('header/findHeader');
        echo view('accounts/password/reset');
        echo view('Footer');
    }
}