<?php

namespace App\Controllers;

use App\Models\UsuariosModel;

class RegistroController extends BaseController
{
    // Declarar la propiedad db
    protected $db;

    public function __construct(){
        helper('form');
        $this->db=db_connect();
    }

    public function index_usuarios()
    {
        $UsuariosModel =new UsuariosModel();
        $Usuarios=$UsuariosModel->paginate(10);
        $paginator=$UsuariosModel->pager;
        $Usuarios=array('usuario' =>$Usuarios,'paginator'=>$paginator);
        $Estructura=view('Usuarios/listar',$Usuarios);
        return $Estructura;
    }

    public function nuevo_usuarios()
    {
        $builder = $this->db->table("usuarios");
        $builder->select('id_usuario,nombre_completo,correo,usuario,contrasena,rol');
        $Usuarios = $builder->get()->getResult();
        $Usuarios=array('usuario'=>$Usuarios);
        $Estructura=view('Usuarios/nuevo',$Usuarios);
        return $Estructura;
    }

    public function guardar_usuarios(){
        $UsuariosModel=new UsuariosModel();
        $request =\Config\Services::request();
        $data=array(
            'nombre_completo'=>$request->getPostGet('txtNombre'),
            'correo'=>$request->getPostGet('txtCorreo'),
            'usuario'=>$request->getPostGet('txtUsuarios'),
            'contrasena'=>$request->getPostGet('txtClave'),
            'rol'=>'cliente',
        );
        if($UsuariosModel->save($data)===false){
            var_dump($UsuariosModel->errors());
        }
        return redirect()->to('ClienteController/index'); // Reemplaza 'ruta_de_redireccion' con la ruta deseada.
    }

    public function editar_usuarios()
    {
        $request =\Config\Services::request();
        $id=$request->getPostGet('id');
        $UsuariosModel = new UsuariosModel();
        $Usuarios=$UsuariosModel->find($id);
        $Usuarios=array('usuario'=>$Usuarios);
        $data['usuario']=$Usuarios;
        $Estructura=view('Usuarios/editar',$data);
        return $Estructura;
    }

    public function modificar_usuarios(){
        $UsuariosModel=new UsuariosModel();
        $request =\Config\Services::request();
        $data=array(
            'nombre_completo'=>$request->getPost('txtNombre'),
            'correo'=>$request->getPost('txtCorreo'),
            'usuario'=>$request->getPost('txtUsuarios'),
            'contrasena'=>$request->getPost('txtClave'),
            'rol'=>$request->getPost('txtRol'),
        );
        if($UsuariosModel->save($data)===false){
            var_dump($UsuariosModel->errors());
        }
        $builder=$this->db->table("usuarios");
        $builder->select('*');
        $UsuariosModel =new UsuariosModel();
        $Usuarios=$builder->get()->getResult();
        $Usuarios=array('usuario' =>$Usuarios);
        $Estructura=view('Usuarios/listar',$Usuarios);
        return $Estructura;
    }

    public function borrar_usuarios()
    {
        $request =\Config\Services::request();
        $id=$request->getPostGet('id');
        $UsuariosModel = new UsuariosModel();
        $Usuarios=$UsuariosModel->find($id);
        $Usuarios=array('usuario'=>$Usuarios);
        $data['usuario']=$Usuarios;
        $Estructura=view('Usuarios/borrar',$data);
        return $Estructura;
    }

    public function eliminar_usuarios(){
        $Usuarios = new UsuariosModel();
        $id = $this->request->getPostGet('txtCodigo');
        $UsuariosModel=new UsuariosModel();
        if ($UsuariosModel->delete($id) === false) {
            print_r($Usuarios->errors());
        } else {
            $UsuariosModel->purgedeleted($id);

        }
        $builder=$this->db->table("usuarios");
        $builder->orderBy('id_usuario','desc');
        $Usuarios=$builder->get()->getResult();
        $Usuarios=array('usuario' =>$Usuarios);
        $Estructura=view('Usuarios/listar',$Usuarios);
        return $Estructura;

    }
}