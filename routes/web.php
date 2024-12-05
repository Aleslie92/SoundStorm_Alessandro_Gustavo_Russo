<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

// HOMEPAGE
Route::get( '/', [ PublicController::class, 'homepage' ] )->name( 'homepage' );

// PAGINA PROFILO
Route::get( '/profile', [ ProfileController::class, 'profile' ] )->name( 'profile.page' );

// ROTTA MODIFICA AVATAR

Route::put( '/profile/{user}/edit-avatar', [ ProfileController::class, 'editAvatar' ] )->name( 'profile.editavatar' );

// ROTTA MODIFICA DATI PROFILO
Route::get( '/profile/{user}/edit-profile', [ ProfileController::class, 'edit' ] )->name( 'profile.edit' );
Route::put( '/profile/{user}/edit-profile', [ ProfileController::class, 'editProfile' ] )->name( 'profile.editprofile' );