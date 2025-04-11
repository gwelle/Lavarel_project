<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Au lieu de ressoudre directement la fonction anonyme  dans le fichier de routes
// on va appeler le controller et la méthode concernée
Route::get('/',[PostController::class,'index']);



Route::get('/{id}',[PostController::class,'show']);

Route::get('hello-world', function(){
    return view('hello-world');
});
