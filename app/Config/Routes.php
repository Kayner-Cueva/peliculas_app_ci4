<?php

use CodeIgniter\Router\RouteCollection;



/**
* @var RouteCollection $routes
**/

// Home
$routes->get('/', 'Home::login');
$routes->get('/login', 'Home::login');
$routes->get('Home/index', 'Home::index');
$routes->get('admin', 'AdminController::admin');
$routes->get('contacto', 'AdminController::contacto');
$routes->get('ClienteController/index', 'ClienteController::index');


// Registro Usuarios
$routes->get('nuevo_usuarios', 'RegistroController::nuevo_usuarios');
$routes->get('borrar_usuarios', 'RegistroController::borrar_usuarios');
$routes->get('editar_usuarios', 'RegistroController::editar_usuarios');
$routes->get('index_usuarios', 'RegistroController::index_usuarios');
$routes->post('eliminar_usuarios', 'RegistroController::eliminar_usuarios');
$routes->post('guardar_usuarios', 'RegistroController::guardar_usuarios');
$routes->post('modificar_usuarios', 'RegistroController::modificar_usuarios');

// Registro Peliculas
$routes->get('nuevo_peliculas', 'PeliculasController::nuevo_peliculas');
$routes->get('borrar_peliculas', 'PeliculasController::borrar_peliculas');
$routes->get('editar_peliculas', 'PeliculasController::editar_peliculas');
$routes->get('index_peliculas', 'PeliculasController::index_peliculas');
$routes->post('eliminar_peliculas', 'PeliculasController::eliminar_peliculas');
$routes->post('guardar_peliculas', 'PeliculasController::guardar_peliculas');
$routes->post('modificar_peliculas', 'PeliculasController::modificar_peliculas');

// Reproductores
$routes->get('verpeliculas', 'ClienteController::verpeliculas');
$routes->get('verseries', 'ClienteController::verseries');
$routes->get('vertvshow', 'ClienteController::vertvshow');
$routes->get('peliculas', 'ClienteController::peliculas');
$routes->get('series', 'ClienteController::series');
$routes->get('tvshow', 'ClienteController::tvshow');

// Registro Series
$routes->get('nuevo_series', 'SeriesController::nuevo_series');
$routes->get('borrar_series', 'SeriesController::borrar_series');
$routes->get('editar_series', 'SeriesController::editar_series');
$routes->get('index_series', 'SeriesController::index_series');
$routes->post('eliminar_series', 'SeriesController::eliminar_series');
$routes->post('guardar_series', 'SeriesController::guardar_series');
$routes->post('modificar_series', 'SeriesController::modificar_series');

// Registro Temporadas
$routes->get('index_temporadas', 'TemporadasController::index_temporadas');
$routes->post('guardar_temporadas', 'TemporadasController::guardar_temporadas');

// Registro Episodios
$routes->get('nuevo_episodios', 'EpisodiosController::nuevo_episodios');
$routes->get('borrar_episodios', 'EpisodiosController::borrar_episodios');
$routes->get('editar_episodios', 'EpisodiosController::editar_episodios');
$routes->get('index_episodios', 'EpisodiosController::index_episodios');
$routes->post('eliminar_episodios', 'EpisodiosController::eliminar_episodios');
$routes->post('guardar_episodios', 'EpisodiosController::guardar_episodios');
$routes->post('modificar_episodios', 'EpisodiosController::modificar_episodios');

// Registro Categorias
$routes->get('nuevo_categorias', 'CategoriasController::nuevo_categorias');
$routes->get('borrar_categorias', 'CategoriasController::borrar_categorias');
$routes->get('editar_categorias', 'CategoriasController::editar_categorias');
$routes->get('index_categorias', 'CategoriasController::index_categorias');
$routes->post('eliminar_categorias', 'CategoriasController::eliminar_categorias');
$routes->post('guardar_categorias', 'CategoriasController::guardar_categorias');
$routes->post('modificar_categorias', 'CategoriasController::modificar_categorias');

// Registro Tv Show
$routes->get('nuevo_tvshow', 'TvshowController::nuevo_tvshow');
$routes->get('borrar_tvshow', 'TvshowController::borrar_tvshow');
$routes->get('editar_tvshow', 'TvshowController::editar_tvshow');
$routes->get('index_tvshow', 'TvshowController::index_tvshow');
$routes->post('eliminar_tvshow', 'TvshowController::eliminar_tvshow');
$routes->post('guardar_tvshow', 'TvshowController::guardar_tvshow');
$routes->post('modificar_tvshow', 'TvshowController::modificar_tvshow');


// Auditorias

$routes->get('index_auditoria', 'AuditoriaController::index_auditoria');
$routes->get('reportePDf', 'AuditoriaController::reportePDf');