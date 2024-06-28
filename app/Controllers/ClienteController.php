<?php

namespace App\Controllers;

use App\Models\PeliculasModel;
use App\Models\SeriesModel;
use App\Models\TvshowModel;

class ClienteController extends BaseController
{
	public function index(): string
{
    $tabla1Model = new PeliculasModel();
    $tabla2Model = new SeriesModel();
    $tabla3Model = new TvshowModel();
    // Especifica el número máximo de fondos que deseas mostrar en el slider (por ejemplo, 5)
    $limit = 5;
    $data = [
            'peliculas' => $tabla1Model->findAll($limit),
            'series' => $tabla2Model->findAll($limit),
            'tvshow' => $tabla3Model->findAll($limit)
        ]; // Obten todos los registros
    $Estructura = view('Estructura/Encabezado', $data);
    return $Estructura;
}

    public function verpeliculas(){
        $id = $this->request->getGet('id');
        $tabla1Model = new PeliculasModel();
        $peliculas = $tabla1Model->find($id);
        $data['peliculas'] = $peliculas;
        $Estructura = view('Estructura/Body', $data);
        return $Estructura;
    }

    public function peliculas(){
        $id = $this->request->getGet('id');
        $tabla1Model = new PeliculasModel();
        $peliculas = $tabla1Model->find($id);
        $data['peliculas'] = $peliculas;
        $Estructura = view('Client/peliculas', $data);
        return $Estructura;
    }

    public function series(){
        $id = $this->request->getGet('id');
        $tabla1Model = new SeriesModel();
        $series = $tabla1Model->find($id);
        $data['series'] = $series;
        $Estructura = view('Client/series', $data);
        return $Estructura;
    }

    public function verseries(){
        $id = $this->request->getGet('id');
        $tabla1Model = new SeriesModel();
        $series = $tabla1Model->find($id);
        $data['series'] = $series;
        $Estructura = view('Estructura/Series', $data);
        return $Estructura;
    }

    public function tvshow(){
        $id = $this->request->getGet('id');
        $tabla1Model = new PeliculasModel();
        $peliculas = $tabla1Model->find($id);
        $data['peliculas'] = $peliculas;
        $Estructura = view('Client/tvshow', $data);
        return $Estructura;
    }

    public function vertvshow(){
        $id = $this->request->getGet('id');
        $tabla1Model = new TvshowModel();
        $tvshow = $tabla1Model->find($id);
        $data['tvshow'] = $tvshow;
        $Estructura = view('Estructura/TVshow', $data);
        return $Estructura;
    }
}