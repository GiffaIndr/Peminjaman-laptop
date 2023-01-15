<?php

namespace App\Http\Controllers;

use App\Models\Take;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Storage;

class TakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    public function landing()
    {
        return view('landing');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }
    public function register()
    {
        return view('register');
    }
public function registerAccount(Request $request){
    // dd($request->all());
    $request->validate([
        'email' => 'required|email:dns|unique:users',
        'username' => 'required|',
        'password' => 'required|min:8',
        'name' => 'required|min:3',
    ]);
    user::create([
        'name' => $request->name,
         'username' => $request->username, 
         'email' => $request->email, 
         'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success', 'berhasil menambah akun!');
  
}
public function auth(Request $request){
    $request->validate([
        'email' => 'required|exists:users,email',
        'password' => 'required|min:1|min:8',
    ],[
        'email.exists' => 'email ini belum tersedia',
        'email.required' => 'email harus diisi',
        'password.required' => 'password harus diisi',
    ]);

    $user = $request->only('email', 'password');
    if(Auth::attempt($user)) {
        return redirect()->route('take.index');
    }else {
        return redirect()->back()->with('error', 'Gagal login, silahkan cek kembali');
    }
    return redirect()->route('take.index')->with('successAdd', 'Anda Berhasil Login!');
  }
    public function dashboard()
    {

        $takes  = Take::all();
        return view('dashboard', compact('takes'));
    }

    public function pull()
    {

        $takes  = Take::all();
        return view('data', compact('takes'));
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'saksi' => 'required',
            'rayon' => 'required',
            'keperluan' => 'required|min:5',
            'tanggal_pinjam' => 'required',

        ]);
        Take::create([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'saksi' => $request->saksi,
            'rayon' => $request->rayon,
            'keperluan' => $request->keperluan,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'user_id' => Auth::user()->id,

            'status' => 0,

        ]);
        return redirect('/take/dashboard')->with('addTake', 'Berhasil menambah data peminjaman!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function show(Take $take)
    {
        //
    }


    public function updateCompleted($id)
    {
        Take::where('id', '=', $id)->update([
            'status' => 1,
            'done_time' => \Carbon\Carbon::now(),
        ]);
        return redirect()->back()->with('done', 'Waktu peminjaman sudah selesai');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $take = Take::find($id);
        return view('edit' . compact('take'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     wqw2*/
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required',
            'saksi' => 'required',
            'rayon' => 'required',
            'keperluan' => 'required|min:5',
            'tanggal_pinjam' => 'required',
            'tanggal_kembali' => 'required',

        ]);
        Take::where('id', $id)->update([
            'nama' => $request->nama,
            'nis' => $request->nis,
            'saksi' => $request->saksi,
            'rayon' => $request->rayon,
            'keperluan' => $request->keperluan,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'tanggal_kembali' => $request->tanggal_kembali,
            'status' => 0,
        ]);
        return redirect('/dashboard')->with('successUpdate', 'Data berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Take  $take
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Take::find($id)->delete();

        return redirect('/dashboard');
    }
}
