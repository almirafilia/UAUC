<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontraktorController extends Controller
{
    public function kontraktorform()
    {
        return view('kontraktorform');
    }

    public function store(Request $request)
    {
        /*if($request->hasfile('filename'))
         {
            $file = $request->file('filename');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
         }*/
        $id = str_random(15);
        $kontraktor= new \App\Kontraktor;
        $kontraktor->nama=$request->get('nama', false);
        $kontraktor->namaperusahaan=$request->get('namaperusahaan');
        $kontraktor->role=$request->get('role');
        $kontraktor->_token=$id;
        // dd($request);
        
        // dd($id);
        $kontraktor->save();
        
        return redirect('homek/'.$id)->with('success', 'Information has been added');
    }

    public function index()
    {
        $kontraktors=\App\Kontraktor::all();
        return view('index',compact('kontraktors'));
    }

}
