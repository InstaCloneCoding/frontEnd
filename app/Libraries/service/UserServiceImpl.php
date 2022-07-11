<?php

namespace App\Libraries\service;

use StdClass;

class UserServiceImpl implements UserService
{
    private string $userId = '';

    private string $originName = '';

    private string $email = '';

    private string $phone = '';

    private int $followerCnt;

    private int $followCnt;

    public function getUserId() {
        return $this->userId;
    }

    public function getOriginName() {
        return $this->originName;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getFollowCnt() {
        return $this->followCnt;
    }

    public function getFollowerCnt() {
        return $this->followerCnt;
    }

    public function UserInformation( StdClass|array $info) {

        $this->userId       = !empty($info->states->userId)     ? $info->states->userId      : "";
        $this->originName   = !empty($info->states->originName) ? $info->states->originName  : "";
        $this->email        = !empty($info->states->email)      ? $info->states->email       : "";
        $this->phone        = !empty($info->states->phone)      ? $info->states->phone       : "";
        $this->followerCnt  = !empty($info->states->followerCnt)? $this->states->followerCnt : 0;
        $this->followCnt    = !empty($info->states->followCnt)  ? $this->states->followCnt   : 0;
    }
}