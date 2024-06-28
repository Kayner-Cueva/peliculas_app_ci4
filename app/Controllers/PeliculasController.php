<?php

namespace App\Controllers;

use App\Models\PeliculasModel;
use App\Models\CategoriasModel;
class PeliculasController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct(){
        helper('form');
        $this->db=db_connect();
    }

    public function index_peliculas()
    {
        $PeliculasModel =new PeliculasModel();
        $Peliculas=$PeliculasModel->paginate(10);
        $paginator=$PeliculasModel->pager;
        $Peliculas=array('peliculas' =>$Peliculas,'paginator'=>$paginator);
        $Estructura=view('Peliculas/listar',$Peliculas);
        return $Estructura;
    }

    public function guardar_peliculas(){
        $PeliculasModel=new PeliculasModel();
        $request =\Config\Services::request();
        $data=array(
            'portada'=>$request->getPost('txtPortada'),
            'fondo'=>$request->getPost('txtFondo'),
            'logo'=>$request->getPost('txtLogo'),
            'titulo'=>$request->getPost('txtTitulo'),
            'descripcion'=>$request->getPost('txtDescripcion'),
            'categorias'=>$request->getPost('txtCategorias'),
            'creador'=>$request->getPost('txtCreador'),
            'fecha_estreno'=>$request->getPost('txtFecha'),
            'duracion'=>$request->getPost('txtDuracion'),
            'url_pelicula'=>$request->getPost('UrlPeliculas'),
        );
        if($PeliculasModel->save($data)===false){
            var_dump($PeliculasModel->errors());
        }
        return redirect()->to('index_peliculas'); // Reemplaza 'ruta_de_redireccion' con la ruta deseada.
    }

    public function editar_peliculas()
    {
        $id = $this->request->getGet('id');
        $PeliculasModel = new PeliculasModel();
        $Peliculas=$PeliculasModel->find($id);
        $data['peliculas']=$Peliculas;
        $Estructura=view('Peliculas/editar',$data);
        return $Estructura;
    }

    public function modificar_peliculas(){
        $PeliculasModel=new PeliculasModel();
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
            'duracion'=>$request->getPost('txtDuracion'),
            'url_pelicula'=>$request->getPost('UrlPeliculas'),
        );
        if($PeliculasModel->update($id,$data)===false){
            var_dump($PeliculasModel->errors());
        }
        $builder = $this->db->table("movie");
        $builder->select('*');
        $Peliculas = $builder->get()->getResult();
        $data = ['peliculas' => $Peliculas];
        return redirect()->to('index_peliculas');
    }

    public function borrar_peliculas()
    {
        $request = \Config\Services::request();
        $id = $request->getGet('id');
        $PeliculasModel = new PeliculasModel();
        $Peliculas=$PeliculasModel->find($id);
        if ($Peliculas) {
            // Pasar el resultado a la vista de eliminación
            $data['peliculas'] = $Peliculas;
            $Estructura = view('Peliculas/borrar', $data);
            return $Estructura;
        }
    }

    public function eliminar_peliculas(){
        $Peliculas = new PeliculasModel();
        $id = $this->request->getPostGet('txtCodigo');
        $PeliculasModel=new PeliculasModel();
        if ($PeliculasModel->delete($id) === false) {
            print_r($Peliculas->errors());
        }
        $builder=$this->db->table("movie");
        $builder->orderBy('id_peliculas','desc');
        $Peliculas=$builder->get()->getResult();
        $Peliculas=array('peliculas' =>$Peliculas);
        return redirect()->to('index_peliculas');
    }
}