<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Spatie\Honeypot\ProtectAgainstSpam;

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


/* Route::get('{any}', function() {
    return view('404page');
 })->where('any', '.*'); */

Route::get('/', function () {
    return view('index');
    //return view('404page');
});

Route::get('/test', function () {
    return view('test_gmp');
});

Route::get('/login', [AdminController::class, 'accueil']);
Route::post('/connexion', [AdminController::class, 'connexion']);
Route::post('/store-messages', [AdminController::class, 'message_store'])->middleware(ProtectAgainstSpam::class);
Route::post('/store-devis', [AdminController::class, 'devis_store'])->middleware(ProtectAgainstSpam::class);

Route::group(['middleware' => ['logged']], function () {
    Route::get('/messages', function () {
        return view('admin.messages-view');
    });
    Route::get('/devis', function () {
        return view('admin.devis-view');
    });
    
    Route::get('logout', [AdminController::class, 'logout']);
});