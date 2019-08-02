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

// use RAW sql query
Route::get('/insert', function () {
    $books = DB::select('SELECT * FROM books');
    // DB::insert('INSERT INTO books (title, author) VALUES (?, ?)', ['My Book', 'My Author']);
    return 'Show the books : ' . var_dump($books);
});

Route::get('/update/{id}', function ($id) {
    DB::update('UPDATE books SET title = \'New Title\' WHERE id_book=?', [$id]);
    return 'Update the book with id 1';
});

Route::get('/delete', function () {
    DB::delete('DELETE FROM books WHERE id_book=?', [2]);
    return 'Delete the book with id 2';
});
