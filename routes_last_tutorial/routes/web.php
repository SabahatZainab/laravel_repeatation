<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|testpost
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');
// Route::get('/about',function (){
//     return view('about');
// })->name('about');


//redirection 
// Route::get('/testpost', function(){
//     return view('post');
// })->name('post');

// Route::redirect('/post','/testpost');
// Route::redirect('/post','/testpost',301);//third parameter shows redirection if temporary or permanent, 301 code for permanent



// Routes Groups

Route::prefix('page')->group(function(){

    Route::get('/about', function(){
       return "<h1>Home Page</h1>";
    });
    Route::get('/post/firstpost', function(){
       return "<h1>Post Page</h1>";
    });
    Route::get('/gallery', function(){
       return "<h1>Gallery Page</h1>";
    });
});

//wo route or page access karne ki user koshsh kare jo hai he nhi to ya chale ga code
Route::fallback(function(){
    return "<h1>Page Not Found!</h1>"; //also display view file
});