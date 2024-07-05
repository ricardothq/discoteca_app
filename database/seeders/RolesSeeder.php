<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ADMIN
        $roleAdmin = Role::where('name', 'ADMIN')->get()->first();
        // CAMARERO
        $roleCamarero = Role::where('name', 'CAMARERO')->get()->first();
        // GUARDIA
        $roleGuardia = Role::where('name', 'GUARDIA')->get()->first();
        // BARTENDER
        $roleBartender = Role::where('name', 'BARTENDER')->get()->first();
    }
}
