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

// Route::get('/', function () {
//     return view('/pages/home');
// });

Route::get('/', function () {
    $pasta = config('pasta');

    return view ('/pages/home', [
        'array' => $pasta
    ]);
    
});

Route::get('page/product{id?}', function ($id = null) {    

    if(empty($id)) {
        abort(401);
    }
    
});


Route::get('product/{id}', function ($id) {
    $product = config("pasta.$id");

    return view('/pages/product', ["id" => $id], ["product" => $product]);
});

Route::get('news', function ($id = null) {

    if (empty($id)) {
        abort(404);
    }
});








