<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


///control de expedientes RRHH
//-------------------------------------RRHH-----------------------------------------------------
Route::get('/rrhh', 'RrhhController@index')->name('rrhh');
Route::get('reportes/rrhh', 'RrhhController@reporterrhh')->name('reportesrrhh');

Route::get('/rrhh/funcionario/planillarrhh', 'RrhhController@planillarrhh')->name('planillarrhh');
Route::get('/rrhh/ver_trabajador', 'RrhhController@create')->name('ver_trabajador');

Route::get('/rrhh/searchredirect', function(){     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "/rrhh/ver_trabajador/$search";
    return redirect($route);
});

Route::get('/rrhh/search_nvo_ingreso', function(){     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "/rrhh/nuevo_ingreso/$search";
    return redirect($route);
});

Route::get("/rrhh/ver_trabajador/{search}", "RrhhController@search");
Route::get("/rrhh/datos_rrhh/{cedula}", "RrhhController@search_datos")->name('datos_rrhh');
Route::get("/rrhh/movimientos/{cedula}", "RrhhController@movimientos")->name('mov_rrhh');

Route::get("/rrhh/nuevo_ingreso/", "RrhhController@nuevo_ingreso")->name('ingreso_rrhh');
Route::get("/rrhh/nuevo_ingreso/{search_nvo_ingreso}", "RrhhController@buscar_nuevo_ingreso");
Route::post("/rrhh/nuevo_ingreso", "RrhhController@store_nuevo_ingreso")->name('store_ingreso_rrhh');

Route::get("/rrhh/registrar_adm_publica_edit/{id}/{cedula}", "RrhhController@antecedentes_edit")->name('antecedentes_rrhh_edit');
Route::get("/rrhh/registrar_adm_publica/{cedula}", "RrhhController@antecedentes")->name('antecedentes_rrhh');
Route::post("/rrhh/registrar_adm_publica", "RrhhController@store_antecedentes")->name('store_antecedentes');
Route::post("/rrhh/registrar_adm_publica_edit", "RrhhController@update_antecedentes")->name('update_antecedentes');
Route::delete('registrar_adm_publica/{id}', 'RrhhController@destroy')->name('borrar_adm_pub');
Route::post("/rrhh/registrar_adm_publica_edit", "RrhhController@update_fecha_ingreso")->name('update_fecha_ingreso');

Route::get("/rrhh/registrar_vac_pendientes/{cedula}", "RrhhController@vac_pendientes_rrhh")->name('vac_pendientes_rrhh');
Route::get("/rrhh/registrar_vac_pendientesedit/{id}/{cedula}", "RrhhController@vac_pendientes_rrhh_edit")->name('vac_pendientes_rrhh_edit');
Route::post("/rrhh/registrar_vac_pendientes", "RrhhController@store_vac_pendientes")->name('store_vac_pendientes');
Route::post("/rrhh/registrar_vac_pendientesedit", "RrhhController@update_vac_pendientes")->name('update_vac_pendientes');
Route::delete('registrar_vac_pendientes/{id}', 'RrhhController@destroy_vac_pendientes')->name('borrar_vac_pendientes');

Route::get("/rrhh/registrar_vac_colectivas", "RrhhController@vac_colectivas")->name('vac_colectivas_rrhh');
Route::get("/rrhh/registrar_vac_colectivasedit/{id}", "RrhhController@vac_colectivas_rrhh_edit")->name('vac_colectivas_rrhh_edit');
Route::post("/rrhh/registrar_vac_colectivas", "RrhhController@store_vac_colectivas")->name('store_vac_colectivas');
Route::post("/rrhh/registrar_vac_colectivasedit", "RrhhController@update_vac_colectivas")->name('update_vac_colectivas');
Route::delete('registrar_vac_colectivas/{id}', 'RrhhController@destroy_vac_colectivas')->name('borrar_vac_colectivas');

