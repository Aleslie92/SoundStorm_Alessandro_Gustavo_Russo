<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

// HOMEPAGE
Route::get( '/', [ PublicController::class, 'homepage' ] )->name( 'homepage' );

// PAGINA PROFILO
Route::get( '/profile', [ ProfileController::class, 'profile' ] )->name( 'profile.page' );

// ROTTA FUNZIONE MODIFICA AVATAR
Route::put( '/profile/{user}/edit-avatar', [ ProfileController::class, 'editAvatar' ] )->name( 'profile.editavatar' );

// ROTTA ALLA VISTA MODIFICA DATI PROFILO
Route::get( '/profile/{user}/edit-profile', [ ProfileController::class, 'edit' ] )->name( 'profile.edit' );
// ROTTA FUNZIONE MODIFICA DATI PROFILO
Route::put( '/profile/{user}/edit-profile', [ ProfileController::class, 'editProfile' ] )->name( 'profile.editprofile' );

// ROTTA VISTA CREA NUOVO TRACK
Route::get( '/music/create', [ TrackController::class, 'create' ] )->name( 'track.create' );
// STORE NUOVO TRACK
Route::post( '/music/create', [ TrackController::class, 'store' ] )->name( 'track.store' );
// ROTTA INDEX TRACK
Route::get( '/music/all-tracks', [ TrackController::class, 'index' ] )->name( 'track.index' );
// ROTTA CERCA PER ARTISTA
Route::get( '/music/all-tracks/{user}/autor', [ TrackController::class, 'filterByUser' ] )->name( 'track.filterByUser' );
