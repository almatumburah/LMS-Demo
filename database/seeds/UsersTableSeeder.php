<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'user_type'      => 'Admin',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',
                'remember_token' => null,
            ],
            [
                'id'             => 2,
                'name'           => 'Institution',
                'email'          => 'institution@institution.com',
                'user_type'      => 'Institution',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',
                'remember_token' => null,
            ],
            [
                'id'             => 3,
                'name'           => 'Alpha',
                'email'          => 'alpha@alpha.com',
                'user_type'      => 'Student',
                'password'       => '$2y$10$xrsPLYaYoSrvak108tqKouwl9I/3VZMJ5h/I96pOCqwg.c0Dl4ILy',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
