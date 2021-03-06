<?php

namespace App\Models;

use CodeIgniter\Model;

class FeedBoardModel extends Model
{
    protected $table = 'FEED_BOARD as FB';
    protected $primaryKey = 'idx';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = [
        'idx',
        'user_id',
        'feed_content'
    ];

    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
}