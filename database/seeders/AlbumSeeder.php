<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $albums = [
            [
                'title' => 'Midnights',
                'artist' => 'Taylor Swift',
                'genre' => 'Pop',
                'release_year' => 2022,
                'track_count' => 13,
                'duration_minutes' => 44,
            ],
            [
                'title' => '1989',
                'artist' => 'Taylor Swift',
                'genre' => 'Pop',
                'release_year' => 2014,
                'track_count' => 13,
                'duration_minutes' => 48,
            ],
            [
                'title' => 'Reputation',
                'artist' => 'Taylor Swift',
                'genre' => 'Pop',
                'release_year' => 2017,
                'track_count' => 15,
                'duration_minutes' => 55,
            ],
            [
                'title' => 'Future Nostalgia',
                'artist' => 'Dua Lipa',
                'genre' => 'Pop',
                'release_year' => 2020,
                'track_count' => 11,
                'duration_minutes' => 37,
            ],
            [
                'title' => 'After Hours',
                'artist' => 'The Weeknd',
                'genre' => 'R&B',
                'release_year' => 2020,
                'track_count' => 14,
                'duration_minutes' => 56,
            ],
            [
                'title' => 'Starboy',
                'artist' => 'The Weeknd',
                'genre' => 'R&B',
                'release_year' => 2016,
                'track_count' => 18,
                'duration_minutes' => 68,
            ],
            [
                'title' => 'Thriller',
                'artist' => 'Michael Jackson',
                'genre' => 'Pop',
                'release_year' => 1982,
                'track_count' => 9,
                'duration_minutes' => 42,
            ],
            [
                'title' => 'Bad',
                'artist' => 'Michael Jackson',
                'genre' => 'Pop',
                'release_year' => 1987,
                'track_count' => 11,
                'duration_minutes' => 48,
            ],
            [
                'title' => 'Back in Black',
                'artist' => 'AC/DC',
                'genre' => 'Rock',
                'release_year' => 1980,
                'track_count' => 10,
                'duration_minutes' => 42,
            ],
            [
                'title' => 'Nevermind',
                'artist' => 'Nirvana',
                'genre' => 'Rock',
                'release_year' => 1991,
                'track_count' => 12,
                'duration_minutes' => 49,
            ],
            [
                'title' => 'The Dark Side of the Moon',
                'artist' => 'Pink Floyd',
                'genre' => 'Rock',
                'release_year' => 1973,
                'track_count' => 10,
                'duration_minutes' => 43,
            ],
            [
                'title' => 'Abbey Road',
                'artist' => 'The Beatles',
                'genre' => 'Rock',
                'release_year' => 1969,
                'track_count' => 17,
                'duration_minutes' => 47,
            ],
            [
                'title' => 'Let It Be',
                'artist' => 'The Beatles',
                'genre' => 'Rock',
                'release_year' => 1970,
                'track_count' => 12,
                'duration_minutes' => 35,
            ],
            [
                'title' => 'Divide',
                'artist' => 'Ed Sheeran',
                'genre' => 'Pop',
                'release_year' => 2017,
                'track_count' => 12,
                'duration_minutes' => 46,
            ],
            [
                'title' => 'Multiply',
                'artist' => 'Ed Sheeran',
                'genre' => 'Pop',
                'release_year' => 2014,
                'track_count' => 12,
                'duration_minutes' => 43,
            ],
            [
                'title' => '25',
                'artist' => 'Adele',
                'genre' => 'Soul',
                'release_year' => 2015,
                'track_count' => 11,
                'duration_minutes' => 48,
            ],
            [
                'title' => '21',
                'artist' => 'Adele',
                'genre' => 'Soul',
                'release_year' => 2011,
                'track_count' => 11,
                'duration_minutes' => 48,
            ],
            [
                'title' => '19',
                'artist' => 'Adele',
                'genre' => 'Soul',
                'release_year' => 2008,
                'track_count' => 12,
                'duration_minutes' => 43,
            ],
            [
                'title' => 'Random Access Memories',
                'artist' => 'Daft Punk',
                'genre' => 'Electronic',
                'release_year' => 2013,
                'track_count' => 13,
                'duration_minutes' => 74,
            ],
            [
                'title' => 'Discovery',
                'artist' => 'Daft Punk',
                'genre' => 'Electronic',
                'release_year' => 2001,
                'track_count' => 14,
                'duration_minutes' => 61,
            ],
            [
                'title' => 'Homework',
                'artist' => 'Daft Punk',
                'genre' => 'Electronic',
                'release_year' => 1997,
                'track_count' => 16,
                'duration_minutes' => 73,
            ],
            [
                'title' => 'Good Kid, M.A.A.D City',
                'artist' => 'Kendrick Lamar',
                'genre' => 'Hip-Hop',
                'release_year' => 2012,
                'track_count' => 12,
                'duration_minutes' => 68,
            ],
            [
                'title' => 'To Pimp a Butterfly',
                'artist' => 'Kendrick Lamar',
                'genre' => 'Hip-Hop',
                'release_year' => 2015,
                'track_count' => 16,
                'duration_minutes' => 79,
            ],
            [
                'title' => 'Channel Orange',
                'artist' => 'Frank Ocean',
                'genre' => 'R&B',
                'release_year' => 2012,
                'track_count' => 17,
                'duration_minutes' => 55,
            ],
            [
                'title' => 'Blonde',
                'artist' => 'Frank Ocean',
                'genre' => 'R&B',
                'release_year' => 2016,
                'track_count' => 17,
                'duration_minutes' => 60,
            ],
        ];

        foreach ($albums as $album) {
            Album::create($album);
        }
    }
}
