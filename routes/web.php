<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome_routename');

function lol() {
    return '<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" class="btn btn-pink">Clica aqui!</a>';
}


Route::get('/lol', function(){
    return lol();
});


Route::get('/testevar', function(){
    $name = 'Armando';
    $name = 'Renan';
    return "<h5>Variáveis: $name</h5>" . lol();
});

route::get('/parametros/{name}',function($name){
    return "<h5>parametros $name </h5>". lol();
});

Route::get('/home', function(){

 return view('utils.homepage');
})-> name('home');

route::get('/users/add', function () {
    return view('utils.users.add_users'); 
})->name('users.add');



route::fallback( function() {
    return view('utils.fallback');
    });