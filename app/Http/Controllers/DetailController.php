<?php

namespace App\Http\Controllers;

use \App\Models\kategori;
use \App\Models\detail_kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DetailController extends Controller
{
    public function index()
    {
    	$detail_kategori = detail_kategori::where('status_detail','=',0)->get();
        $kategori = kategori::all();

        return view('file_main/detail_kategori', compact('detail_kategori','kategori'));
       
    }

    public function tambah()
    {
    	$detail_kategori = detail_kategori::all();
        $kategori = kategori::all();

        return view('file_main/tambah_detailkategori', compact('detail_kategori','kategori'));
    }

    public function simpan(Request $request)
    {
        $this->validate($request,[
            //'id_detail' => 'required',
            'id_kategori' =>'required',
            'detail'=>'required',
            'status_detail'=>'required'

        ]);

      detail_kategori::create([
            'id_detail' => null,
            'id_kategori' => $request->id_kategori,
            'detail' => $request->detail,
            'status_detail' => $request->status_detail
        ]);
        return redirect('/detailkategori')->with('success','Data berhasil ditambahkan');
    }

     public function edit($id)
    {
       $detail_kategori = detail_kategori::find($id);
        $kategori = kategori::all();

        return view('file_main/edit_detailkategori', compact('detail_kategori','kategori'));
    }

    public function update(Request $request)
    {
        $this->validate($request,[
           //'id_detail' => 'required',
            'id_kategori' =>'required',
            'detail'=>'required',
            'status_detail'=>'required'
        ]);

       $detail_kategori = detail_kategori::find($request->id_detail);
            $detail_kategori->id_kategori = $request->id_kategori;
            $detail_kategori->detail = $request->detail;
            $detail_kategori->status_detail = $request->status_detail;
            
            $detail_kategori->save();
        return redirect('/detailkategori')->with('info','Data berhasil diubah');
    }
    public function hapus($id){
        $detail_kategori = detail_kategori::find($id);
        $detail_kategori->status_detail = 1;
        $detail_kategori->save();
        return redirect('/detailkategori')->with('danger','Data berhasil dihapus');
    }


}
