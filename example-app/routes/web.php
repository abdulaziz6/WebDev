<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CityActivitiesController;

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

// For index.html
Route::get('/', function () {
    return view('index');
})->name('index');

// For contact.html
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// For feedback.html
Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

// For our-project.html
Route::get('/our-project', function () {
    return view('our-project');
})->name('our-project');

// For picture-gallery.html
Route::get('/picture-gallery', function () {
    return view('picture-gallery');
})->name('picture-gallery');

// For resume.html
Route::get('/resume', function () {
    return view('resume');
})->name('resume');

// For saudi-arabia-landscape.html
Route::get('/landscabe', function () {
    return view('landscabe');
})->name('landscabe');

Route::post('/feedback/submit', [FeedbackController::class, 'submit'])->name('feedback.submit');
Route::post('/contact/submit', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('/create-plan', [CityController::class, 'showCities']);
Route::get('/create-plan/{cityId}', [CityActivitiesController::class, 'showActivities']);
