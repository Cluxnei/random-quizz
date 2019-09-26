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
        // factory(Category::class, 50)->create();
        $now = Carbon::now();
        Category::insert([
            [
                'name' => 'Fatec&CPS',
                'created_at' => $now
            ],
            [
                'name' => 'Lógica',
                'created_at' => $now
            ]
        ]);
    }
}
