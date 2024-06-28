<?php

namespace App\Controllers;

use App\Models\AuditoriaModel;
use App\Models\UsuariosModel;

class AuditoriaController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct()
    {
        helper('form');
        $this->db = db_connect();
    }

    public function index_auditoria()
    {
        $tabla1 =new AuditoriaModel();
        $tabla2 =new UsuariosModel();
        $paginator=$tabla1->pager;
        $query = $tabla1->join('usuarios', 'auditoria.id_usuario = usuarios.id_usuario');
        $data = [
            'auditorias' => $query->findAll(),
            'paginator' => $paginator,
        ];
        $estructura = view('Auditorias/listar', $data);
        return $estructura;
    }

    public function reportePDf()
    {

        //get data
        $auditorias = $this->db->table("auditoria t1")
            ->select("t1.*, t2.nombre_completo")
            ->join('usuarios t2', 't2.id_usuario = t1.id_usuario')
            ->orderBy('t1.created_at', 'desc')
            ->get()->getResultArray();
        $data['auditorias'] = $auditorias;
        //invocar dompdf
        $dompdf = new \Dompdf\Dompdf();
        //carga el template dompdf
        $dompdf->loadHtml(view('Auditorias/reporteAuditorias', $data));
        //set paramatros pdf
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        //retorna pdf download
        $dompdf->stream();
    }
}
