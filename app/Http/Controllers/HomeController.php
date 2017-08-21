<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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
        return view('home');
    }

    public function defindex()
    {
        $this->middleware('auth');
        return view('forlogers');
    }

    public function HomePage()
    {
        return view('HomePage');
    }

    public function regpage1()
    {
        return view('regpage1');
    }

    public function aboutus()

    {
//        $allusers = DB::table('customers')->get();

                return view('aboutus');
    }

    public function categories()

    {

        return view('/categories');
    }
}

