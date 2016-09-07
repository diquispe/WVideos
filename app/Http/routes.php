<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::group(['middleware' => 'web'], function () {


    // urls controladas por el midleware, el usuario puede o no estar logueado
    //Route::auth();
    //dd( Auth::user() );
    //Route::get('/home', 'HomeController@index');

    Route::get('/',[
        'as'    =>'videos.latest',
        'uses'  =>'VideosController@latest'
    ]);


    Route::get('/scorts',[
        'as'    =>'chicas.scorts',
        'uses'  =>'ChicasController@scorts'
    ]);

    // CRear usuario



    Route::get('register', [
        'as' => 'auth.create',
        'uses' => 'Auth\AuthController@create'
    ]);

    Route::post('register', [
        'as' => 'auth.store',
        'uses' => 'Auth\AuthController@store'
    ]);

    Route::post('dashboard/crear-usuario', [
        'as' => 'auth.create',
        'uses' => 'Auth\AuthController@store'
    ]);




    Route::get('/lista',[
        'as'    =>'videos.latest',
        'uses'  =>'VideosController@latest'
    ]);
    

    Route::get('/populares',[
        'as'    =>'videos.popular',
        'uses'  =>'VideosController@popular'
    ]);

    Route::get('/categoria',[
        'as'    =>'videos.categoria.listado',
        'uses'  =>'VideosController@listado'
    ]);

    Route::get('/categoria/{id}',[
        'as'    =>'videos.categoria',
        'uses'  =>'VideosController@categoria'
    ]);

    Route::get('/video/{id}',[
        'as'    =>'videos.details',
        'uses'  =>'VideosController@details'
    ]);



    Route::get('/chica/{url}',[
        'as'    =>'chicas.chica',
        'uses'  =>'ChicasController@details'
    ]);

    Route::get('/chicas/registrarse', [
        'as'    => 'chicas.store',
        'uses'  => 'ChicasController@create'
    ]);

    //Login Routes...
    Route::get('/chicas/login','ChicasAuth\AuthController@showLoginForm');
    Route::post('/chicas/login','ChicasAuth\AuthController@login');
    Route::get('/chicas/logout','ChicasAuth\AuthController@logout');

    //Login Routes for users...
    Route::get('/login','Auth\AuthController@showLoginForm');
    Route::post('/login','Auth\AuthController@login');
    Route::get('/logout','Auth\AuthController@logout');

    // Rutas para chicas

    Route::get('dashboard/crear-chica', [
        'as' => 'chicas.create',
        'uses' => 'ChicasController@create'
    ]);

    Route::post('dashboard/crear-chica', [
        'as' => 'chicas.store',
        'uses' => 'ChicasController@store'
    ]);



});




Route::group(['middleware' => ['web', 'auth']], function () {

    //Route::auth();
    // bloquea el acceso a los usuarios que no esten conectados
    // crear solicitudes
    
    Route::get('dashboard/videos',[
        'as'    =>'videos.videosadmin',
        'uses'  =>'VideosController@videosadmin'
    ]);


    /*
     * Form abreviada donde asume todos los metodos por defecto en el controlador
     * pero como estamos usando metodos con nombres diferentes a los que son
     * estandar en laravel estamos usando la otra forma con get y post
     * Route::resource('dashboard/videos', 'VideosController');
     *
     * */
    Route::get('video/{id}/edit', 'VideosController@edit');
    Route::post('video/{id}/edit', 'VideosController@update');


    Route::delete('video/{id}/destroy', 'VideosController@destroy');
    Route::get('video/{id}/destroy', 'VideosController@destroy');


    Route::get('chica/{id}/edit', 'ChicasController@edit');
    Route::post('chica/{id}/edit', 'ChicasController@update');


    Route::delete('chica/{id}/destroy', 'ChicasController@destroy');
    Route::get('chica/{id}/destroy', 'ChicasController@destroy');

    Route::get('user/{id}/edit', 'UsersController@edit');
    Route::post('user/{id}/edit', 'UsersController@update');

    Route::delete('user/{id}/destroy', 'UsersController@destroy');
    Route::get('user/{id}/destroy', 'UsersController@destroy');


    Route::get('categoria/{id}/edit', 'CategoriesController@edit');
    Route::post('categoria/{id}/edit', 'CategoriesController@update');

    Route::delete('categoria/{id}/destroy', 'CategoriesController@destroy');
    Route::get('categoria/{id}/destroy', 'CategoriesController@destroy');

    // Rutas  para administrar los anuncios
    

    Route::resource('anuncio', 'AnunciosController');



    /*
    Route::get('dashboard/crear-video', [
        'as' => 'videos.create',
        'uses' => 'VideosController@create'
    ]);
    */

    Route::post('dashboard/crear-video', [
        'as' => 'videos.store',
        'uses' => 'VideosController@store'
    ]);

    Route::get('dashboard/crear-video', [
        'as' => 'videos.create',
        'uses' => 'CategoriesController@mostrarcategorias'
    ]);

    
    // Votar

    Route::post('votar/{id}', [
        'as' => 'votes.submit',
        'uses' => 'VotesController@submit'
    ]);

    Route::delete('votar/{id}', [
        'as' => 'votes.destroy',
        'uses' => 'VotesController@destroy'
    ]);

    // Comentar
    // codigo pendiente

    Route::post('comentar/{id}', [
        'as'    => 'comments.submit',
        'uses'  => 'CommentsController@submit',
    ]);

    Route::get('dashboard/categorias', [
        'as'    => 'categories.latest',
        'uses'  => 'CategoriesController@latest',
    ]);


    // rutas crear categoria

    Route::get('dashboard/crear-categoria', [
        'as' => 'category.create',
        'uses' => 'CategoriesController@create'
    ]);

    Route::post('dashboard/crear-categoria', [
        'as' => 'category.store',
        'uses' => 'CategoriesController@store'
    ]);

    Route::get('dashboard/ver-chicas', [
        'as' => 'chicas.latest',
        'uses' => 'ChicasController@latest'
    ]);


    Route::get('dashboard/ver-anuncios', [
        'as' => 'anuncios.latest',
        'uses' => 'AnunciosController@latest'
    ]);

    Route::get('anuncio/{id}/destroy', [
        //'as' => 'chicas.latest',
        'uses' => 'AnunciosController@destroy'
    ]);

    Route::get('anuncio/{id}', [
        'as' => 'anuncio.show',
        'uses' => 'AnunciosController@show'
    ]);

    Route::get('anuncio/{id}/edit', 'AnunciosController@edit');
    Route::post('anuncio/{id}/edit', 'AnunciosController@update');



    Route::get('dashboard', [
        'as' => 'users.dashboard',
        'uses' => 'UsersController@dashboard'
    ]);

    Route::get('dashboard/perfil', [
        'as' => 'users.profile',
        'uses' => 'UsersController@showProfile'
    ]);

    Route::get('dashboard/ver-usuarios', [
        'as' => 'users.latest',
        'uses' => 'UsersController@latest'
    ]);
    

});


Route::group(['middleware' => 'auth'], function () {
    Route::get('mipanel', function() {
        return view('mipanel');
    });

});