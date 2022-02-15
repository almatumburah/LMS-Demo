<?php

use Database\Seeders\LevelsTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            PermissionsTableSeeder::class,
            RolesTableSeeder::class,
            PermissionRoleTableSeeder::class,
            UsersTableSeeder::class,
            RoleUserTableSeeder::class,
            LevelsTableSeeder::class,
            InstitutionsTableSeeder::class,
            CoursesTableSeeder::class,
        ]);
    }
}
