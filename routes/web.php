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
// LOGIN
Route::get('login', function () {return view('dashboard/login');});
Route::post('login','Dashboard\LoginController@login');

// HOME ADMIN
Route::get('dashboard/home/addCategory','Home\HomeController@create');
Route::post('dashboard/home/addCategory','Home\HomeController@store');
Route::get('dashboard','Home\HomeController@index');
Route::post('home/delete/{id}','home\HomeController@distroy');
Route::get('home/edit/{id}','Home\HomeController@edit');
Route::post('home/update/{id}','Home\HomeController@update');


//PUBLISHIN HOUSE
Route::get('dashboard/publishingHouse/addPublishingHouses','Dashboard\PublishingHouse\PublishingHouseController@create');
Route::get('publishingHouses','Dashboard\PublishingHouse\PublishingHouseController@index');
Route::post('dashboard/publishingHouse/addPublishingHouses','Dashboard\PublishingHouse\PublishingHouseController@store');
Route::post('publishingHouse/delete/{id}','Dashboard\PublishingHouse\PublishingHouseController@distroy');
Route::get('publishingHouse/edit/{id}','Dashboard\PublishingHouse\PublishingHouseController@edit');
Route::get('publishingHouse/edit/{id}/x','Dashboard\PublishingHouse\PublishingHouseController@index');
Route::post('publishingHouse/update/{id}','Dashboard\PublishingHouse\PublishingHouseController@update');

// AUTHOR
Route::get('dashboard/author','Dashboard\Author\AuthorController@create');
Route::get('authors','Dashboard\Author\AuthorController@index');
Route::post('dashboard/author/addAuthor','Dashboard\Author\AuthorController@store');
Route::post('author/delete/{id}','Dashboard\author\AuthorController@distroy');
Route::get('author/edit/{id}','Dashboard\author\AuthorController@edit');
Route::get('dashboard/author/addAuthor','Dashboard\Author\AuthorController@create');
Route::post('author/update/{id}','Dashboard\author\AuthorController@update');

// BOOK
Route::get('dashboard/book/addBook','Dashboard\book\BookController@create');
Route::get('books','Dashboard\Book\BookController@index');
Route::post('dashboard/book/addBook','Dashboard\Book\BookController@store');
Route::get('book/edit/{id}','Dashboard\Book\BookController@edit');
Route::post('book/delete/{id}','Dashboard\Book\BookController@distroy');
Route::post('book/update/{id}','Dashboard\Book\BookController@update');

// PUBLIC WEBSITE
Route::get('search/book','Website\Book\BookWebsiteController@searchBook');
Route::get('home','Website\Book\BookWebsiteController@indexBookWithCategories');
Route::get('author','Website\Author\AuthorWebsiteController@index');
Route::get('publishingHouse','Website\PublishingHouse\PublishingHouseWebsiteController@index');
Route::get('book/show/{id}','Website\Book\BookWebsiteController@showBookDetails');
Route::get('author/show/{id}','Website\Author\AuthorWebsiteController@showAuthorDetails');
Route::get('publishingHouse/show/{id}','Website\PublishingHouse\PublishingHouseWebsiteController@showPublishingHouseDetails');
