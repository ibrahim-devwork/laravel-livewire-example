<?php

use App\Livewire\CreateCustomer;
use App\Livewire\Customers;
use App\Livewire\EditCustomer;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ViewCustomer;
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

Route::get('/login',    Login::class)->name('login');
Route::get('/register', Register::class);

Route::middleware(['auth'])->group(function() {
    Route::get('/customers/create',          CreateCustomer::class);
    Route::get('/customers',                 Customers::class);
    Route::get('/customers/{customer}',      ViewCustomer::class);
    Route::get('/customers/{customer}/edit', EditCustomer::class);
});
