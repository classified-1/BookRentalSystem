<?php

use Illuminate\Support\Facades\Route;


//////Index Page Route////////

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', 'App\Http\Controllers\DashboardController@main')
    ->name('dashboard');
///////////User Dashboard Routes///////

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')
        ->name('dashboard');

    Route::get('/requestedbook', 'App\Http\Controllers\DashboardController@requestedbook')
        ->name('dashboard');

    Route::get('/history', 'App\Http\Controllers\DashboardController@history')
        ->name('dashboard');
    Route::post('/request', 'App\Http\Controllers\RequestedBookController@store');
    Route::post('/returnBook', 'App\Http\Controllers\RequestedBookController@returnBook');
});


////////////////////Admin dashboard Routes/////////
Route::group(['middleware' => ['auth']], function () {
    Route::get('/addbook', 'App\Http\Controllers\DashboardController@addbook')
        ->name('dashboard');

    Route::get('/booksrequest', 'App\Http\Controllers\DashboardController@booksrequest')
        ->name('dashboard');
    ///////Admin History///////
    Route::get('adminHistroy', 'App\Http\Controllers\DashboardController@adminHistroy');


    Route::get('create', 'App\Http\Controllers\BookController@create');

    Route::post('store', 'App\Http\Controllers\BookController@store');
    Route::DELETE('destroy/{book}', 'App\Http\Controllers\BookController@destroy');

    Route::get('edit/{book}', 'App\Http\Controllers\BookController@edit');
    Route::post('update/{book}', 'App\Http\Controllers\BookController@update');

    Route::get('/createCategory', 'App\Http\Controllers\CategoryController@create');
    Route::post('storeC', 'App\Http\Controllers\CategoryController@store');
    Route::get('destroyC/{category}', 'App\Http\Controllers\CategoryController@destroy');
    Route::get('editC/{category}', 'App\Http\Controllers\CategoryController@edit');
    Route::get('updateC/{category}', 'App\Http\Controllers\CategoryController@update');

    ///////Book request Approve///////
    Route::post('reqapprove', 'App\Http\Controllers\RequestedBookController@approve');
});

Route::get('viewAllBook', 'App\Http\Controllers\DashboardController@allBook');

Route::get('viewAllBook/action', 'App\Http\Controllers\DashboardController@action')->name('viewAllBook.action');


require __DIR__ . '/auth.php';
