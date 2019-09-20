<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    public function random()
    {
        $question = Question::all()->random();
        return view('question', compact('question'));
    }
}
