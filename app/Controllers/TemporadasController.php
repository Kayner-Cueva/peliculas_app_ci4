<?php

namespace App\Controllers;

use App\Models\TemporadaModel;

class TemporadasController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct(){
        helper('form');
        $this->db=db_connect();
    }

    public function index_temporadas()
    {
        $SeriesModel =new TemporadaModel();
        $series=$SeriesModel->paginate(10);
        $paginator=$SeriesModel->pager;
        $series=array('temporada' =>$series,'paginator'=>$paginator);
        $Estructura=view('Series/listartemporada',$series);
        return $Estructura;
    }

    public function guardar_temporadas(){
        $SeriesModel=new TemporadaModel();
        $request =\Config\Services::request();
        $data=array(
            'temporada'=>$request->getPost('txtTemporada'),
        );
        if($SeriesModel->save($data)===false){
            var_dump($SeriesModel->errors());
        }
        return redirect()->to('index_temporadas'); // Reemplaza 'ruta_de_redireccion' con la ruta deseada.
    }
}