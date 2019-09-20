<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        try {
            if($request->has('username')){
                $user = User::create([
                    'name' => $request->username
                ]);
                session(['user' => $user]);
                return response()->json(['error' => false, 'msg' => 'Usuário cadastrado!']);
            }
        } catch (\Throwable $th) {
            return response()->json(['error' => true, 'msg' => 'Escolha outro nome!']);
        }
        return response()->json(['error' => true, 'Escolha outro nome!']);
    }
    public function increment()
    {
        $user = session()->get('user');
        $user->score++;
        $user->save();
    }
    public function checkWin(){
        $questionsToWin = config('app')['correct_questions_to_win'];
        $user = session()->get('user');
        $win = $user->score >= $questionsToWin;
        if($win)
            session()->forget('user');
        return response()->json($win);
    }
}
