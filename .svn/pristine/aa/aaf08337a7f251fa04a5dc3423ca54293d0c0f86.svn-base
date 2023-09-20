<?php

use App\Http\Controllers\OvalWebsiteController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [OvalWebsiteController::class,'index']);
Route::get('/our-program', [OvalWebsiteController::class,'ourProgram']);
Route::get('/science-and-technology', [OvalWebsiteController::class,'ScienceAndTechnology']);
Route::get('/about-us', [OvalWebsiteController::class,'aboutUs']);
Route::get('/contact-us', [OvalWebsiteController::class,'contactUs']);
Route::get('/legal', [OvalWebsiteController::class,'OvalPrivacyPolicy']);
Route::get('/cookie-policy', [OvalWebsiteController::class,'OvalCookiePolicy']);
Route::get('/terms-and-conditions', [OvalWebsiteController::class,'OvalTerms']);
Route::get('/medicalclearance', [OvalWebsiteController::class,'medical']);
Route::get('/waiver-and-release-of-liability', [OvalWebsiteController::class,'ovalWaiver']);
Route::post('/contact-us', [OvalWebsiteController::class,'contactUsSave']);

Route::get('dashboard', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
