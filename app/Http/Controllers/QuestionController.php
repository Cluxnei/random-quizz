<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function random()
    {
        try{

            $question = Question::all()->random();

            $questionsToWin = config('app')['correct_questions_to_win'];
            $userScore = session()->get('user')->score;

            return view('question', compact('question', 'questionsToWin', 'userScore'));
        }catch(\Exception $ex){
            return redirect()->route('home');
        }
    }

    public function randomQuestions($number)
    {
        $questions = Question::all()->map(function($question){
            $question->commaCategories = $question->commaCategories;
            $question->answers = $question->answers;
            return $question;
        });
        return response()->json($questions->random($number)->toArray());
    }
}
