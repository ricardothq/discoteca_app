<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'CURSOS',
            'image' => 'https://dummyimage.com/600x400/000000/f2000c&text=Rick+Lopez'
        ]);
        Category::create([
            'name' => 'TENIS',
            'image' => 'https://dummyimage.com/600x400/000000/f2000c&text=Rick+Lopez'
        ]);
        Category::create([
            'name' => 'CELULARES',
            'image' => 'https://dummyimage.com/600x400/000000/f2000c&text=Rick+Lopez'
        ]);
        Category::create([
            'name' => 'COMPUTADORAS',
            'image' => 'https://dummyimage.com/600x400/000000/f2000c&text=Rick+Lopez'
        ]);
    }
}
