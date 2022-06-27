<?php

namespace App\Libraries\file;

class FileSave
{
    public static function saveFiles($files) {
        $randomName = $files['fileInput']->getRandomName();
        $files['fileInput']->move(WRITEPATH. 'uploads', $randomName);

        return $files;
    }
}