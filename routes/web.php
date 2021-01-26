<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route:: get('notas', function (){
    return 'Aqui se listaran todas las notas';
});

Route:: get('notas/crear', function (){
    return 'Aqui se crean todas las notas';
});

Route:: get('notas/editar', function (){
    return 'Aqui se editan todas las notas';
});

Route:: get('notas/{id}/crear', function ($id){
    return 'Aqui se editan la nota con id:' .$id;
});


