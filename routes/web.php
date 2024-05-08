<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\EdukasiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MarketplaceController;
use App\Http\Controllers\DashboardController;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/network',[NetworkController::class, 'index'])->name('network');
Route::get('/network/topic',[NetworkController::class, 'indexTopic'])->name('network-topic');
Route::get('/network/form',[NetworkController::class, 'indexForm'])->name('network-form');
Route::get('/network/topic/{id}',[NetworkController::class, 'indexDetail'])->name('topic-detail');
Route::post('/network/store',[NetworkController::class, 'storeTopics'])->name('store-topics-user');

Route::get('/edukasi',[EdukasiController::class, 'index'])->name('edukasi');
Route::get('/pengaduan',[PengaduanController::class, 'index'])->name('pengaduan');

Route::get('/marketplace',[MarketplaceController::class, 'index'])->name('marketplace');
Route::get('/marketplace/form',[MarketplaceController::class, 'indexForm'])->name('marketplace-form');
Route::post('/marketplace/store',[MarketplaceController::class, 'storeItems'])->name('store-items-user');

Route::get('/dashboard',[DashboardController::class, 'index'])->name('dashboard');

Route::post('/storeEvents',[DashboardController::class, 'storeEvents'])->name('store-events');
Route::post('/storeTopics',[DashboardController::class, 'storeTopics'])->name('store-topics');
Route::post('/storeEducations',[DashboardController::class, 'storeEducations'])->name('store-educations');
Route::post('/storeItems',[DashboardController::class, 'storeItems'])->name('store-items');
Route::post('/storeReports',[PengaduanController::class, 'storeReports'])->name('store-reports');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
