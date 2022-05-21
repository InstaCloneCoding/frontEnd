<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view("header/loginHeader");
        echo view("main");
        echo view("footer");
    }
}