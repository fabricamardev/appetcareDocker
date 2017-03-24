<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Tutor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tutors = Tutor::paginate(10);
        return view('pages.tutor.index', compact('tutors'));
    }

    public function logout()
    {   
        Auth::logout();
        return redirect()->route('login');
    }
}
