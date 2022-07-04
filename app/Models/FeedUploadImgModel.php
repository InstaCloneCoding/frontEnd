<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedUploadImgModel extends Model
{
    protected $table = 'FEED_UPLOAD_IMG';
    protected $primaryKey = 'idx';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'idx',
        'board_idx',
        'content_type',
        'file_path',
        'file_name',
        'file_size'
    ];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}