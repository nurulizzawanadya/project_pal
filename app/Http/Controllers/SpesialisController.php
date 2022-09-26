<?php

namespace App\Http\Controllers;

use \App\Models\spesialis;
use \App\Models\officer;
use \App\Models\detail_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SpesialisController extends Controller
{
    public function index()
    {
    	$spesialis = spesialis::where('status_spesialis','=',0)->get();
        $detail_kategori = detail_kategori::all();
        $officer = officer::all();

        return view('file_main/spesialis', compact('spesialis','detail_kategori','officer'));
       
    }

    public function tambah()
    {
    	$spesialis = spesialis::all();
        $detail_kategori = detail_kategori::all();
        $officer = officer::all();

        return view('file_main/tambah_spesialis', compact('spesialis','detail_kategori','officer'));
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            //'id_spesialis' => 'required',
            'id_detail' =>'required',
            'id_officer'=>'required',
            'status_spesialis'=>'required'

        ]);

      spesialis::create([
            'id_spesialis' => null,
            'id_detail' => $request->id_detail,
            'id_officer' => $request->id_officer,
            'status_spesialis' => $request->status_spesialis
        ]);
        return redirect('/spesialis')->with('success','Data berhasil ditambahkan');
    }

     public function edit($id)
    {
       $spesialis = spesialis::find($id);
        $detail_kategori = detail_kategori::all();
        $officer = officer::all();

        return view('file_main/edit_spesialis', compact('spesialis','detail_kategori','officer'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
          //'id_spesialis' => 'required',
            'id_detail' =>'required',
            'id_officer'=>'required',
            'status_spesialis'=>'required'
        ]);

       $spesialis = spesialis::find($request->id_spesialis);
            $spesialis->id_detail = $request->id_detail;
            $spesialis->id_officer = $request->id_officer;
            $spesialis->status_spesialis = $request->status_spesialis;
            
            $spesialis->save();
        return redirect('/spesialis')->with('info','Data berhasil diubah');
    }
    public function hapus($id){
        $spesialis = spesialis::find($id);
        $spesialis->status_spesialis = 1;
        $spesialis->save();
        return redirect('/spesialis')->with('danger','Data berhasil dihapus');
    }


}
