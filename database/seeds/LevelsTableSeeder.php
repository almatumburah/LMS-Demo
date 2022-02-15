<?php

namespace Database\Seeders;

use App\Level;
use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    public function run()
    {
        $levels = [
            [
                'id'    => 1,
                'title' => 'Grade 6',
            ],
            [
                'id'    => 2,
                'title' => 'Grade 7',
            ],
            [
                'id'    => 3,
                'title' => 'Grade 8',
            ],
            [
                'id'    => 4,
                'title' => 'Grade 9',
            ],
            [
                'id'    => 5,
                'title' => 'Grade 10',
            ],
            [
                'id'    => 6,
                'title' => 'Grade 11',
            ],
            [
                'id'    => 7,
                'title' => 'Grade 12',
            ],
        ];

        Level::insert($levels);
    }
}
