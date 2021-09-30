<?php

use App\Comment;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::post('/comment','CommentController@store');
Route::post('/toggle-approve','CommentController@approval');

Route::get('/status', function () {
    $comments = Comment::where('approve','1')->get();
    return view('front')->with('comments',$comments);
});

Route::get('/dash', function() {
    // $comments = Comment::all();
    $comments = Comment::orderBy('created_at','desc')->get();
    return view('dashboard')->with('comments',$comments);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/admin/users', 'Admin\UserController', ['expect' => ['show', 'create', 'store']]);


// Grouping
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    Route::resource('/users', 'UserController', ['expect' => ['show', 'create', 'store']]);
    Route::resource('/users2', 'User2Controller', ['except' => ['show', 'create', 'store']]);
});
