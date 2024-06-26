<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::middleware('role:admin')->group(function() {
        Route::get('/dashboard', function () {
            // return 'dashboard admin';
            return view('dashboard');
        })->name('dashboard');
    });

    Route::middleware('role:user')->group(function() {
        Route::get('/dashboard_user', function () {
            // return 'dashboard user';
            return view('dashboard_user');
        })->name('dashboard_user');    
    });

    Route::get('order', [OrderController::class, 'index'])->name('order');


    Route::post('createorder', [OrderController::class, 'order'])->name('createorder');
    
    Route::delete('orders/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');

    

    Route::get('/ordercreate', function () {
        return view('OrderFolder.ordercreate');
    })->name('ordercreate');

    Route::get('/history', function () {
        return view('OrderFolder.history');
    })->name('history');

    Route::get('/show', function () {
        return view('profile.show');
    })->name('show');

    Route::get('/userview', function () {
        return view('OrderFolder.userview');
    })->name('userview');

    
});
