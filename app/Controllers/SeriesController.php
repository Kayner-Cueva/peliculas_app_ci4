<?php

namespace App\Controllers;

use App\Models\SeriesModel;

class seriesController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct(){
        helper('form');
        $this->db=db_connect();
    }

    public function index_series()
    {
        $SeriesModel =new SeriesModel();
        $series=$SeriesModel->paginate(10);
        $paginator=$SeriesModel->pager;
        $series=array('series' =>$series,'paginator'=>$paginator);
        $Estructura=view('Series/listar',$series);
        return $Estructura;
    }

    public function guardar_series(){
        $SeriesModel=new SeriesModel();
        $request =\Config\Services::request();
        $data=array(
            'portada'=>$request->getPost('txtPortada'),
            'fondo'=>$request->getPost('txtFondo'),
            'logo'=>$request->getPost('txtLogo'),
            'titulo'=>$request->getPost('txtTitulo'),
            'descripcion'=>$request->getPost('txtDescripcion'),
            'categoria'=>$request->getPost('txtCategorias'),
            'creador'=>$request->getPost('txtCreador'),
            'fecha_estreno'=>$request->getPost('txtFecha'),
            'temporada'=>$request->getPost('txtTemporada'),
        );
        if($SeriesModel->save($data)===false){
            var_dump($SeriesModel->errors());
        }
        return redirect()->to('index_series'); // Reemplaza 'ruta_de_redireccion' con la ruta deseada.
    }

    public function editar_series()
    {
        $id = $this->request->getGet('id');
        $SeriesModel = new SeriesModel();
        $series=$SeriesModel->find($id);
        $data['series']=$series;
        $Estructura=view('Series/editar',$data);
        return $Estructura;
    }

    public function modificar_series(){
        $SeriesModel=new SeriesModel();
        $request =\Config\Services::request();
        $id = $this->request->getPostGet('txtCodigo');
        $data=array(
            'portada'=>$request->getPost('txtPortada'),
            'fondo'=>$request->getPost('txtFondo'),
            'logo'=>$request->getPost('txtLogo'),
            'titulo'=>$request->getPost('txtTitulo'),
            'descripcion'=>$request->getPost('txtDescripcion'),
            'categorias'=>$request->getPost('txtCategorias'),
            'creador'=>$request->getPost('txtCreador'),
            'fecha_estreno'=>$request->getPost('txtFecha'),
            'temporada'=>$request->getPost('txtTemporada'),
        );
        if($SeriesModel->update($id,$data)===false){
            var_dump($SeriesModel->errors());
        }
        $builder = $this->db->table("series");
        $builder->select('*');
        $series = $builder->get()->getResult();
        $data = ['series' => $series];
        return redirect()->to('index_series');
    }

    public function borrar_series()
    {
        $request = \Config\Services::request();
        $id = $request->getGet('id');
        $SeriesModel = new SeriesModel();
        $series=$SeriesModel->find($id);
        if ($series) {
            // Pasar el resultado a la vista de eliminación
            $data['series'] = $series;
            $Estructura = view('Series/borrar', $data);
            return $Estructura;
        }
    }

    public function eliminar_series(){
        $series = new SeriesModel();
        $id = $this->request->getPostGet('txtCodigo');
        $SeriesModel=new SeriesModel();
        if ($SeriesModel->delete($id) === false) {
            print_r($series->errors());
        }
        $builder=$this->db->table("series");
        $builder->orderBy('id_series','desc');
        $series=$builder->get()->getResult();
        $series=array('series' =>$series);
        return redirect()->to('index_series');
    }
}