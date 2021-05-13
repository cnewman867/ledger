<?php

namespace App\Models;

use CodeIgniter\Model;

class LedgerModel extends Model
{
    protected $table      = 'transactions';
    protected $primaryKey = 'id';

    // protected $useAutoIncrement = true;

    // protected $returnType     = 'array';
    // protected $useSoftDeletes = true;

    protected $allowedFields = ['amount', 'description', 'credit', 'pay'];

    protected $useTimestamps = true;
    protected $createdField  = 'date_created';
    protected $updatedField  = 'date_updated';

    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;

    // protected $beforeInsert = ['checkName'];

    // afterInsert
    // beforeUpdate
    // afterUpdate
    // afterFind

    // public function checkName(array $data){
    //     $newTitle = $data['data']['post_title'].' Extra Features';
    //     $data['data']['post_title'] = $newTitle;

    //     return $data;
    // }
}
