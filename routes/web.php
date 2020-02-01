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

Auth::routes();

Route::get('/', function () { return redirect()->route('home'); });
Route::get('/index', function (){
    return view('welcome');
})->name('home');


Route::get('/dashboard', 'MainController@index')->name('index');


Route::get('/accounts/all-accounts','AccountsController@allAccounts')->name('all-accounts');
Route::get('/accounts/account-detail/{id}','AccountsController@accountDetail')->name('account-detail');


//Links
Route::get('/links/add-link', 'LinkControllers@addLink')->name('add-link');
Route::post('/links/add-link-control', 'LinkControllers@addLinkControl')->name('add-link-control');
Route::get('/links/all-links', 'LinkControllers@allLinks')->name('all-links');
