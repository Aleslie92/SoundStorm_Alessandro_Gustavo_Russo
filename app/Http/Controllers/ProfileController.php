<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller implements HasMiddleware {
    public static function middleware() : array  {
        return [ 'auth' ];
    }

    public function profile() {

        $user = Auth::user();

        return view( 'profile.page', compact( 'user' ) );
    }

    public function edit( User $user ) {
        return view( 'profile.edit', compact( 'user' ) );
    }

    public function editAvatar( Request $request, User $user ) {

        $request->validate( [
            'avatar' => 'required|image',
        ] );

        $user->profile->update( [
            'avatar'=> $request->file( 'avatar' )->store( 'avatars', 'public' ),
        ] );

        return redirect()->back()->with( 'success', 'Avatar aggiornato con successo!' );

    }

    public function editProfile( Request $request, User $user ) {

        $request->validate( [
            'name' =>[ 'required', 'string', 'max:255' ],

            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique( 'users' )->ignore( $user->id ),
            ],

        ] );

        $user->update( [
            'name' => $request->name,
            'email' => $request->email,
        ] );

        $user->profile->update( [
            'address' => $request->address,
            'city' => $request->city,
            'province' => $request->province,
            'region' => $request->region,
            'country' => $request->country,
            'zip' => $request->zip,
            'phone' => $request->phone,

        ] );

        return redirect( route( 'profile.page' ) )->with( 'success', 'Profilo aggiornato con successo!' );

    }
}
