<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('/posts.index');
});
//route resource
/* 
penjelasan route::resource adalah untuk meng-generate sebuah route" baru untuk proses crud
*/
Route::resource('/posts', \App\Http\Controllers\PostController::class);