Route::get("/rrhh/registrar_rrhh/{cedula}","RrhhController@create_mov")->name('registrar_mov_rrhh');
Route::post("/rrhh/registrar_rrhh", "RrhhController@store_mov")->name('store_rrhh');
Route::get("/rrhh/registrar_rrhhedit/{id}","RrhhController@edit_mov")->name('editar_mov_rrhh');
Route::post("/rrhh/registrar_rrhhedit", "RrhhController@update_mov")->name('update_rrhh');
Route::get('/rrhh/requisitos_trab/{cedula}', 'RrhhController@requisitos_cargados')->name('requisitos_rrhh');
Route::get('/rrhh/ver_documento_familiar/{tipo_documento}/{id_familiar}', 'RrhhController@doc_familiar')->name('requisitos_fam');
Route::get('/rrhh/ver_documento_cursos/{tipo_documento}/{id_cursos}', 'RrhhController@doc_cursos')->name('requisitos_cur');
Route::get('/rrhh/ver_documento_laboral/{tipo_documento}/{id_laboral}', 'RrhhController@doc_laboral')->name('requisitos_lab');
Route::get('/rrhh/creardocumento_rrhh/{tipo_documento}/{id_rrhh_mov}/{cedula}', 'RrhhController@requisito_rrhh')->name('req_rrhh');
Route::post('/rrhh/creardocumento_rrhh', 'RrhhController@subirArchivo_rrhh')->name('subirarchivo_rrhh');

//-------------------------------------FUNCIONARIO-----------------------------------------------------
Route::get('/rrhh/funcionario', 'FuncionarioController@index')->name('funcionario');
Route::get('/rrhh/funcionario/datos', 'FuncionarioController@create')->name('datosfuncionario');
Route::get('/rrhh/funcionario/datosedit', 'FuncionarioController@edit')->name('buscarfuncionario');
Route::post('/rrhh/funcionario/datos', 'FuncionarioController@store')->name('funcionariostore');
Route::post('/rrhh/funcionario/datosedit', 'FuncionarioController@updatedatospersonales')->name('funcionarioupdate');
Route::get('/rrhh/funcionario/direccion', 'FuncionarioController@createdireccion')->name('direccionfuncionario');
Route::post('/rrhh/funcionario/direccion', 'FuncionarioController@updatedireccion')->name('updatedireccion');

Route::post('/rrhh/funcionario/submunicipio_fun', 'FuncionarioController@submunicipio')->name('submunicipio_fun');
Route::post('/rrhh/funcionario/subparroquia_fun','FuncionarioController@subparroquia')->name('subparroquia_fun');

Route::get('/rrhh/funcionario/hist_medico', 'FuncionarioController@createhist_medico')->name('hist_medicofuncionario');
Route::post('/rrhh/funcionario/hist_medico', 'FuncionarioController@updatehist_medico')->name('updatehist_medico');

Route::get('/rrhh/funcionario/cta_bancaria', 'FuncionarioController@createbanco')->name('bancofuncionario');
Route::post('/rrhh/funcionario/cta_bancaria', 'FuncionarioController@storebanco')->name('storecuentas');
Route::get('/rrhh/funcionario/cta_bancariaedit/{id}', 'FuncionarioController@editbanco')->name('editarcuentas');
Route::post('/rrhh/funcionario/cta_bancariaedit', 'FuncionarioController@updatebanco')->name('actualizarcuentas');
Route::delete('cta_bancariaedit/{id}', 'FuncionarioController@destroycuenta')->name('borrarcuenta');

Route::get('/rrhh/funcionario/experiencia', 'FuncionarioController@createxperiencia')->name('laboralfuncionario');
Route::post('/rrhh/funcionario/experiencia', 'FuncionarioController@storexperiencia')->name('laboralregistrar');
Route::get('/rrhh/funcionario/experiencia_edit/{id}', 'FuncionarioController@editexperiencia')->name('editarlaboral');
Route::post('/rrhh/funcionario/experiencia_edit', 'FuncionarioController@updatexperiencia')->name('actualizarlaboral');
Route::get('/rrhh/funcionario/creardocumento_laboral/{tipo_documento}/{id_laboral}/{ir}', 'FuncionarioController@requisito_laboral')->name('requisitoslaboral');
Route::post('/rrhh/funcionario/creardocumeto_laboral', 'FuncionarioController@subirArchivo_laboral')->name('subirarchivo_laboral');
Route::delete('experiencia/{id}', 'FuncionarioController@destroylaboral')->name('borrarlaboral');

Route::get('/rrhh/funcionario/educacion', 'FuncionarioController@createducacion')->name('educacionfuncionario');
Route::post('/rrhh/funcionario/educacion', 'FuncionarioController@storeducacion')->name('registrareducacion');
Route::get('/rrhh/funcionario/educacion_edit', 'FuncionarioController@editeducacion')->name('editeducacion');
Route::post('/rrhh/funcionario/educacion_edit', 'FuncionarioController@updateducacion')->name('actualizareducacion');

Route::get('/rrhh/funcionario/estudios_act', 'FuncionarioController@createstudios_act')->name('estudios_actfuncionario');
Route::post('/rrhh/funcionario/estudios_act', 'FuncionarioController@updatestudios_act')->name('registrarestudios_act');

