<?php namespace App\Models;

use CodeIgniter\Model;

class Pasien_Model extends Model {
    protected $table      = 'PASIEN';
    protected $primaryKey = 'KODEPAS';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['KODEPAS', 'NAMEPAS', 'AGE', 'SEX', 'KODEKEL', 'KODEDOK', 'STATUS', 'MASUK'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}