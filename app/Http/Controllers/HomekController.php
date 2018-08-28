<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Homek;
use App\Kontraktor;

class HomekController extends Controller
{
public function homek($id)
    {
        $kontraktor = Kontraktor::where('_token',$id)->get();
        $data = [
            'kontraktor'=>$kontraktor
        ];
        // dd($data);
        return view('homek',$data);
    }

    public function store(Request $request)
    {
        Homek::create($request->except('_token'));
        
        return redirect('welcome')->with('success', 'Information has been added');
    }

    public function index1()
    {
        $homeks=\App\Homek::all();
        return view('indexhomek',compact('homeks'));
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
   /* public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        return view('homek');
    }
}
