<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
    'confirm' => false,
]);

Route::group(['middleware' => 'auth'], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/election', [App\Http\Controllers\ElectionController::class, 'create'])->name('election.create');
    Route::post('/election/store', [App\Http\Controllers\ElectionController::class, 'store'])->name('election.store');
    Route::get('/election/{election}', [App\Http\Controllers\ElectionController::class, 'show'])->name('election.show');

});

Route::get('/vote/{hash}', [App\Http\Controllers\ElectionController::class, 'vote'])->name('vote');
Route::post('/vote/{hash}/store', [App\Http\Controllers\ElectionController::class, 'voteStore'])->name('vote-store');
Route::get('/vote-thankyou', [App\Http\Controllers\ElectionController::class, 'voteThankyou'])->name('vote-thankyou');
