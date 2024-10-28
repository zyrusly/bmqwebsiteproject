<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IctController\IctController;
use App\Http\Controllers\HomeController\HomeController;
use App\Http\Controllers\EmailController\EmailController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('throttle:60,1')->group(function(){
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/opprtunities/careers', [HomeController::class, 'careers'])->name('careers');
    Route::get('/opprtunities/partners', [HomeController::class, 'partners'])->name('partners');
    Route::get('/portfolio', [HomeController::class, 'portfolio'])->name('portfolio');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    
    Route::get('/ict', [IctController::class, 'ictIndex'])->name('ict.index');
    Route::get('/ict/services', [IctController::class, 'ictServices'])->name('ict.services');
    Route::get('/ict/portfolio', [IctController::class, 'ictPortfolio'])->name('ict.portfolio');
    
    Route::post('/careerEmail', [EmailController::class, 'careerMail'])->name('career.mail');
    Route::post('/partnerEmail', [EmailController::class, 'partnerMail'])->name('partner.mail');
    Route::post('/quoteEmail', [EmailController::class, 'quoteMail'])->name('quote.mail');
});
