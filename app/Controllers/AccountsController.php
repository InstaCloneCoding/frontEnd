<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define as Define;
use App\Models\UserModel;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

class AccountsController extends BaseController
{
    use ResponseTrait;

    public function __construct() {

    }

    public function index() {
    }

    public function sessionProc($user) {

        $_SESSION['userId'] = $user->user_id;
    }

    public function login(){
        $post = $this->request->getJSON();

        $user = model(UserModel::class, false);

        $userRow = $user
            ->where('user_id', $post->userId)
            ->get()->getResultArray();
        if( count($userRow) != 1) {
            return $this->fail("입력값을 다시 확인해주세요.", "401");
        }

        $getUser = $user->where('user_id', $post->userId)
            ->get()
            ->getFirstRow();

        if( password_verify($post->userPassword, $getUser->user_password) ) {
            $this->sessionProc($getUser);
            $data = [
                "code" => 200,
                "msg" => "Ok"
            ];
            return $this->respond($data, 200);
        }

        return $this->fail("알 수 없는 요청입니다.");
    }

    public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
        unset($_SESSION['userId']);
        return redirect()->to('/');
    }

    /* @author geol2
     * @see 회원가입 페이지
     */
    public function getEmailSignUp() {

        echo view('/header/header');
        echo view('/accounts/emailsignup');
        echo view('footer');
    }

    /* @author geol2
     * @see 회원가입 데이터 받고 API 서버로 전송
     */
    public function emailsignup() {
        $post = $this->request->getJSON();

        $user = model(UserModel::class);
        $userRow = $user->where('user_id', $post->userId)
            ->get()
            ->getResultArray();

        if(count($userRow) >= 1) {
            return $this->fail("이미 있는 회원입니다.", "400");
        }

        $post->userPassword = password_hash($post->userPassword, PASSWORD_BCRYPT);

        return Curl::curlPost(Define::setAPIServer()."/accounts/emailsignup", $post);
    }

    /* @author geol2
     * @see 로그인 패스워드 리셋
     */
    public function password($path = 'reset') {

        echo view('header/header');
        echo view('top');
        echo view('accounts/password/reset');
        echo view('footer');

    }

    public function sendEmail() {
        $post = $this->request->getJSON();
        if( empty($post) ) { exit; }

        return Curl::curlPost(Define::setAPIServer()."/accounts/password/email", $post);
    }

    public function authCode() {
        $post = $this->request->getJSON();
        if( empty($post) ) { exit; }

        return Curl::curlPost(Define::setAPIServer()."/accounts/password/auth", $post);
    }

    /**
     * @throws \ReflectionException
     */
    public function resetPassword() {
        $post = $this->request->getJSON();
        $userModel = model(UserModel::class, false);

        $newPassword = $post->newPassword;

        if($post->newPassword != $post->rePassword) {
            return $this->fail(["msg" => "X"], 400);
        }

        $user = $userModel
            ->where('user_id', $post->userId)
            ->get()->getFirstRow();

        $id = (int)$user->idx;
        $data = [
            'user_password' => password_hash($newPassword, PASSWORD_DEFAULT)
        ];

        $updRes = $userModel->update($id, $data);
        if( !$updRes ) {
            return $this->fail(["msg" => "X"], 400);
        }

        return Curl::curlPost(Define::setAPIServer()."/accounts/password/reset", $post);
    }
}