<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define;

class AccountController extends BaseController
{
    public function __construct() {

    }

    public function index() {

    }

    public function login() {
        $post = $this->request->getJSON();

        $define = new Define();
        $response = Curl::curlPost($define->API_SERVER."/account/login", $post);

        return $response;
    }

}