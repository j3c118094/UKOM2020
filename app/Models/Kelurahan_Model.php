<?php namespace App\Models;

use CodeIgniter\Model;

class Kelurahan_Model extends Model {
    protected $table      = 'KELURAHAN';
    protected $primaryKey = 'KODEKEL';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['KODEKEL', 'NAMAKEL', 'JENIS', 'KODEKEC'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}