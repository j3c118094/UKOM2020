<?php namespace App\Models;

use CodeIgniter\Model;

class Dokter_Model extends Model {
    protected $table      = 'DOKTER';
    protected $primaryKey = 'KODEDOK';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['KODEDOK', 'NAMADOK', 'SEX', 'AGE', 'DUTYCODE'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}