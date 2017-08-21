<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 14.08.17
 * Time: 16:10
 */

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function index()
    {
        $users = DB::table('customers')->get();

        return view('aboutus.index', ['customers' => $users]);
    }
}