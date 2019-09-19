<?php

use App\Category;
use App\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        Question::insert([
            [
                'title' => 'Quem foi Lord Kelvin?',
                'description' => '',
                'created_at' => $now
            ],
            [
                'title' => 'Quem é você?',
                'description' => '',
                'created_at' => $now
            ],
            [
                'title' => 'Plágio Musical',
                'description' => 'Qual das alternativas é um plágio de do, ré, mi, fá?',
                'created_at' => $now
            ]
        ]);
        $categoriesLength = Category::count() - 1;
        Question::all()->each(function($question) use ($categoriesLength){
            if(rand(0,1) % 2 == 0)
                $question->categories()->attach(rand(1, $categoriesLength));
            $question->categories()->attach(rand(1, $categoriesLength));
        });
    }
}
