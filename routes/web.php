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

Route::get('dashboard/aluno/create', [
	'as' => 'aluno.novo',
	'uses' => 'AlunosController@create'
]);

Route::post('dashboard/aluno/create/novo', [
	'as' => 'aluno.create',
	'uses' => 'AlunosController@store'
]);
