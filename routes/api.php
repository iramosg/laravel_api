<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->prefix('v1')->group(function(){

    Route::get('users/me', function(){
        return request()->user();
    });


    Route::resources([
        'products' => 'ProductsController',
        'users' => 'UsersController',
        ]);

       

    // //Lista
    // Route::get('/products', 'ProductsController@index');
    // //Insere
    // Route::post('/products', 'ProductsController@store');
    // //Atualiza
    // Route::put('/products/{product}', 'ProductsController@update');
    // //Traz 1
    // Route::get('/products/{product}', 'ProductsController@show');
    // //Deleta
    // Route::delete('/products/{product}', 'ProductsController@destroy');

    
});

Route::get('cors', function(){
    return ['status' => 'ok'];
});


