<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembershipController;

use App\Http\Controllers\PageController;
use App\Http\Controllers\VolunteerController;

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

use App\Http\Controllers\ContentController;

// Main Static Pages
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/criteria', [PageController::class, 'criteria'])->name('criteria');
Route::get('/support', [PageController::class, 'support'])->name('support');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// News/Blog Routes
Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [ContentController::class, 'newsIndex'])->name('index');
    Route::get('/{slug}', [ContentController::class, 'newsShow'])->name('show');
    Route::post('/{id}/like', [ContentController::class, 'likeNews'])->name('like');
    Route::post('/{id}/comment', [ContentController::class, 'postComment'])->name('comment');
});

// Event Routes
Route::prefix('events')->name('events.')->group(function () {
    Route::get('/', [ContentController::class, 'eventsIndex'])->name('index');
    Route::get('/{slug}', [ContentController::class, 'eventsShow'])->name('show');
});

// Database Viewer (For development)
Route::prefix('db-viewer')->name('db.')->group(function () {
    Route::get('/', [App\Http\Controllers\DatabaseController::class, 'index'])->name('index');
    Route::get('/{table}', [App\Http\Controllers\DatabaseController::class, 'show'])->name('show');
});

// Volunteering Routes
Route::get('/volunteers', [VolunteerController::class, 'showForm'])->name('volunteers.form');
Route::post('/volunteers', [VolunteerController::class, 'process'])->name('volunteers.process');

// Programs Sub-Pages
Route::prefix('programs')->name('programs.')->group(function () {
    Route::get('/free-surgeries', [PageController::class, 'freeSurgeries'])->name('free-surgeries');
    Route::get('/wound-care', [PageController::class, 'woundCare'])->name('wound-care');
    Route::get('/widows-campaign', [PageController::class, 'widowsCampaign'])->name('widows-campaign');
    Route::get('/health-fairs', [PageController::class, 'healthFairs'])->name('health-fairs');
});

// Membership Routes
Route::prefix('membership')->name('membership.')->group(function () {
    Route::get('/associate', [MembershipController::class, 'showAssociateForm'])->name('associate.form');
    Route::post('/associate', [MembershipController::class, 'processAssociate'])->name('associate.process');
    Route::get('/individual', [MembershipController::class, 'showIndividualForm'])->name('individual.form');
    Route::post('/individual', [MembershipController::class, 'processIndividual'])->name('individual.process');
    Route::get('/verify', [MembershipController::class, 'verifyPayment'])->name('verify');
    Route::get('/success', [MembershipController::class, 'successPage'])->name('success');
});
