<?php

namespace App\Http\Controllers\Auth;

use Input;
use DB;
use App\Kontraktor;
use App\Http\Controllers\Controller;
/*use Illuminate\Support\Facades\Validator;*/
use Illuminate\Foundation\Auth\RegistersUsers;

class KontraktorController extends Controller
{

    public function index()
    {
        $data = Kontraktor::all();
        return view('Kontraktor',compact('data'));
    }

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    /*protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'namaperusahaan' => 'required|string|max:255',
            /*'password' => 'required|string|min:6|confirmed',*/
        ]);
    }*/

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return Kontraktor::create([
            'name' => $data['name'],
            'namaperusahaan' => $data['namaperusahaan'],
            /*'password' => bcrypt($data['password']),*/
        ]);
    }

    /*public function store(Request $request)
   {
       $data = new Kontraktor();
       $data->name = $request->name;
       $data->namaperusahaan = $request->namaperusahaan;
       $data->save();
       return redirect()->route('Kontraktor.index')->with('alert-success','Berhasil Menambahkan Data!');
    }*/

    public function store(){
        $data = array(
            'nama' => Input::get('nama'),
            'namaperusahaan' => Input::get('namaperusahaan'),
        );

        DB::table('Kontraktor')->insert($data);
        return redirect()->route('Kontraktor.index')->with('alert-success','Berhasil Menambahkan Data!');

    }
}