Route::get('/rrhh/funcionario/cursos', 'FuncionarioController@createcursos')->name('cursos_funcionario');
Route::post('/rrhh/funcionario/cursos', 'FuncionarioController@storecursos')->name('cursosregistrar');

Route::get('/rrhh/funcionario/cursos_edit/{id}', 'FuncionarioController@editcursos')->name('editar_funcionario');
Route::post('/rrhh/funcionario/cursos_edit', 'FuncionarioController@updatecursos')->name('actualizarcursos');
Route::get('/rrhh/funcionario/creardocumento_curso/{tipo_documento}/{id_curso}/{ir}', 'FuncionarioController@requisito_cursos')->name('requisitoscurso');
Route::post('/rrhh/funcionario/creardocumeto_curso', 'FuncionarioController@subirArchivo_cursos')->name('subirarchivo_curso');
Route::delete('cursos/{id}', 'FuncionarioController@destroycursos')->name('borrarcursos');

Route::get('/rrhh/funcionario/idiomas', 'FuncionarioController@createidiomas')->name('idiomas_funcionario');
Route::post('/rrhh/funcionario/idiomas', 'FuncionarioController@storeidiomas')->name('idiomasregistrar');
Route::get('/rrhh/funcionario/idiomas_edit/{id}', 'FuncionarioController@editidiomas')->name('editaridiomas');
Route::post('/rrhh/funcionario/idiomas_edit', 'FuncionarioController@updateidiomas')->name('actualizaridiomas');
Route::delete('idiomas/{id}', 'FuncionarioController@destroyidiomas')->name('borraridiomas');

Route::get('/rrhh/funcionario/familiar', 'FuncionarioController@createfamiliar')->name('familiarfuncionario');
Route::post('/rrhh/funcionario/familiar', 'FuncionarioController@storefamiliar')->name('registrarfamiliar');
Route::get('/rrhh/funcionario/familiar_edit/{id}', 'FuncionarioController@editfamiliar');
Route::post('/rrhh/funcionario/familiar_edit', 'FuncionarioController@updatefamiliar')->name('actualizarfamiliar');
Route::get('/rrhh/funcionario/creardocumento_familiar/{tipo_documento}/{id_familiar}/{ir}', 'FuncionarioController@requisito_familiar')->name('requisitosfamiliar');
Route::post('/rrhh/funcionario/creardocumeto_familiar', 'FuncionarioController@subirArchivo_familiar')->name('subirarchivo_familiar');
Route::delete('familiar/{id}', 'FuncionarioController@destroyfamiliar')->name('borrarfamiliar');

Route::get('/rrhh/funcionario/requisitos', 'FuncionarioController@datosadjunto')->name('requisitos');
Route::get('/rrhh/funcionario/creardocumeto/{tipo_documento}', 'FuncionarioController@creardocumento')->name('creardocumento');
Route::post('/rrhh/funcionario/creardocumeto', 'FuncionarioController@subirArchivo')->name('subirarchivo');


///administrador
Route::get('/adm', 'AdministracionController@index')->name('adm');

// BIENES NACIONALES
Route::get('/bienes_nacionales/homebienes', 'BienesController@home')->name('menubienes');

Route::get('/bienes_nacionales/listado_bienes', 'BienesController@index')->name('bienes');
Route::get('/bienes_nacionales/bienes', 'BienesController@create')->name('crearbienes');
Route::post('/bienes_nacionales/bienes', 'BienesController@store')->name('registrar_bienes');
Route::get('/bienes_nacionales/bienes_edit/{id}', 'BienesController@edit')->name('verbien');
Route::post('/bienes_nacionales/bienes_edit', 'BienesController@update')->name('actualizarbien');

Route::get('/bienes_nacionales/listado_bienes_mov', 'BienesController@movimientos')->name('mov_bienes');
Route::get('/bienes_nacionales/listado_bienes_mov_todos', 'BienesController@movimientos_todos')->name('todos_mov_bienes');
Route::get('/bienes_nacionales/bienesmov/{id}/{id_bien}', 'BienesController@createmov')->name('crear_mov_bienes');
Route::post('/bienes_nacionales/bienes_mov', 'BienesController@storemov')->name('registrar_mov_bienes');
Route::get('/bienes_nacionales/bienes_mov_edit/{id}', 'BienesController@editmov')->name('editar_mov_bienes');
Route::post('/bienes_nacionales/bienes_mov_edit', 'BienesController@updatemov')->name('actualizar_mov_bienes');




