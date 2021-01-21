<?php namespace App\Models;

use CodeIgniter\Model;

class Comment_Model extends Model {
    protected $table      = 'COMMENT';
    protected $primaryKey = 'ID';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['ID', 'NAMA', 'COMMENT'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}