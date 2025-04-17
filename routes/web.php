<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Psr7\Request;

Route::get('/welcome', function () {
    return view('welcome');
});

// Route qui permet de définir un nom pour la rout
Route::get('/user/profile', function () {
    return 'profile';
})->name('profile');

// Redirection avec une route qui possède un nom
Route::get('/test-user', function () {
    return redirect()->route('profile');
});


// Rediction de la route /home vers la route /
Route::redirect('/home', '/', 301);

// match() permet d'écouter plusieurs types de requêtes HTTP
Route::match(['get', 'post'], '/hello_world', function(){
    return view('hello-world');
});

// any() permet d'écouter toutes les requêtes HTTP
Route::any('/test', function(){
    return view('test',["framework"=>'Laravel']);
});

Route::get('users',[UserController::class,'index']);

// Au lieu de ressoudre directement la fonction anonyme  dans le fichier de routes
// on va appeler le controller et la méthode concernée
Route::get('/',[PostController::class,'index']);


Route::get('/{post}',[PostController::class,'show']);


// Pour un crud complet, on va utiliser la méthode resources
// On va créer un controller de type resource
// php artisan make:controller PostController --resource
// On va créer une route de type resource
// php artisan route:list
// On va créer une route de type resource

// /posts => GET

// /posts/create => POST
// /posts/store => POST

// /posts/{id}/show => GET

// /posts/{id}/edit => PUT
// /posts/{id}/update => PATCH

// /posts/{id}/delete => DELETE
Route::resource('posts', PostController::class);

