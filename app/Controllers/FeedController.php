<?php

namespace App\Controllers;

use App\Libraries\curl\Curl;
use App\Libraries\define\Define as Define;
use App\Libraries\file\FileSave as FileSave;
use CodeIgniter\API\ResponseTrait;

class FeedController extends BaseController
{
    use ResponseTrait;

    public function content() {
        $post = $this->request->getPost();
        $files = $this->request->getFiles();

        if( !$files ) {
            return $this->fail(["msg" => ""]);
        }

        $file = FileSave::saveFiles($files);

        $sendFile = new \stdClass();
        $sendFile->filePath = $file['fileInput']->getClientName();
        $sendFile->fileSize = $files['fileInput']->getSize();
        $sendFile->fileMimeType = $files['fileInput']->getMimeType();
        $sendFile->fileName = $files['fileInput']->getName();

        $sendData = new \stdClass();
        $sendData->userId = $post['userId'];
        $sendData->feedContent = $post['newPostData'];

        $getData = Curl::curlPost(Define::setAPIServer()."/content/data", $sendData);
        $getDataArr = json_decode($getData);
        $sendFile->boardIdx = $getDataArr->states->idx;

        $isSendFile = Curl::curlPost(Define::setAPIServer()."/content/sendFile", $sendFile);

        return redirect()->to("/");
    }
}