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
// Route::get('login', 'Auth\AuthController@showLoginForm');
// Route::post('login', 'Auth\AuthController@login');
// Route::get('logout', 'Auth\AuthController@logout');


Route::get('/', function () {
    return view('home');
});

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/single/{id}', function ($id) {
    return view('singleBlog');
});


// Route::post('/sendcontact', [
// 	'as' => 'contactform', 'uses'=> 'ContactController@sendMessage'
// ]);

Route::get('admin', [
    'as' => 'adminPanel', 'uses' => 'AdminController@index'
]);

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        // Matches The "/admin/users" URL
    });
    Route::resource('article','ArticleController');
});


Route::get('locale/{locale}', function ($locale){
	Session::put('locale', $locale);
	return redirect()->back();
});