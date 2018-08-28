<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lokasi;

class LokasiController extends Controller
{

    public function store(Request $request)
    {
        Lokasi::create($request->except('_token'));
        
        return redirect('welcome')->with('success', 'Information has been added');
    }

    public function index()
    {
        return view('inputlokasi');
    }
}
