<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rank;
use Auth;

class RankController extends Controller
{
	public function index()
    {
        $rank = Rank::all()->sortByDesc('jumlah');

        return view('rank',compact('rank'));

        return view('rank');
    }

    public function index1()
    {
        $homeks=\App\Homek::all();
        return view('indexhomek',compact('homeks'));
    }
    
}
