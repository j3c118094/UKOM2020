<?php namespace App\Models;

use CodeIgniter\Model;

class Hospital_Model extends Model {
    protected $table      = 'RS';
    protected $primaryKey = 'KODERS';

    protected $returnType     = 'object';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['KODERS', 'NAMARS', 'ALAMAT', 'KONTAK', 'KODEKEL'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}