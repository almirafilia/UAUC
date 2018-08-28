<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OthersController extends Controller
{
     public function othersform()
    {
        return view('othersform');
    }

    public function store(Request $request)
    {
        /*if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }*/
        $others= new \App\Others;
        $others->nama=$request->get('nama', false);
        $others->namainstansi=$request->get('namainstansi');
        $others->role=$request->get('role');
        $others->save();
        
        return redirect('homek')->with('success', 'Information has been added');
    }

    public function indexo()
    {
        $others=\App\Others::all();
        return view('indexo',compact('others'));
    }
}
