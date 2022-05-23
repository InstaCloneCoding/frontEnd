<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("header/header");
        if( empty($_SESSION['userId']) ) {
            echo view("main");
            return view("footer");
        }
        echo view("fid/fid");
        return view("footer");
    }
}