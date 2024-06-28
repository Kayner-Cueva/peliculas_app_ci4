<?php

namespace App\Models;

use CodeIgniter\Model;


class AuditoriaModel extends Model
{
    protected $table      = 'auditoria';
    protected $primaryKey = 'id_autoria';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['id_usuario','accion','tabla','fecha','ip','host','sentencia','created_at','updated_at','deleted_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}