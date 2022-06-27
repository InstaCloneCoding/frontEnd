<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define as Define;
use App\Libraries\file\FileSave as FileSave;

class FeedController extends BaseController
{
    public function content() {
        $post = $this->request->getPost();
        $files = $this->request->getFiles();

        if( $files ) {
            $result = FileSave::saveFiles($files);
        }

        //$result = Curl::curlPost(Define::setAPIServer()."/content", $post);
        $result = '';
        return redirect()->to("/");
    }
}