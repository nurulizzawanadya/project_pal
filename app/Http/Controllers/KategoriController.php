<?php

namespace App\Http\Controllers;

use \App\Models\kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategoriController extends Controller
{
    public function index()
    {
    	$kategori = kategori::where('kategori_status','=',0)
                    ->get();

        return view('file_main/kategori', compact('kategori'));
       
    }

    public function tambah()
    {
    	$kategori = kategori::all();

        return view('file_main/tambah_kategori', compact('kategori'));
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            //'id_kategori' => 'required',
            'kategori'=>'required',
            'kategori_status'=>'required',

        ]);

      kategori::create([
            'id_kategori' => null,
            'kategori' => $request->kategori,
            'kategori_status' => $request->kategori_status
        ]);
        return redirect('/kategori')->with('success','Data berhasil ditambahkan');
    }

     public function edit($id)
    {
        $kategori = kategori::find($id);

        return view('file_main/edit_kategori', compact('kategori'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            //'id_kategori' => 'required',
            'kategori'=>'required',
            'kategori_status'=>'required',
            'kategori_status' => 'required'
        ]);

       $kategori = kategori::find($request->id_kategori);
            $kategori->kategori = $request->kategori;
            $kategori->kategori_status = $request->kategori_status;
            
            $kategori->save();
        return redirect('/kategori')->with('info','Data berhasil diubah');
    }
    public function hapus($id){
        $kategori = kategori::find($id);
        $kategori->kategori_status = 1;
        $kategori->save();
        return redirect('/kategori')->with('danger','Data berhasil dihapus');
    }


}
