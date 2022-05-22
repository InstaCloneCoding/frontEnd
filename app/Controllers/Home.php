<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        if( empty($_SESSION['userId']) ) {
            echo view("header/loginHeader");
            echo view("main");
            return view("footer");
        }

        echo view('header/header');
        echo view("fid/fid");
        echo view("footer");
    }
}