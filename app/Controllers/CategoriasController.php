<?php

namespace App\Controllers;

use App\Models\CategoriasModel;

class CategoriasController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct()
    {
        helper('form');
        $this->db = db_connect();
    }

    public function index_categorias()
    {
        $CategoriasModel = new CategoriasModel();
        $builder = $CategoriasModel->select('*')->orderBy('id_categoria', 'asc');
        $data['categorias'] = $builder->paginate(10);
        $data['paginator'] = $CategoriasModel->pager;
        $Estructura = view('Categorias/listar', $data);
        return $Estructura;
    }

    public function nuevo_categorias()
    {
        $builder = $this->db->table("categoria");
        $builder->select('id_categoria,categorias');
        $Categorias = $builder->get()->getResult();
        $Categorias = array('categoria' => $Categorias);
        $Estructura = view('Categorias/nuevo', $Categorias);
        return $Estructura;
    }

    public function guardar_categorias()
    {
        $CategoriasModel = new CategoriasModel();
        $request = \Config\Services::request();
        $data = array(
            'categorias' => $request->getPost('txtNombre'),
        );
        if ($CategoriasModel->save($data) === false) {
            var_dump($CategoriasModel->errors());
        }
        return redirect()->to('index_categorias'); // Reemplaza 'ruta_de_redireccion' con la ruta deseada.
    }

    public function editar_categorias()
    {
        $id = $this->request->getGet('id');
        $CategoriasModel = new CategoriasModel();
        $Categorias = $CategoriasModel->find($id);
        $data['categorias'] = $Categorias;
        $Estructura = view('Categorias/editar', $data);
        return $Estructura;
    }

    public function modificar_categorias()
    {
        $CategoriasModel = new CategoriasModel();
        $request = \Config\Services::request();
        $id = $this->request->getPostGet('txtCodigo'); // Obtener el ID del formulario
        $data = array(
            'categorias' => $request->getPost('txtNombre'),
        );
        if ($CategoriasModel->update($id, $data) === false) {
            var_dump($CategoriasModel->errors());
        }
        $builder = $this->db->table("categoria");
        $builder->select('*');
        $Categorias = $builder->get()->getResult();
        $Categorias = array('categorias' => $Categorias);
        return redirect()->to('index_categorias');
    }

    public function borrar_categorias()
    {
        $request = \Config\Services::request();
        $id = $request->getGet('id');
        $CategoriasModel = new CategoriasModel();
        $categoria = $CategoriasModel->find($id);
        if ($categoria) {
            // Pasar el resultado a la vista de eliminación
            $data['categorias'] = $categoria;
            $Estructura = view('Categorias/borrar', $data);
            return $Estructura;
        }
    }

    public function eliminar_categorias(){
        $Categorias = new CategoriasModel();
        $id = $this->request->getPostGet('txtCodigo');
        $CategoriasModel=new CategoriasModel();
        if ($CategoriasModel->delete($id) === false) {
            print_r($Categorias->errors());
        }
        $builder=$this->db->table("categoria");
        $builder->orderBy('id_categoria','desc');
        $Categorias=$builder->get()->getResult();
        $Categorias=array('categorias' =>$Categorias);
        return redirect()->to('index_categorias');

    }
}