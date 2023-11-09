<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

//USERS

Route::get('users', [UserController::class, 'index'])->name('users');

Route::get('users/register', [UserController::class, 'create'])->name('users.create');

Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::get('users/{user}', [UserController::class, 'show'])->name('users.show');

Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

Route::post('users/register', [UserController::class, 'store'])->name('users.store');

Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// CAMPAIGNS


Route::middleware(['auth'])->group(function () {
    Route::get('campaigns', [CampaignController::class, 'index'])->name('campaigns');

    Route::get('campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');

    Route::get('campaigns/{campaign}/edit', [CampaignController::class, 'edit'])->name('campaigns.edit');

    Route::put('campaigns/{campaign}', [CampaignController::class, 'update'])->name('campaigns.update');

    Route::post('campaigns', [CampaignController::class, 'store'])->name('campaigns.store');

    Route::delete('campaigns/{campaign}', [CampaignController::class, 'destroy'])->name('campaigns.destroy');

});

// PAGES

Route::inertia('/', 'HomePage')->name('pages.home');

Route::inertia('/about', 'AboutPage')->name('pages.about');

Route::inertia('/dice', 'DicerollerPage')->name('pages.dice');


// LOGIN

Route::post('login', [LoginController::class, 'login'])->name('login');
Route::get('login', [LoginController::class, 'create'])->name('login.create');
