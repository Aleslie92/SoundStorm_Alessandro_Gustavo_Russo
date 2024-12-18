<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Track;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class TrackController extends Controller implements HasMiddleware {

    public static function middleware() : array {
        return [
            new Middleware( 'auth', except:[ 'index', 'filterByUser' ] ),
        ];
    }

    /**
    * Display a listing of the resource.
    */

    public function index() {
        $tracks = Track::orderBy( 'created_at', 'desc' )->get();
        return view( 'track.index', compact( 'tracks' ) );
    }

    public function filterByUser( User $user ) {
        $tracks = Track::where( 'user_id', $user->id )
        ->orderBy( 'created_at', 'desc' )
        ->get();
        return view( 'track.filterByUser', compact( 'tracks', 'user' ) );
    }

    /**
    * Show the form for creating a new resource.
    */

    public function create() {
        return view( 'track.create' );
    }

    /**
    * Store a newly created resource in storage.
    */

    public function store( Request $request ) {

        $request->validate( [
            'title' => [ 'required', 'max:255' ],
            'cover' => [ 'required', 'image' ],
            'description' => [ 'required', 'max:255' ],
            'path' => [ 'required', 'file', 'mimes:mp3,wav,aac' ],

        ] );

        Track::create( [
            'title' => $request->title,
            'cover' => $request->file( 'cover' )->store( 'covers', 'public' ),
            'description' => $request->description,
            'path' => $request->file( 'path' )->store( 'tracks', 'public' ),
            'user_id' => Auth::user()->id,
        ] );

        return redirect( route( 'homepage' ) )->with( 'message', 'Brano aggiunto con successo!' );
    }

    /**
    * Display the specified resource.
    */

    public function show( Track $track ) {
        //
    }

    /**
    * Show the form for editing the specified resource.
    */

    public function edit( Track $track ) {
        //
    }

    /**
    * Update the specified resource in storage.
    */

    public function update( Request $request, Track $track ) {
        //
    }

    /**
    * Remove the specified resource from storage.
    */

    public function destroy( Track $track ) {
        //
    }
}
