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

// ***** EXERCISE ***** \\

/*

	We have an online books website

	- Step 1 :

	You have to create routes to :
		- Show all the books
		- Insert a new book
		This route should display a form with all the mandatory fields.
		When click on the submit button, insert the new book.
		- Delete a book
		You delete the book receiving an id. The route should look like this '/delete/3'

	- Step 2 :

		Edit the route that show all the books.
		Now, for each book, there is a link to 'edit' the book.

		You have to create a route to edit a book, it should looks like this '/update/4'
		On this page you have a form with all the fields (the fields should be filled with data from the book).

	- Step 3 :

		You will have to change the operations for Inserting and Updating.
        You should now do an ajax call when clicking on the submit button.

*/

Route::get('/', function () {
    return view('welcome');
});

// ? Create a route '/users'.
// ? This route will call the method 'show' of the controller.
Route::get('/users', 'UserController@show');
