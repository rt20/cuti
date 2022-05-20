<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CutiController;

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
    return view('auth.login');
});

Route::prefix('dashboard')
    ->middleware(['auth:sanctum'])
    ->group(function(){
        Route::get('/',[DashboardController::class,'index'])->name('dashboard');
        Route::resource('users', UserController::class);
        Route::resource('cutis', CutiController::class);
        
    });



// Route::get('/dashboard', function () {
//     return view('dashboard');
   
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
