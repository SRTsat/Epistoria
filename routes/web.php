<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;



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

Route::get('/profile.blade.php', function () {
    return view('profile');
});
Route::get('/index.blade.php', function () {
    return view('index');
});
Route::get('/lihat.blade.php', function () {
    return view('lihat');
});
Route::get('/aboutus.blade.php', function () {
    return view('aboutus');
});
Route::get('/index copy.blade.php', function () {
    return view('index copy');
});

route::get('/lihat copy.blade.php', function(){
    return view('lihat copy');
});

route::get('/favorite.blade.php', function(){
    return view('favorite');
});

route::get('/landingpage.blade.php', function(){
    return view('landingpage');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

route::get('/Aboutuss.blade.php', function(){
    return view('Aboutuss');
});
