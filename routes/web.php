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
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Route::resource('posts', HomeController::class)->middleware('auth:web');

Route::get('logout', [AuthController::class, 'logout']);





// Route::get('/', [HomeController::class, 'index']);
############################################################################
// Route::get('/test/{data}', function ($data) {
//     $got = request('id');

//     return view('test', compact('data', 'got'));
// });

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');  
