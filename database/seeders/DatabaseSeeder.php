<?php

use Illuminate\Database\Seeder;
use App\Models\Genre;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $genres = [
            ["Family"]
        ];

        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre[0],
            ]);
        }
    }
}

