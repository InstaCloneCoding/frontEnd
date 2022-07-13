<?php

namespace App\Models;

use CodeIgniter\Model;

class LikeBoardModel extends Model
{
    protected $table = 'LIKE_BOARD as LB';
    protected $primaryKey = 'idx';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'idx',
        'user_id',
        'board_idx',
        'comment_like_idx'
    ];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}