<?php

use App\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        Category::insert([
            [
                'name' => 'Centro Paula Souza',
                'created_at' => $now
            ],
            [
                'name' => 'Matemática',
                'created_at' => $now
            ],
            [
                'name' => 'Física',
                'created_at' => $now
            ],
        ]);
    }
}
