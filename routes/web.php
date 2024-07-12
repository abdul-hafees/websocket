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

Route::get('/test', function (\Illuminate\Http\Request $request) {
    $key = $request->key ?? "TEST";
    event(new \App\Events\NewTrade($key));
   return "OK";
});

Route::get('socket', function () {
    return view('test');
});
