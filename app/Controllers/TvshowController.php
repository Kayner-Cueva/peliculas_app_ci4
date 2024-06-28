<?php

namespace App\Controllers;

use App\Models\TvshowModel;
class TvshowController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct(){
        helper('form');
        $this->db=db_connect();
    }

    public function index_tvshow()
    {
        $TvshowModel =new TvshowModel();
        $Tvshow=$TvshowModel->paginate(10);
        $paginator=$TvshowModel->pager;
        $Tvshow=array('tvshow' =>$Tvshow,'paginator'=>$paginator);
        $Estructura=view('Tvshow/listar',$Tvshow);
        return $Estructura;
    }

    public function guardar_tvshow(){
        $TvshowModel=new TvshowModel();
        $request =\Config\Services::request();
        $data=array(
            'portada'=>$request->getPost('txtPortada'),
            'logo'=>$request->getPost('txtLogo'),
            'canal'=>$request->getPost('txtCanal'),
            'url_show'=>$request->getPost('UrlSHow'),
        );
        if($TvshowModel->save($data)===false){
            var_dump($TvshowModel->errors());
        }
        return redirect()->to('index_tvshow'); // Reemplaza 'ruta_de_redireccion' con la ruta deseada.
    }

    public function editar_tvshow()
    {
        $id = $this->request->getGet('id');
        $TvshowModel = new TvshowModel();
        $Tvshow=$TvshowModel->find($id);
        $data['tvshow']=$Tvshow;
        $Estructura=view('Tvshow/editar',$data);
        return $Estructura;
    }

    public function modificar_tvshow(){
        $TvshowModel=new TvshowModel();
        $request =\Config\Services::request();
        $id = $this->request->getPostGet('txtCodigo');
        $data=array(
            'portada'=>$request->getPost('txtPortada'),
            'logo'=>$request->getPost('txtLogo'),
            'canal'=>$request->getPost('txtCanal'),
            'url_show'=>$request->getPost('UrlShow'),
        );
        if($TvshowModel->update($id,$data)===false){
            var_dump($TvshowModel->errors());
        }
        $builder = $this->db->table("series");
        $builder->select('*');
        $Tvshow = $builder->get()->getResult();
        $data = ['tvshow' => $Tvshow];
        return redirect()->to('index_tvshow');
    }

    public function borrar_tvshow()
    {
        $request = \Config\Services::request();
        $id = $request->getGet('id');
        $TvshowModel = new TvshowModel();
        $Tvshow=$TvshowModel->find($id);
        if ($Tvshow) {
            // Pasar el resultado a la vista de eliminación
            $data['tvshow'] = $Tvshow;
            $Estructura = view('Tvshow/borrar', $data);
            return $Estructura;
        }
    }

    public function eliminar_tvshow(){
        $Tvshow = new TvshowModel();
        $id = $this->request->getPostGet('txtCodigo');
        $TvshowModel=new TvshowModel();
        if ($TvshowModel->delete($id) === false) {
            print_r($Tvshow->errors());
        }
        $builder=$this->db->table("movie");
        $builder->orderBy('id_tvshow','desc');
        $Tvshow=$builder->get()->getResult();
        $Tvshow=array('tvshow' =>$Tvshow);
        return redirect()->to('index_tvshow');
    }
}