<?php

use Illuminate\Support\Facades\Route;


//////Index Page Route////////
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
    ///////////User Dashboard Routes///////
    Route::get('/requestedbook', function () {
        return view('/userdash')->with("data", "Requested Book");
    });
    Route::get('/history', function () {
        return view('/userdash')->with("data", "History");
    });
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});




require __DIR__ . '/auth.php';
