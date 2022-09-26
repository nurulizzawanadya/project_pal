<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\user;
use \App\Models\divisi;
use \App\Models\departmen;

class ManajemenuserController extends Controller
{
    public function index()
    {
    	// $manajemenuser = manajemenuser::with('manajemenuser')->paginate(10);
        $manajemenuser = user::where('user_status','=',0)->get();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/manajemenuser', compact('manajemenuser', 'divisi','departmen'));
    }
    public function edit($id)
    {
        $manajemenuser = user::find($id);
        $divisi = divisi::all();
        $departmen = departmen::all();
    
        return view('file_main/editmanajemenuser', ['manajemenuser' => $manajemenuser], compact('divisi','departmen'));
    }

    public function update(Request $request)
    {
        //dd($request);
        $this->validate($request,[
            'nip' => 'required',
            'nama'=>'required',
            'id_divisi'=>'required',
            'id_departmen' => 'required',
            'telp' => 'required',
            'user_status' => 'required'
        ]);

       $manajemenuser = user::find($request->nip);
            $manajemenuser->nama = $request->nama;
            $manajemenuser->id_divisi = $request->id_divisi;
            $manajemenuser->id_departmen = $request->id_departmen;
            $manajemenuser->telp = $request->telp;
            $manajemenuser->user_status = $request->user_status;

            
            $manajemenuser->save();
        return redirect('/halamanmanajemenuser')->with('info','Data berhasil diubah');
    }

    public function tambah()
    {
        $manajemenuser = user::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/tambahmanajemenuser', compact('manajemenuser', 'divisi','departmen'));
    }

    public function simpan(Request $request){
        //dd($request);
        $this->validate($request,[
            'nip'=>'required',
            'nama' =>'required',
            'id_divisi'=>'required',
            'id_departmen' => 'required',
            'telp' => 'required',
            'user_status' => 'required'
        ]);

        user::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'id_divisi' => $request->id_divisi,
            'id_departmen' => $request->id_departmen,
            'telp' => $request->telp,
            'user_status' => $request->user_status
        ]);
        return redirect('/halamanmanajemenuser')->with('success','Data berhasil ditambahkan');
    }
    public function hapus($id){
        $manajemenuser = user::find($id);
        $manajemenuser->user_status = 1;
        $manajemenuser->save();
        return redirect('/halamanmanajemenuser')->with('danger','Data berhasil dihapus');
    }
}