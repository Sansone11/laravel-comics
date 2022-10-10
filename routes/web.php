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
    return view('home');
})->name('home');

Route::get('/comics', function () {
    $data = [
        'cards'=> config('comics'),
    ];
    return view('products.index',$data);
})->name('comics');

Route::get('/comics/{index}', function ($index) {
     $cards = config('comics');
     if($index < count($cards)){
    $card = $cards[$index];
     $data = [
         'comics'=>$card

     ];
    
     return view('products.show',$data);
}
  else {
     abort(404);
 }
    
})->name('fumetto');

