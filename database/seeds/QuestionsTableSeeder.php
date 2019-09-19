<?php

use App\Answer;
use App\Category;
use App\Question;
use Carbon\Carbon as CarbonCarbon;
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
        factory(Question::class, 50)->create()->each(function($question){
            $correct = [0, 0, 0, 0, 0];
            $correct[rand(0,4)] = 1;
            $now = CarbonCarbon::now();
            Answer::insert([
                [
                    'title' => 'a - Resposta a',
                    'correct' => $correct[0],
                    'created_at' => $now,
                    'question_id' => $question->id
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'b - Resposta b',
                    'correct' => $correct[1],
                    'created_at' => $now,
                    'question_id' => $question->id
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'c - Resposta c',
                    'correct' => $correct[2],
                    'created_at' => $now,
                    'question_id' => $question->id
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'd - Resposta d',
                    'correct' => $correct[3],
                    'created_at' => $now,
                    'question_id' => $question->id
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'e - Resposta e',
                    'correct' => $correct[4],
                    'created_at' => $now,
                    'question_id' => $question->id
                ],
            ]);
            $categories_number = rand(1, 5);
            while($categories_number--){
                $question->categories()->attach(Category::all()->random()->id);
            }
        });
    }
}
