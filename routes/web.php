<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('index');
});
// Route::group(['middleware' => ['auth']], function () {
//     Route::get('/', 'App\Http\Controllers\DashboardController@index')
//         ->name('/');
// });
Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
        ->name('dashboard');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



require __DIR__ . '/auth.php';
