<?php

Route::group([
    'namespace' => 'Guest'
], function() {
    Route::get('/', [
        'as' => 'home',
        'uses' => 'HomeController@show'
    ]);

    Route::get('about', [
        'as' => 'about',
        'uses' => 'AboutController@show'
    ]);
});

Route::get('cards', [
    'as' => 'cards',
    'uses' => 'CardsController@index'
]);

Route::get('cards/{card}', [
    'uses' => 'CardsController@show'
]);



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
