<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

/**
 *  routes for genral pages in site root for guests
 *
 */

Route::group(['prefix' => '/'], function () {

    Route::get('', function () {
        return view('frontend.site.index');
    });

    Route::get('home', function () {
        return view('frontend.site.index');
    })->name('home');

    Route::get('contact', function () {
        return view('frontend.site.contact');
    });

    Route::get('about', 'AboutController@index');

    Route::group([
        'prefix' => 'my',
        'middleware' => 'auth:students',
    ], function () {

        Route::get('profile', 'studentController@profile')
            ->name('profile');

        Route::get('reservations', 'studentController@reservations')
            ->name('my.reservs');

        Route::get('lockers', 'studentController@lockers')
            ->name('lockrs');

    });

});

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/dashboard', function () {
    return view('student-home');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

/*  من هنا غيرت    */ 


