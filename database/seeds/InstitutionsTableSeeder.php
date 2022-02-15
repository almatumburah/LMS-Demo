<?php

use App\Institution;
use App\User;
use Illuminate\Database\Seeder;

class InstitutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $institution = [
            [
                'id'    => 1,
                'name' => 'Bisho',
                'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
            ],
            [
                'id'    => 2,
                'name' => 'King Williams Town',
                'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
            ],
            [
                'id'    => 3,
                'name' => 'Soweto',
                'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
            ],
            [
                'id'    => 4,
                'name' => 'Other',
                'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
            ],
        ];

        Institution::insert($institution);
        User::find(2)->update(['institution_id' => 1]);
    }
}
