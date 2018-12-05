<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Routes

Route::middleware(['auth'])->group(function () {
    //roles
    Route::post('roles/store', 'RoleController@store')->name('roles.store')
    ->middleware('permission:roles.create');

    Route::get('roles', 'RoleController@index')->name('roles.index')
    ->middleware('permission:roles.index');

    Route::get('roles/create', 'RoleController@create')->name('roles.create')
    ->middleware('permission:roles.create');

    Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
    ->middleware('permission:roles.edit');

    Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
    ->middleware('permission:roles.show');

    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
    ->middleware('permission:roles.destroy');

    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
    ->middleware('permission:roles.edit');

    //users

    Route::get('users', 'UserController@index')->name('users.index')
    ->middleware('permission:users.index');

    Route::put('users/{user}', 'UserController@update')->name('users.update')
    ->middleware('permission:users.edit');

    Route::get('users/{user}', 'UserController@show')->name('users.show')
    ->middleware('permission:users.show');

    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
    ->middleware('permission:users.destroy');

    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
    ->middleware('permission:users.edit');

    //periodos
    Route::post('periodos/store', 'PeriodoController@store')->name('periodos.store')
    ->middleware('permission:periodos.create');

    Route::get('periodos', 'PeriodoController@index')->name('periodos.index')
    ->middleware('permission:periodos.index');

    Route::get('periodos/create', 'PeriodoController@create')->name('periodos.create')
    ->middleware('permission:periodos.create');

    Route::put('periodos/{periodo}', 'PeriodoController@update')->name('periodos.update')
    ->middleware('permission:periodos.edit');

    Route::get('periodos/{periodo}', 'PeriodoController@show')->name('periodos.show')
    ->middleware('permission:periodos.show');

    Route::get('periodos/{periodo}/rangos', 'PeriodoController@showRangos')->name('periodos.showRangos')
 ->middleware('permission:periodos.showRangos');

    Route::delete('periodos/{periodo}', 'PeriodoController@destroy')->name('periodos.destroy')
    ->middleware('permission:periodos.destroy');

    Route::get('periodos/{periodo}/edit', 'PeriodoController@edit')->name('periodos.edit')
    ->middleware('permission:periodos.edit');

    //cursos
    Route::post('cursos/store', 'CursoController@store')->name('cursos.store')
    ->middleware('permission:cursos.create');

    Route::get('cursos', 'CursoController@index')->name('cursos.index')
    ->middleware('permission:cursos.index');

    Route::get('cursos/{curso}/alumnos', 'CursoController@showAlumnos')->name('cursos.showAlumnos')
    ->middleware('permission:cursos.showAlumnos');

    Route::get('cursos/create', 'CursoController@create')->name('cursos.create')
    ->middleware('permission:cursos.create');

    Route::put('cursos/{curso}', 'CursoController@update')->name('cursos.update')
    ->middleware('permission:cursos.edit');

    Route::get('cursos/{curso}', 'CursoController@show')->name('cursos.show')
    ->middleware('permission:cursos.show');

    Route::delete('cursos/{curso}', 'CursoController@destroy')->name('cursos.destroy')
    ->middleware('permission:cursos.destroy');

    Route::get('cursos/{curso}/edit', 'CursoController@edit')->name('cursos.edit')
    ->middleware('permission:cursos.edit');

    //notas
    Route::post('notas/store', 'NotaController@store')->name('notas.store')
    ->middleware('permission:notas.create');

    Route::get('notas', 'NotaController@index')->name('notas.index')
    ->middleware('permission:notas.index');

    Route::get('notas/create', 'NotaController@create')->name('notas.create')
    ->middleware('permission:notas.create');

    Route::put('notas/{nota}', 'NotaController@update')->name('notas.update')
    ->middleware('permission:notas.edit');

    Route::get('notas/{nota}', 'NotaController@show')->name('notas.show')
    ->middleware('permission:notas.show');

    Route::delete('notas/{nota}', 'NotaController@destroy')->name('notas.destroy')
    ->middleware('permission:notas.destroy');

    Route::get('notas/{nota}/edit', 'NotaController@edit')->name('notas.edit')
    ->middleware('permission:notas.edit');

    //alumnos
    Route::post('alumnos/store', 'AlumnoController@store')->name('alumnos.store')
    ->middleware('permission:alumnos.create');

    Route::get('alumnos', 'AlumnoController@index')->name('alumnos.index')
    ->middleware('permission:alumnos.index');

    Route::get('alumnos/create', 'AlumnoController@create')->name('alumnos.create')
    ->middleware('permission:alumnos.create');

    Route::put('alumnos/{alumno}', 'AlumnoController@update')->name('alumnos.update')
    ->middleware('permission:alumnos.edit');

    Route::get('alumnos/{alumno}', 'AlumnoController@show')->name('alumnos.show')
    ->middleware('permission:alumnos.show');

    Route::delete('alumnos/{alumno}', 'AlumnoController@destroy')->name('alumnos.destroy')
    ->middleware('permission:alumnos.destroy');

    Route::get('alumnos/{alumno}/edit', 'AlumnoController@edit')->name('alumnos.edit')
    ->middleware('permission:alumnos.edit');

    //rangos

    Route::get('rangos/{rango}/cursos', 'RangoController@createCursos')->name('rangos.createCursos')
    ->middleware('permission:rangos.createCursos');

    Route::post('rangos/store', 'RangoController@store')->name('rangos.store')
    ->middleware('permission:rangos.create');

    Route::get('rangos', 'RangoController@index')->name('rangos.index')
    ->middleware('permission:rangos.index');

    Route::get('rangos/create', 'RangoController@create')->name('rangos.create')
    ->middleware('permission:rangos.create');

    Route::put('rangos/{rango}', 'RangoController@update')->name('rangos.update')
    ->middleware('permission:rangos.edit');

    Route::get('rangos/{rango}', 'RangoController@show')->name('rangos.show')
    ->middleware('permission:rangos.show');

    Route::delete('rangos/{rango}', 'RangoController@destroy')->name('rangos.destroy')
    ->middleware('permission:rangos.destroy');

    Route::get('rangos/{rango}/edit', 'RangoController@edit')->name('rangos.edit')
    ->middleware('permission:rangos.edit');

    //Asistencias
    Route::get('asistencias', 'AsistenciaController@index')->name('asistencias.index')
    ->middleware('permission:asistencias.index');

    Route::get('asistencias/create', 'AsistenciaController@create')->name('asistencias.create')
    ->middleware('permission:asistencias.create');

    Route::post('asistencias/store', 'AsistenciaController@store')->name('asistencias.store')
    ->middleware('permission:asistencias.create');

    Route::put('asistencias/{asistencia}', 'AsistenciaController@update')->name('asistencias.update')
    ->middleware('permission:asistencias.edit');

    Route::get('asistencias/{asistencia}/edit', 'AsistenciaController@edit')->name('asistencias.edit')
    ->middleware('permission:asistencias.edit');

    Route::get('asistencias/{asistencia}', 'AsistenciaController@show')->name('asistencias.show')
    ->middleware('permission:asistencias.show');

    Route::delete('asistencias/{asistencia}', 'AsistenciaController@destroy')->name('asistencias.destroy')
    ->middleware('permission:asistencias.destroy');

    //Clases
    Route::get('clases', 'ClaseController@index')->name('clases.index')
    ->middleware('permission:clases.index');

    Route::get('clases/create', 'ClaseController@create')->name('clases.create')
    ->middleware('permission:clases.create');

    Route::post('clases/store', 'ClaseController@store')->name('clases.store')
    ->middleware('permission:clases.create');

    Route::put('clases/{clase}', 'ClaseController@update')->name('clases.update')
    ->middleware('permission:clases.edit');

    Route::get('clases/{clase}/edit', 'ClaseController@edit')->name('clases.edit')
    ->middleware('permission:clases.edit');

    Route::get('clases/{clase}', 'ClaseController@show')->name('clases.show')
    ->middleware('permission:clases.show');

    Route::delete('clases/{clase}', 'ClaseController@destroy')->name('clases.destroy')
    ->middleware('permission:clases.destroy');
});
