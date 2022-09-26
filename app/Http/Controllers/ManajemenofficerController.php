<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\manajemenofficer;

class ManajemenofficerController extends Controller
{
    public function index()
    {
    	$manajemenofficer = manajemenofficer::where('officer_status','!=',2)->get();

        return view('file_main/manajemenofficer', compact('manajemenofficer'));
    }
    public function edit($id)
    {
        $manajemenofficer = manajemenofficer::find($id);
    
        return view('file_main/editmanajemenofficer', compact('manajemenofficer'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'nip' =>'required',
            'nama_officer'=>'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'officer_status' => 'required'
        ]);
        $manajemenofficer = manajemenofficer::find($request->id_officer);
        $manajemenofficer->nip = $request->nip;
        $manajemenofficer->nama_officer = $request->nama_officer;
        $manajemenofficer->username = $request->username;
        $manajemenofficer->password = $request->password;
        $manajemenofficer->email = $request->email;
        $manajemenofficer->officer_status = $request->officer_status;

        $manajemenofficer->save();
        return redirect('/halamanmanajemenofficer')->with('info','Data berhasil diubah');
    }

    public function tambah()
    {
        $manajemenofficer = manajemenofficer::all();

        return view('file_main/tambahmanajemenofficer', compact('manajemenofficer'));

    }

    public function simpan(Request $request){
        $this->validate($request,[
            //'id_officer'=>'required',
            'nip' =>'required',
            'nama_officer'=>'required',
            'username' => 'required',
            'password' => 'required',
            'email' => 'required',
            'officer_status' => 'required'
        ]);

        manajemenofficer::create([
            'id_officer' => null,
            'nip' => $request->nip,
            'nama_officer' => $request->nama_officer,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'officer_status' => $request->officer_status
        ]);
        return redirect('/halamanmanajemenofficer')->with('success','Data berhasil ditambahkan');
    }


    public function hapus($id_officer)
    {
        $manajemenofficer = manajemenofficer::find($id_officer);
        $manajemenofficer->officer_status = 2;
        $manajemenofficer->save();
        return redirect('/halamanmanajemenofficer')->with('danger','Data berhasil dihapus');
    }

    public function delete($id)
    {
        $manajemenofficer = manajemenofficer::find($id);
        $manajemenofficer->delete();
        return redirect('/halamanmanajemenofficer')->with('danger','Data berhasil dihapus');
    }

}
