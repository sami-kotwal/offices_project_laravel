<?php

use App\Http\Controllers\ccontact;
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
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/ERP Services', function () {
    return view('erp');
});

Route::get('/web Development', function () {
    return view('web');
});

Route::get('/Graphic Designing', function () {
    return view('graphic');
});

Route::get('/Desktop Development', function () {
    return view('desktop');
});

Route::get('/Moblie App', function () {
    return view('moblie');
});


Route::post('/inserted',[ccontact::class,('insertrecord')]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
