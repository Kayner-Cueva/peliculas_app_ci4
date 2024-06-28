<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\I18n\Time;

class PeliculasModel extends Model
{
    protected $table = 'movie';
    protected $primaryKey = 'id_peliculas';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['portada','fondo','logo','titulo','descripcion','categorias','creador','fecha_estreno','duracion','url_pelicula','created_at','updated_at','deleted_at'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Valor por defecto para deleted_at
    protected $tempDeletedAt = 127; // Valor por defecto que se establecerá al borrar

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