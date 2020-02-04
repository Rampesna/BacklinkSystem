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

Route::get('/getip',function (){
    return $_SERVER;
});

Auth::routes();

Route::get('/', function () { return redirect()->route('home'); });
Route::get('/index', function (){
    return view('welcome');
})->name('home');


Route::get('/dashboard', 'MainController@index')->name('index');

Route::prefix('account')->middleware('admin-control')->group(function (){
    Route::get('/all-accounts','AccountsController@allAccounts')->name('all-accounts');
    Route::get('/account-detail/{id}','AccountsController@accountDetail')->name('account-detail');
});



//Links
Route::prefix('links')->middleware('admin-control')->group(function (){
    Route::get('/all-links', 'LinkControllers@allLinks')->name('all-links');
    Route::get('/add-link', 'LinkControllers@addLink')->name('add-link');
    Route::post('/add-link-control', 'LinkControllers@addLinkControl')->name('add-link-control');
    Route::post('/add-link', 'LinkControllers@addLinkPost')->name('add-link-post');

    Route::get('/edit-link/{id}/{url}','LinkControllers@editLink')->name('edit-link');
    Route::post('/update-link','LinkControllers@updateLink')->name('update-link');

    Route::get('/delete-link/{id}','LinkControllers@deleteLink')->name('delete-link');
});




Route::prefix('customer')->group(function (){
    Route::get('/all-links','CustomerController@allLinks')->name('customer-all-links');
});



Route::prefix('my-account')->group(function (){
    Route::get('/my-account','CustomerController@myAccount')->name('my-account');
    Route::get('/my-sites','CustomerController@mySites')->name('my-sites');
    Route::get('/add-site','CustomerController@addSite')->name('add-site');
    Route::post('/add-site-control','CustomerController@addSiteControl')->name('add-site-control');
    Route::post('/add-site-post','CustomerController@addSitePost')->name('add-site-post');
    Route::get('/my-links','CustomerController@myLinks')->name('my-links');

});
