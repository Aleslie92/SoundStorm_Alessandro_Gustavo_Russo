<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Genre;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class AdminController extends Controller implements HasMiddleware {
    public static function middleware() : array {
        return [ new Middleware( 'auth' ), ];
    }

    public function dashboard() {

        if ( !auth()->user()->isAdmin() ) {
            abort( 403, 'Accesso Non Autorizzato' );

        }

        return view( 'admin.dashboard' );
    }

    public function users() {

        if ( !auth()->user()->isAdmin() ) {
            abort( 403, 'Accesso Non Autorizzato' );

        }

        $users = User::all();

        return view( 'admin.users', compact( 'users' ) );
    }

    public function tracks() {

        if ( !auth()->user()->isAdmin() ) {
            abort( 403, 'Accesso Non Autorizzato' );

        }

        $tracks = Track::all();

        return view( 'admin.tracks', compact( 'tracks' ) );
    }

    public function genres() {

        if ( !auth()->user()->isAdmin() ) {
            abort( 403, 'Accesso Non Autorizzato' );

        }

        $genres = Genre::all();

        return view( 'admin.genres', compact( 'genres' ) );
    }

    public function storeGenre( Request $request ) {

        // if ( !auth()->user()->isAdmin() ) {
        //     abort( 403, 'Accesso Non Autorizzato' );

        // }

        $request->validate( [
            'name' => 'required',
        ] );

        Genre::create( [
            'name' => $request->name,
        ] );

        return redirect()->back()->with( 'success', 'Genere Creato Correttamente' );
    }
}
