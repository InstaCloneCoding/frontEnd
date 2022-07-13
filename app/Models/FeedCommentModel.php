<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedCommentModel extends Model
{
    protected $table = 'FEED_COMMENT as FC';
    protected $primaryKey = 'idx';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'idx',
        'user_id',
        'board_idx',
        'comment_idx'
    ];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
}