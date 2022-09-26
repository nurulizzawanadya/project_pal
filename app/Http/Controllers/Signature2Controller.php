<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\admin;
// use \App\Models\user;
// use \App\Models\detail_kategori;
// use \App\Models\divisi;
// use \App\Models\departmen;

class Signature2Controller extends Controller
{
     public function index($id)
    {
    	$admin = admin::find($id);
     //    $user = user::all();
     //    $detail_kategori = detail_kategori::all();
     //    $divisi = divisi::all();
     //    $departmen = departmen::all();

        // return view('file_main/ttd', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
        return view('file_main/ttd2', compact('admin'));
    	
    }

    public function upload(Request $request)
    {
	    $folderPath = public_path('upload/');
	  
	    $image_parts = explode(";base64,", $request->signed);
	        
	    $image_type_aux = explode("image/", $image_parts[0]);
	      
	    $image_type = $image_type_aux[1];
	      
	    $image_base64 = base64_decode($image_parts[1]);
	    
        $signature = uniqid() . '.'.$image_type;
	    
        $file = $folderPath . $signature;
	    file_put_contents($file, $image_base64);
	    return back()->with('success', $signature);

	    // $this->validate($request,[
     //        //'id_helpdesk' => 'required',
     //        'tgl_pengajuan'=>'required',
     //        'tgl_selesai'=>'required',
     //        'nip' => 'required',
     //        //'nama' => 'required',
     //        'id_divisi' => 'required',
     //        'id_departmen' => 'required',
     //        'telp_ext' => 'required',
     //        'id_detail' => 'required',
     //        'ket_masalah' => 'required',
     //        'trouble'=>'required',
     //        'solved'=>'required',
     //        //'foto_awal'=>'mimes:jpeg,png,jpg,gif,svg',
     //        'foto_awal'=>'required',
     //        'foto_akhir'=>'mimes:jpeg,png,jpg,gif,svg',
     //        //'foto_akhir'=>'required',
     //        //'ttd'=>'required',
     //        'ttd'=>'mimes:jpeg,png,jpg,gif,svg',
     //        'officer'=>'required',
     //        'status'=>'required',
     //        'rating'=>'required'
     //    ]);

     //   $admin = admin::find($request->id_helpdesk);
     //        $admin->tgl_pengajuan = $request->tgl_pengajuan;
     //        $admin->tgl_selesai = $request->tgl_selesai;
     //        $admin->nip = $request->nip;
     //        $admin->id_divisi = $request->id_divisi;
     //        $admin->id_departmen = $request->id_departmen;
     //        $admin->telp_ext = $request->telp_ext;
     //        $admin->id_detail = $request->id_detail;
     //        $admin->ket_masalah = $request->ket_masalah;
     //        $admin->trouble = $request->trouble;
     //        $admin->solved = $request->solved;
     //        $admin->foto_awal = $request->foto_awal;

     //    $nama_file = $request->foto_akhir->getClientOriginalName() . '-' . 
     //    time() . '-' . $request->foto_akhir->extension();
     //    $request->foto_akhir->move(public_path('data_file'), $nama_file);
     //        $admin->foto_akhir = $nama_file;

     //        //$admin->foto_akhir = $request->foto_akhir;
     //        //$admin->ttd = $request->ttd;
     //    $file_ttd = $request->ttd->getClientOriginalName() . '-' . 
     //    time() . '-' . $request->ttd->extension();
     //    $request->ttd->move(public_path('data_file'), $file_ttd);
     //        $admin->ttd = $file_ttd;

     //        $admin->officer = $request->officer;
     //        $admin->status = $request->status;
     //        $admin->rating = $request->rating;
     //        $admin->save();
     //    return redirect('/ttd');
    }

    public function submit($id)
    {
        $admin = admin::find($id);
     //    $user = user::all();
     //    $detail_kategori = detail_kategori::all();
     //    $divisi = divisi::all();
     //    $departmen = departmen::all();

        // return view('file_main/ttd', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
        return view('file_main/ttd2', compact('admin'));
        
    }

    public function simpan(Request $request)
    {
        dd($request);
        $this->validate($request,[
            //'id_helpdesk' => 'required',
            'tgl_pengajuan'=>'required',
            'tgl_selesai'=>'required',
            'nip' => 'required',
            //'nama' => 'required',
            'id_divisi' => 'required',
            'id_departmen' => 'required',
            'telp_ext' => 'required',
            'id_detail' => 'required',
            'ket_masalah' => 'required',
            'trouble'=>'required',
            'solved'=>'required',
            //'foto_awal'=>'mimes:jpeg,png,jpg,gif,svg',
            'foto_awal'=>'required',
            //'foto_akhir'=>'mimes:jpeg,png,jpg,gif,svg',
            'foto_akhir'=>'required',
            'ttd'=>'required',
            //'ttd'=>'mimes:jpeg,png,jpg,gif,svg',
            'officer'=>'required',
            'status'=>'required',
            'rating'=>'required'
        ]);

       $admin = admin::find($request->id_helpdesk);
            $admin->tgl_pengajuan = $request->tgl_pengajuan;
            $admin->tgl_selesai = $request->tgl_selesai;
            $admin->nip = $request->nip;
            $admin->id_divisi = $request->id_divisi;
            $admin->id_departmen = $request->id_departmen;
            $admin->telp_ext = $request->telp_ext;
            $admin->id_detail = $request->id_detail;
            $admin->ket_masalah = $request->ket_masalah;
            $admin->trouble = $request->trouble;
            $admin->solved = $request->solved;
            $admin->foto_awal = $request->foto_awal;

        // $nama_file = $request->foto_akhir->getClientOriginalName() . '-' . 
        // time() . '-' . $request->foto_akhir->extension();
        // $request->foto_akhir->move(public_path('data_file'), $nama_file);
        //     $admin->foto_akhir = $nama_file;

            //$admin->foto_akhir = $request->foto_akhir;
            $admin->ttd = $request->ttd;
        // $file_ttd = $request->ttd->getClientOriginalName() . '-' . 
        // time() . '-' . $request->ttd->extension();
        // $request->ttd->move(public_path('data_file'), $file_ttd);
        //     $admin->ttd = $file_ttd;

            $admin->officer = $request->officer;
            $admin->status = $request->status;
            $admin->rating = $request->rating;
            $admin->save();
        return back()->with('success', 'Data TTD berhasil di upload');
    }
}
