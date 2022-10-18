<?php

use Illuminate\Support\Facades\Route;

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
    //response part
    return "Hello World";
})->name('home.index');

//default route
Route::get('/about', function(){
    return "about laravel";
})->name('home.about');

//route with required parameter
Route::get('/contact/{id}', function($id){
    return "contact ".$id;
})->name('home.contact');

//route with optional parameter
Route::get('/optional-parameter/{id?}', function($id = 0){
    return "optional-parameter : ".$id;
})->name('home.optional-parameter');

//route html template
Route::get('/template', function(){
    return "<h1>Return Template</h1>";
})->name('home.template');

//route return view(without parameter)
Route::get('/show-view', function(){
    return view("view");
})->name('home.show-view');

//return folder view(with parameter)
Route::get('/gallery/{id?}', function($id = 'Gallery'){
    return view("gallery.show", ['passing_value' => $id]);
})->name('gallery.show');

$postsInfo = [
    1 => [
        'title' => 'Intro to Laravel',
        'content' => 'This is a sshort intro to laravel',
        'is_new' => true,
        'has-comments' => true
    ],
    2 => [
        'title' => 'Intro to PHP',
        'content' => 'This is a short intro to PHP',
        'is_new' => false,
        'comments' => false
    ],
    3 => [
        'title' => 'Intro to SQL',
        'content' => 'This is a short intro to SQL',
        'is_new' => TRUE,
        'has-comments' => false
    ]
];


//passing and rendering data
Route::get('/posts/{id}', function($id) use ($postsInfo){
    abort_if(!isset($postsInfo[$id]), 404);
    return view('posts.show', ['post' => $postsInfo[$id]]);
})->name('posts.show');


//2022-10-18

//single view rendering
Route::view('/single-view', 'single.single_view')->name('single.single_view');

Route::get('/posts', function() use ($postsInfo){
    return view('posts.index', ['post' => $postsInfo]);
})->name('posts.index');