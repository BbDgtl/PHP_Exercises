<?php

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

Route::get('/', function () {
    return view('welcome');
});

// See the detail of a book
// Route::get('/book/{id}', function ($id) {
//     return 'Welcome to book ' . $id;
// })->name('book.detail');

// Route::get('/test', function () {
//     $url = route('book.detail', ['id' => 3]);
//     return 'This is the url : ' . $url;
// });

// Use controllers with routes
Route::get('/test', 'TestController@index');

Route::get('/contact', 'TestController@contact');

Route::get('/book/{id}', 'TestController@book');

Route::resource('/books', 'BookController');

Route::resource('/article', 'ArticleController');

Route::get('/delete', function () {
    DB::delete('DELETE FROM books WHERE id_book=?', [106]);
    return 'Delete the book with id 106';
});
