<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 18.08.17
 * Time: 20:41
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BestController extends Controller
{
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