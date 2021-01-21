<?php namespace App\Models;

use CodeIgniter\Model;

class Kecamatan_Model extends Model {
    protected $table      = 'KECAMATAN';
    protected $primaryKey = 'KODEKEC';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['KODEKEC', 'NAMAKEC'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}