<?php

namespace App\Libraries\file;

class FileSave
{
    public static function saveFiles($files) {

        move_uploaded_file($files->from, $files->to);

        return $files;
    }
}