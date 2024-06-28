<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;


class UsuariosModel extends Model
{
    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuario';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['nombre_completo','correo','usuario','contrasena','rol','created_at','updated_at','deleted_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules = [
        // Define tus reglas de validación aquí si es necesario.
    ];

    protected $validationMessages = [
        // Define mensajes de error de validación aquí si es necesario.
    ];

    protected $skipValidation = false; // Habilita o deshabilita la validación.

    //registar Auditorias
    protected $afterInsert = ["auditar"];
    protected $afterUpdate = ["auditar"];
    protected $afterDelete = ["auditar"];
    //metodo registra Auditoria
    protected function auditar(array $data)
    {

        $AuditoriasModel = new AuditoriaModel();
        $usuid = $_SESSION['id_usuario'];

        $audaccion = explode(" ", $this->getLastQuery())[0];

        if(isset($data['purge'])){
            $audaccion = "DELETE";
        }

        $audtabla = explode(" ", $this->getLastQuery())[2];

        if($audaccion=='UPDATE' || $audaccion=='DELETE'){
            $audtabla = explode(" ", $this->getLastQuery())[1];
        }

        $audfecha = (new Time('now'))->toDateString();
        $audsentencia = $this->getLastQuery();
        $localIP = getHostByName(getHostName());

        $AuditoriasModel->save(array(
            'id_usuario'=>$usuid,
            'accion'=>$audaccion,
            'tabla'=>$audtabla,
            'fecha'=>$audfecha,
            'ip'=>$localIP,
            'host'=>$localIP,
            'sentencia'=>$audsentencia,
        ));
    }
}
