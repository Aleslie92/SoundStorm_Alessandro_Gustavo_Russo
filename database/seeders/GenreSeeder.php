<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder {
    /**
    * Run the database seeds.
    */

    public function run(): void {
        $genres = [

            'pop',
            'rock',
            'jazz',
            'blues',
            'metal',
            'rap',
            'hip-hop',
            'reggae',
            'classica',
            'country',
            'dance',
            'techno',
            'house',
            'instrumental'
        ];
        foreach ( $genres as $genre ) {
            Genre::create( [
                'name' => $genre,
            ] );
        }
    }
}
