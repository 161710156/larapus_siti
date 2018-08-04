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

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth', 'role:admin']], function () {
    //isi route disini
    Route::resource('authors', 'AuthorController');
    Route::resource('books', 'BookController');
    Route::resource('members', 'MembersController');
    Route::get('statistics', [
        'as'=>'statistics.index',
        'uses'=>'StatisticsController@index'
    ]);
    Route::get('export/books', [
        'as' => 'export.books',
        'uses' => 'BookController@export'
        ]);
    Route::post('export/books', [
        'as' => 'export.books.post',
        'uses' => 'BookController@exportPost'
        ]);
});

Route::get('books/{book}/borrow', [
    'middleware' => ['auth', 'role:member'],
    'as' =>'guest.books.borrow',
    'uses' =>'BookController@borrow'
]);

Route::put('books/{book}/borrow', [
    'middleware' => ['auth', 'role:member'],
    'as' =>'member.books.return',
    'uses' =>'BookController@returnBack'
]);

Route::get('auth/verify/{token}', 'Auth\RegisterController@verify');
Route::get('auth/send-verification', 'Auth\Registercontroller@sendVerification');
Route::get('setting/profile', 'SettingsController@profile');
Route::get('setting/profile/edit', 'SettingsController@editProfile');
Route::post('setting/profile', 'SettingsController@updateProfile');
Route::get('setting/password', 'SettingsController@editPassword');
Route::post('setting/password', 'SettingsController@updatePassword');
