<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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

Route::get('index', function () {
    return "Bienvenido Usuario aqui podras informarte de la actualidad";
});

Route::get('clases', function(){
    return "Toda la información para conocer nuestro metodo de entrenamiento";
});

Route::get('clases/{clases}', function($clases){
    return "Bienvenidos a las clases nivel: $clases";
});


Route::get('competiciones', function(){
    return "Aqui podras ver una lista de competiciones realizadas";
});

Route::get('competiciones/{competicion}', function($competicion){
    return "Bienvenido a la competicion : $competicion";
});

Route::get('competiciones/{competicion}/{categoria}', function($competicion, $categoria){
    return "Bienvenido a la competicion : $competicion, de la categoria: $categoria";
});

Route::get('quienessomos', function(){
    Return "Bienvenidos al quienes somos";
});

Route::get('contactanos', function(){
    return "aqui encontrar un formulario de contacto";
});




//routes admin

    //routes crud usuarios
Route::get('users/index', function(){
    return "Bienvenido a la lista de usuarios";
});
Route::get('users/create', function(){
    return "Bienvenido a la creación de usuarios";
});
Route::get('users/edit/{$id}', function($id){
    return "Bienvenido a la edición de usuarios";
});

// Route::get('user', 'UserController@index')->name('user');

// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });

    //route crud roles
Route::get('roles/index', function(){
    return "Bienvenido a la lista de roles";
});
Route::get('roles/create', function(){
    return "Bienvenido a la creación de roles";
});
Route::get('roles/edit/{$id}', function($id){
    return "Bienvenido a la edición de roles";
});

    //routes crud clases 

Route::get('clases/index', function(){
    return "Bienvenido a la lista de clases";
});
Route::get('clases/create', function(){
    return "Bienvenido a la creación de clases";
});
Route::get('clases/edit/{$id}', function($id){
    return "Bienvenido a la edición de clases";
});

    //routes crud competiciones 

Route::get('competiciones/index', function(){
    return "Bienvenido a la lista de clases";
});
Route::get('competiciones/create', function(){
    return "Bienvenido a la creación de clases";
});
Route::get('competiciones/edit/{$id}', function($id){
    return "Bienvenido a la edición de clases";
});

//routes admin