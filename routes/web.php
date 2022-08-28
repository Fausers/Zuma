<?php

use App\Http\Controllers\WebsiteController;
use App\Models\Expert;
use App\Models\FrontContent;
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
    $website = FrontContent::first();
    $experts = Expert::get();
    return view('welcome',compact('website','experts'));
});

Route::get('/events', [WebsiteController::class, 'events'])->name('events');
Route::get('/event/{id}', [WebsiteController::class, 'event'])->name('event');
Route::get('/about', function () {return view('site.about');})->name('about');
Route::get('/contacts', function () {return view('site.contacts');})->name('contacts');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dash/front', [WebsiteController::class,'front'])->name('front');
});
