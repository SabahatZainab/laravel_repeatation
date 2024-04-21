<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/post/firstpost',function(){
    return view('firstpost');
});

// Route::view('/p','post');
// Route::view('post','/post');

//pass parameter
// Route::get('/post/{id}', function (string $id) {
//     return "<h1>Post ID: ".$id."</h1>";
// });

// pass paramter as optional
// Route::get('/post/{id?}', function (string $id=null) {
//     if($id){

//         return "<h1>Post ID: ".$id."</h1>";
//     }else{
//         return "<h1>No Id Found!</h1>";
//     }
// });

//passing multiple parameter or passing multiple parameter as optional

// Route::get('/post/{id?}/comment/{commentId?}', function (string $id=null, string $comment = null) {
//     if($id){

//         return "<span>Post ID: ".$id." ".$comment."</span>";
//     }else{
//         return "<h1>No Id Found!</h1>";
//     }
// });

//Routes Constraints
// Route::get('/post/{id}', function (string $id){
//     if($id){
//         return "<h1>Post Id: ".$id."</h1>";
//     }else{
//         return "<h1>No data found!</h1>";
//     }
// })->whereNumber('id');

//use of whereIn constraints
// Route::get('/post/{id}', function (string $id){
//     if($id){
//         return "<h1>Post Id: ".$id."</h1>";
//     }else{
//         return "<h1>No data found!</h1>";
//     }
// })->whereIn('id',['movie','song','painting']);

// use of where with numeric expression

// Route::get('/post/{id}', function (string $id){
//     if($id){
//         return "<h1>Post Id: ".$id."</h1>";
//     }else{
//         return "<h1>No data found!</h1>";
//     }
// })->where('id','[0-9]+');

// use of where with alphabatic in small or capital letters expression

Route::get('/post/{id}', function (string $id){
    if($id){
        return "<h1>Post Id: ".$id."</h1>";
    }else{
        return "<h1>No data found!</h1>";
    }
})->where('id','[a-zA-Z]+');