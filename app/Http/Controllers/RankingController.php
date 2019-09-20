<?php

namespace App\Http\Controllers;

use App\User;

class RankingController extends Controller
{
    public function index()
    {
        $users = User::orderBy('score', 'desc')->get();

        return view('ranking', compact('users'));
    }
}
