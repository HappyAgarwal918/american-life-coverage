<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;
use App\Http\Controllers\pagesController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [pagesController::class, 'index'])->name('index');
Route::get('terms-and-conditions', [pagesController::class, 'terms'])->name('terms');
Route::get('tcpa', [pagesController::class, 'tcpa'])->name('tcpa');
Route::get('communication-opt-out', [pagesController::class, 'opt_out'])->name('opt_out');
Route::get('privacy-center', [pagesController::class, 'privacy_center'])->name('privacy_center');
Route::get('privacy-policy-2', [pagesController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('us-customer-privacy-notice', [pagesController::class, 'privacy_notice'])->name('privacy_notice');
Route::get('california-notice-at-collection', [pagesController::class, 'privacy_notice_at_collection'])->name('privacy_notice_at_collection');
Route::get('company-privacy-disclosure', [pagesController::class, 'privacy_disclosure'])->name('privacy_disclosure');
Route::get('premier-partners-and-marketing-partners', [pagesController::class, 'ppamp'])->name('ppamp');


Route::get('contact-us', [pagesController::class, 'contact'])->name('contact');
Route::get('forms-contactus', [pagesController::class, 'contact_form'])->name('contact_form');
Route::post('contact_save', [dataController::class, 'contact_save'])->name('contact_save');
Route::get('do-not-sell-my-personal-information', [pagesController::class, 'dnsmpi'])->name('dnsmpi');
Route::post('datarequest_save', [dataController::class, 'datarequest_save'])->name('datarequest_save');
Route::get('health', [pagesController::class, 'health'])->name('health');
Route::get('thank-you-health', [dataController::class, 'health_thank'])->name('health_thank');
Route::post('thank-you-health', [dataController::class, 'health_save'])->name('health_save');
Route::get('life', [pagesController::class, 'life'])->name('life');
Route::get('thank-you-life', [dataController::class, 'life_thank'])->name('life_thank');
Route::post('thank-you-life', [dataController::class, 'life_save'])->name('life_save');
Route::get('medicare', [pagesController::class, 'medicare'])->name('medicare');
Route::get('thank-you-final', [dataController::class, 'medicare_thank'])->name('medicare_thank');
Route::post('thank-you-final', [dataController::class, 'medicare_save'])->name('medicare_save');

require __DIR__.'/auth.php';
