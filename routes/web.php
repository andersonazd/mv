<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


//Redirección Productos
Route::resource('/productos', 'ProductoController');
//Redirección Contacto
Route::get('/contacto', 'ContactoController@contacto');
Route::post('/contacto', 'ContactoController@sendMail');
//Redirección Quienes Somos
Route::view('/quienesomos', 'productos.quienesomos');

//Route::view('/', 'productos.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Enviar correo
Route::get('send-mail', 'MailSend@mailsend');
