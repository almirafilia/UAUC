<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Dashkar;
use Auth;

class DashkarController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dashkar = Dashkar::where('nik',Auth::user()->nik)->get();

        // dd($dashkar);

        /*$users = DB::select('select * from users where name = ?', [1]);

        return view('dashkar', ['users' => $users]);

        foreach ($users as $user) {
            echo $user->name;*/

        return view('dashkar',compact('dashkar'));

        return view('dashkar');

        /*$homeks=\App\Homek::all();
        return view('indexhomek',compact('homeks'));*/
    }

    public function index1()
    {
        $homeks=\App\Homek::all();
        return view('indexhomek',compact('homeks'));
    }
}
