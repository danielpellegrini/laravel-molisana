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
    $pasta = config('pasta');

    return view ('/pages/home', [
        'array' => $pasta
    ]);
    
});

Route::get('product/{id?}', function ($id = 0) {
    $product = config("pasta.$id");
    $array = config("pasta");

    if(($id) > count($array) - 1 || ($id) < 0 )  {
        
        abort(404);

    }

    return view('/pages/product', ["id" => $id], ["product" => $product]);
    
});












