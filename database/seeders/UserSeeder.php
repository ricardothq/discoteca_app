<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminUser = User::create([
            'name' => 'Rick',
            'phone' => '3456623447',
            'email' => 'rick@gmail.com',
            'profile' => 'ADMIN',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')

        ]);
        $camareroUser = User::create([
            'name' => 'Melisa allanes',
            'phone' => '345612347',
            'email' => 'melisa@gmail.com',
            'profile' => 'CAMARERO',
            'status' => 'ACTIVE',
            'password' => bcrypt('123')

        ]);

        $roles = [
            [
                'name' => 'ADMIN',
            ],
            [
                'name' => 'CAMARERO',
            ],
            [
                'name' => 'GUARDIA',
            ],
            [
                'name' => 'BARTENDER',
            ],
        ];

        foreach ($roles as $rol) {
            Role::create($rol);
        }

        $adminUser->assignRole('ADMIN');
        $camareroUser->assignRole('CAMARERO');
    }
}
