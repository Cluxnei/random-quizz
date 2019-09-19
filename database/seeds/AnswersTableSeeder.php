<?php

use App\Answer;
use App\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        Question::all()->each(function($question) use ($now){
            $correct = [0, 0, 0, 0, 0];
            $correct[rand(0,4)] = 1;
            Answer::insert([
                [
                    'question_id' => $question->id,
                    'title' => 'a - Resposta a',
                    'correct' => $correct[0],
                    'created_at' => $now
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'b - Resposta b',
                    'correct' => $correct[1],
                    'created_at' => $now
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'c - Resposta c',
                    'correct' => $correct[2],
                    'created_at' => $now
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'd - Resposta d',
                    'correct' => $correct[3],
                    'created_at' => $now
                ],
                [
                    'question_id' => $question->id,
                    'title' => 'e - Resposta e',
                    'correct' => $correct[4],
                    'created_at' => $now
                ],
            ]);
        });
    }
}
