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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola-mundo', function() {
    return 'Hola Mundo!! Soy John Reyes';
});

Route::post('/hola-mundo', function() {
    return 'Hola Mundo!! Soy John Reyes por POST';
});

// Route::match(['get', 'post'], 'contacto', function() {
//     return view('contacto');
// });

// Route::any('contacto', function() {
//     return view('contacto');
// });

// Route::get('contacto/{nombre?}', function($nombre = "John Reyes") {
//     return view('contacto', array("nombre" => $nombre));
// });

Route::get('contacto/{nombre?}/{edad?}', function($nombre = "John Reyes", $edad = 45) {
    return view('contacto', array(
        "nombre" => $nombre,
        "edad" => $edad
    ));
})->where([
    'nombre' => '[A-Za-z]+',
    'edad' => '[0-9]+'
]);