Route::get('/bienes_nacionales/listado_bienes_desin', 'BienesController@list_desincorporar')->name('desin_bienes');
Route::get('/bienes_nacionales/bienes_desin/{id}/{id_bien}', 'BienesController@createdesin')->name('crear_desin_bienes');
Route::post('/bienes_nacionales/bienes_desin', 'BienesController@storedesin')->name('registrar_desin_bienes');
Route::get('/bienes_nacionales/listado_bienes_desin_todos', 'BienesController@desincorporados_todos')->name('todos_desin_bienes');

Route::get('/bienes_nacionales/menu_reportes', 'BienesController@reportes')->name('reportes_bienes');
Route::get('/bienes_nacionales/reportes/ficha', 'BienesController@ficha')->name('ficha');
Route::get('/bienes_nacionales/reportes/activos', 'BienesController@activos')->name('activos');
Route::get('/bienes_nacionales/reportes/desincorporados', 'BienesController@desincorporados')->name('desincorporados');
Route::get('/bienes_nacionales/reportes/bienes_adm', 'BienesController@buscaradm')->name('adm');
Route::get('/bienes/searchredirect', function(){
     
    /* Nuevo: si el argumento search está vacío regresar a la página anterior */
    if (empty(Input::get('search'))) return redirect()->back();
    
    $search = urlencode(e(Input::get('search')));
    $route = "/bienes_nacionales/bienes_adm/$search";
    return redirect($route);
});
Route::get("/bienes_nacionales/bienes_adm/{search}", "BienesController@search");

// VACACIONES
Route::get('/rrhh/vacaciones', 'VacacionesController@home')->name('vacaciones'); // menu vacaciones

Route::get('/rrhh/vacaciones/homefuncionariosvacaciones', 'VacacionesController@funcionarios')->name('funcionario_vacaciones');
Route::get('/rrhh/vacaciones/homerrhhvacaciones', 'VacacionesController@rrhh')->name('rrhh_vacaciones');
Route::get("/rrhh/vacaciones/registrar_solicitud/{cedula}","VacacionesController@create")->name('registrar_solicitud');
Route::post("/rrhh/vacaciones/registrar_solicitud", "VacacionesController@store_vacaciones")->name('store_vacaciones');
Route::get("/rrhh/vacaciones/vacaciones_pendientes","VacacionesController@ver_pendientes")->name('vacaciones_pendientes');
Route::get("/rrhh/vacaciones/vacaciones_disfrutadas","VacacionesController@ver_disfrutadas")->name('vacaciones_disfrutadas');
Route::get('/rrhh/vacaciones/planilla_vacaciones/{id}', 'VacacionesController@planilla_vacaciones')->name('planilla');

//niveles aprobacion jefe inmediato o coordinador//
Route::get("/rrhh/vacaciones/vacaciones_pend_aprobar","VacacionesController@ver_pendientes_aprobar")->name('vacaciones_pendientes_aprobacion');
Route::get("/rrhh/vacaciones/vacaciones_aprobadas","VacacionesController@ver_aprobadas")->name('vacaciones_aprobadas');
Route::get("/rrhh/vacaciones/vacaciones_pend_aprobar/{id}", "VacacionesController@store_revision")->name('store_revision');
//niveles aprobacion director//
Route::get("/rrhh/vacaciones/vacaciones_pend_aprobar_director","VacacionesController@ver_pendientes_aprobar_director")->name('vacaciones_pendientes_aprobacion_director');
Route::get("/rrhh/vacaciones/vacaciones_aprobadas_director","VacacionesController@ver_aprobadas_director")->name('vacaciones_aprobadas_director');
Route::get("/rrhh/vacaciones/aprobar_solicitud/{id}","VacacionesController@aprobacion")->name('vacaciones_aprobacion_director');
Route::post("/rrhh/vacaciones/aprobar_solicitud", "VacacionesController@store_aprobacion")->name('store_aprobacion');
//niveles aprobacion presidencia//
Route::get("/rrhh/vacaciones/vacaciones_pend_aprobar_presidencia","VacacionesController@ver_pendientes_aprobar_presidencia")->name('vacaciones_pendientes_aprobacion_presidencia');
Route::get("/rrhh/vacaciones/vacaciones_aprobadas_presidencia","VacacionesController@ver_aprobadas_presidencia")->name('vacaciones_aprobadas_presidencia');
Route::get("/rrhh/vacaciones/aprobar_solicitud_presidencia/{id}","VacacionesController@aprobacion_presidencia")->name('vacaciones_aprobacion_presidencia');
Route::post("/rrhh/vacaciones/aprobar_solicitud_presidencia", "VacacionesController@store_aprobacion_presidencia")->name('store_aprobacion_presidencia');
