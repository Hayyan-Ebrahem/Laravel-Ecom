<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {
    // Route::post('login', 'Api\AuthController@login');
    // Route::post('register', 'Api\AuthController@register');
    // Route::post('logout', 'Api\AuthController@logout');


    Route::namespace('Api\Products')->group(function () {
        Route::apiresource('products', 'ProductController');
        // Route::('products/recommended', 'Products\ProductController@recommended');

        Route::get('remove-image-product', 'ProductController@removeImage')->name('product.remove.image');
        Route::get('remove-image-thumb', 'ProductController@removeThumbnail')->name('product.remove.thumb');
    });

    // Route::group(['middleware' => 'auth:api'], function () {

    //     Route::post('getUser', 'Api\AuthController@getUser');
    // });
});
