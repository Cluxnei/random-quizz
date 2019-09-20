<?php

namespace App\Http\Controllers;

use App\Answer;
use Illuminate\Http\Request;

class AnwerController extends Controller
{
    public function check($id)
    {
        $answer = Answer::findOrFail($id);

        return response()->json($answer->correct == 1);
    }
}
