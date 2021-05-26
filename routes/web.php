<?php

use Illuminate\Support\Facades\Route;


//////Index Page Route////////
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



///////////User Dashboard Routes///////

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
        ->name('dashboard');

    Route::get('/requestedbook', 'App\Http\Controllers\DashboardController@requestedbook')
        ->name('dashboard');

    Route::get('/history', 'App\Http\Controllers\DashboardController@history')
        ->name('dashboard');

    // Route::get('/history', function () {
    //     return view('/userdash')->with("data", "History");
    // });
});


////////////////////Admin dashboard Routes/////////
Route::group(['middleware' => ['auth']], function () {
    Route::get('/addbook', 'App\Http\Controllers\DashboardController@addbook')
        ->name('dashboard');

    Route::get('/booksrequest', 'App\Http\Controllers\DashboardController@booksrequest')
        ->name('dashboard');
    Route::get('create', 'App\Http\Controllers\BookController@create');
    Route::post('store', 'App\Http\Controllers\BookController@store');
    Route::get('destroy/{book}', 'App\Http\Controllers\BookController@destroy');
    Route::get('edit/{book}', 'App\Http\Controllers\BookController@edit');
    Route::post('update/{book}', 'App\Http\Controllers\BookController@update');
});




require __DIR__ . '/auth.php';
