<?php
// Valid Routes for site

$routes->get('/', function(){
    return App::view('home', [
        'pageTitle' => 'Home',
        'pageDesc' => 'Welcome to the php mini framework!',
    ]);
});

$routes->get('/vue', function(){
    return App::view('vue', [
        'pageTitle' => 'Vue'
    ]);
});

$routes->get('/vue-2', function(){
    return App::view('vue-2', [
        'pageTitle' => 'Vue'
    ]);
});

$routes->checkRoute();
