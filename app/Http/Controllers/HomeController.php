<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function success()
    {
        if(session()->has('winner') && session()->get('winner') == true){
            session(['winner' => false]);
            return view('success');
        }
        else{
            return redirect()->route('random.question');
        }
    }
}
