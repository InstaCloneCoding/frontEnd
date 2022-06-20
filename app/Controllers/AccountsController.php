<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define as Define;
use App\Models\UserMemberModel;
use CodeIgniter\API\ResponseTrait;
use Config\Services;

class AccountsController extends BaseController
{
    use ResponseTrait;

    public function __construct() {

    }

    public function index() {
    }

    public function sessionProc($userId, $email) {
        $data['user'] = [];
        $user = model(UserMemberModel::class);
        if(!empty($email)) {
            $data['user']['email'] = $email['email'];
            $user = $user
                ->where('email', $email['email'])
                ->first();

            $data['user']['userId'] = $user['user_id'];
        }
        if(!empty($userId)) {
            $data['user']['userId'] = $userId['user_id'];
        }

        $this->session->set($data);
    }

    /**
     * @throws \ReflectionException
     */
    public function login(){
        $post = $this->request->getJSON();

        $user = model(UserMemberModel::class, false);

        $userId = $user
            ->where('user_id', $post->userId)
            ->first();

        $email = $user
            ->where('email', $post->userId)
            ->first();
        if( empty($userId) && empty($email) ) {
            return $this->fail([
                "code" => 401,
                "msg" => "입력값을 다시 확인해주세요."]);
        }

        $getUserByUserId = $user->where('user_id', $post->userId)
            ->first();
        $getUserByEmail = $user->where('email', $post->userId)
            ->first();
        if( empty($getUserByUserId) && empty($getUserByEmail)) {
            return $this->fail([
                "code" => 401,
                "msg" => "유효하지 않습니다."]);
        }
        if( !empty($getUserByUserId) && !password_verify($post->userPassword, $getUserByUserId['user_password']) ) {
            return $this->fail([
                    "code" => 401,
                    "msg" => "유효하지 않습니다."]);
        }
        if( !empty($getUserByEmail) && !password_verify($post->userPassword, $getUserByEmail['user_password']) ) {
            return $this->fail([
                "code" => 401,
                "msg" => "유효하지 않습니다."]);
        }

        if($getUserByUserId) {
            $id = (int)$getUserByUserId['idx'];
            $data = [
                'user_password' => password_hash($post->userPassword, PASSWORD_DEFAULT)
            ];

            $updRes = $user->update($id, $data);
            if (!$updRes) {
                return $this->fail("유효하지 않습니다.", 400);
            }
        }

        if($getUserByEmail) {
            $id = (int)$getUserByEmail['idx'];
            $data = [
                'user_password' => password_hash($post->userPassword, PASSWORD_DEFAULT)
            ];

            $updRes = $user->update($id, $data);
            if (!$updRes) {
                return $this->fail("유효하지 않습니다.", 400);
            }
        }

        $this->sessionProc($getUserByUserId, $getUserByEmail);
        $data = [
            "code" => 200,
            "msg" => "로그인 되었습니다."
        ];
        return $this->respond($data, 200);
    }

    public function logout(): \CodeIgniter\HTTP\RedirectResponse
    {
        //unset($_SESSION);
        $this->session->remove(['user']);
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

        $user = model(UserMemberModel::class);
        $userRow = $user->where('user_id', $post->userId)
            ->get()
            ->getResultArray();

        if(count($userRow) >= 1) {
            return $this->respond([
                "code" => "400",
                "msg" => "이미 있는 회원입니다."
            ]);
        }

        $post->userPassword = password_hash($post->userPassword, PASSWORD_BCRYPT);

        return Curl::curlPost(Define::setAPIServer()."/accounts/emailsignup", $post);
    }

    /* @author geol2
     * @see 로그인 패스워드 리셋
     */
    public function password($path = 'reset') {

        echo view('header/header');
        echo view('accounts/password/reset');
        echo view('footer');

    }

    public function sendEmail() {
        $post = $this->request->getJSON();
        if( empty($post) ) { exit; }

        $data = Curl::curlPost(Define::setAPIServer()."/accounts/password/email", $post);
        return $data;
    }

    public function authCode() {
        $post = $this->request->getJSON();
        if( empty($post) ) { exit; }

        $data = Curl::curlPost(Define::setAPIServer()."/accounts/password/auth", $post);
        return $data;
    }

    /**
     * @throws \ReflectionException
     */
    public function resetPassword() {
        $post = $this->request->getJSON();
        $userModel = model(UserMemberModel::class, false);

        $newPassword = $post->newPassword;

        if($post->newPassword != $post->rePassword) {
            return $this->fail([
                "code" => 400,
                "msg" => "입력값을 다시 확인해주세요."
            ]);
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
            return $this->fail([
                "code" => 400,
                "msg" => "수정할 수 없습니다."
            ]);
        }

        $result =  Curl::curlPost(Define::setAPIServer()."/accounts/password/reset", $post);
        return $result;
    }
}