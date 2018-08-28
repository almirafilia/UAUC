<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use DB;

class KaryawanController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function store(Request $request)
    {

        Karyawan::create($request->except('_token'));

        /*$jumlahskrg = DB::table('users')->select('users.jumlah')->where('users.nik', $request->input('nik'))->get();
        dd($jumlahskrg);
        $jumlahskrg++;
        dd($jumlahskrg);
        DB::table('users')->where('users.nik', $request->input('nik'))->update(['jumlah' => $jumlahskrg]);*/

        DB::table('users')->where('users.nik', $request->input('nik'))->increment('jumlah', 1);
        
        return redirect('dashkar')->with('success', 'Information has been added');
    }

    public function index()
    {
        $karyawans=\App\Karyawan::all();
        return view('indexkaryawan',compact('karyawans'));
    }
}
