<?php

namespace App\Http\Controllers;

use App\User;

class RankingController extends Controller
{
    public function index()
    {
        $users = User::orderBy('name', 'asc')->get()->sort(function($a, $b){
            $sorted = ($b->score - $a->score);
            if($sorted == 0)
                return strcmp($a->name, $b->name);
            return $sorted;
        });

        return view('ranking', compact('users'));
    }
}
