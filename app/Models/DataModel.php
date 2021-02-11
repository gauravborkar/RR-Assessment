<?php

namespace App\Models;

use CodeIgniter\Model;
use Exception;

class DataModel extends Model
{
    protected $table = 'data';
    protected $allowedFields = [
        'title',
        'body'
    ];
    protected $updatedField = 'updated_at';

    public function findDataById($id)
    {
        $data = $this
            ->asArray()
            ->where(['id' => $id])
            ->first();

        if (!$data) throw new Exception('Could not find data for specified ID');

        return $data;
    }
}