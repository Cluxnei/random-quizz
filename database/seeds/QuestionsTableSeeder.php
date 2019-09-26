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
        $fatec = Category::where('name', 'Fatec&CPS')->first()->id;
        $logica = Category::where('name', 'Lógica')->first()->id;
        $now = Carbon::now();
        // Itinerator part
        $question = Question::create([
            'title' => 'Em que ano o Centro Paula Souza foi criado?',
            'description' => ''
        ]);
        $question_id = $question->id;
        $question->categories()->sync([$fatec]);
        Answer::insert([
            [
                'title' => '1900',
                'correct' => 0,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => '2010',
                'correct' => 0,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => '1950',
                'correct' => 0,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => '1969',
                'correct' => 1,
                'created_at' => $now,
                'question_id' => $question_id
            ],
            [
                'title' => '1980',
                'correct' => 0,
                'created_at' => $now,
                'question_id' => $question_id
            ],
        ]);
    }
}
