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

Route::group([
    'prefix' => 'api'
], function() {
    Route::resource('rentals', 'RentalsController');
});


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
