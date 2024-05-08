<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// //create a new route
// Route ::get('/hello', function(){
//     return "Hello, my name is abe";
// });

// //redirect route (return route)
// Route :: redirect('/name','/hello');

// //callback (404 not found - empty url)
// Route :: fallback(function(){
//     return view('error');
// });

// //spasi not allowed brow
// // Route ::get('/product/pc', function(){
// //     return 'A new Pc';
// // });

// Route ::get('/product/{name}', function(){
//     return 'My new pc';
// });
