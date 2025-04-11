<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $articles = [
        [
            'title' => 'Article 1',
            'content' => 'This is the content of article 1.',
        ],
        [
            'title' => 'Article 2',
            'content' => 'This is the content of article 2.',
        ],
        [
            'title' => 'Article 3',
            'content' => 'This is the content of article 3.',
        ],
    ];

    return view('home', ['articles' => $articles]);
});

Route::get('hello-world', function(){
    return view('hello-world');
});
