<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\form;
use \App\Models\departmen;
use \App\Models\divisi;
use \App\Models\userku;
use \App\Models\helpdesk;
use DB;

class FormController extends Controller
{
    public function index(){
    	$form = form::all();
        $departmen = departmen::all();
        $divisi = divisi::all();
        $userku = userku::all();
    	return view('/file_main/form',['form' => $form], compact('departmen','divisi','userku'));
    }
    public function ajax($id){
        $form = form::all();
        $departmen = departmen::all();
        $divisi = divisi::all();
        $userku = userku::find($id);
        return view('/file_main/form',['form' => $form], compact('departmen','divisi','userku'));
    }
    public function simpan(Request $request){
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
            'foto_awal'=>'mimes:jpeg,png,jpg,gif,svg',
            //'foto_awal'=>'required',
            'foto_akhir'=>'required',
            'ttd'=>'required',
            'officer'=>'required',
            'status'=>'required',
            'rating'=>'required'
        ]);
        //dd($request);
        // $foto_awal = $request->file('foto_awal');
        // $nama_file = time()."_".$foto_awal->getClientOriginalName();
        // $tujuan_upload = public_path('data_file');
        // $foto_awal->move($tujuan_upload,$nama_file);

        // $foto = $request->file('foto');
        // $path = '/Foto_Barang/'.time().'-'.$foto->getClientOriginalName();
        // $foto->move(public_path('Foto_Barang'), $path);

        // $foto_awal = $request->file('foto_awal');
        // $nama_file = time().’.’.$request->$foto_awal->extension();
        // $request->foto_awal->move(public_path('data_file'), $nama_file);

        $nama_file = $request->foto_awal->getClientOriginalName() . '-' . 
        time() . '-' . $request->foto_awal->extension();
        $request->foto_awal->move(public_path('data_file'), $nama_file);

        form::create([
            'id_helpdesk' => null,
            'tgl_pengajuan' => $request->tgl_pengajuan,
            'tgl_selesai' => $request->tgl_selesai,
            'nip' => $request->nip,
            //'nama' => $request->nama,
            'id_departmen' => $request->id_departmen,
            'id_divisi' => $request->id_divisi,
            'telp_ext' => $request->telp_ext,
            'id_detail' => $request->id_detail,
            'ket_masalah' => $request->ket_masalah,
            'trouble' => $request->trouble,
            'solved' => $request->solved,
            'foto_awal' => $nama_file,
            //'foto_awal' => $request->foto_awal,
            'foto_akhir' => $request->foto_akhir,
            'ttd' => $request->ttd,
            'officer' => $request->officer,
            'status' => $request->status,
            'rating' => $request->rating
        ]);
        $final = $request->id_helpdesk;
        $helpdesk=helpdesk::all();
        foreach ($helpdesk as $hh){
            $final=$hh->id_helpdesk;

        }
        // return redirect('/form')->with('success','Form berhasil ditambahkan, no antrian : $final');
        return redirect("/infonip/tampil/$final");
    }

   
}


