<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//USERS

Route::get('users', [UserController::class, 'index'])->name('users');

Route::get('users/create', [UserController::class, 'create'])->name('users.create');

Route::get('users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::put('users/{user}', [UserController::class, 'update'])->name('users.update');

Route::post('users', [UserController::class, 'store'])->name('users.store');

Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

// CAMPAIGNS

Route::get('campaigns', [CampaignController::class, 'index'])->name('campaigns');

Route::get('campaigns/create', [CampaignController::class, 'create'])->name('campaigns.create');

Route::get('campaigns/{campaign}/edit', [CampaignController::class, 'edit'])->name('campaigns.edit');

Route::put('campaigns/{campaign}', [CampaignController::class, 'update'])->name('campaigns.update');

Route::post('campaigns', [CampaignController::class, 'store'])->name('campaigns.store');

Route::delete('campaigns/{campaign}', [CampaignController::class, 'destroy'])->name('campaigns.destroy');

// PAGES

Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('about', [PageController::class, 'about'])->name('about');

Route::get('login', [PageController::class, 'login'])->name('login');

Route::get('signUp', [PageController::class, 'signUp'])->name('signUp');