<?php

namespace App\Libraries\file;

class FileSave
{
    public static function saveFiles($files) {
        $randomName = $files['fileInput']->getRandomName();
        $files['fileInput']->move(FCPATH.'/uploads', $randomName);

        return $files;
    }
}