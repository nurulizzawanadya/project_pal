<?php

namespace App\Http\Controllers;

use \App\Models\admin;
use \App\Models\helpdesk;
use \App\Models\user;
use \App\Models\detail_kategori;
use \App\Models\divisi;
use \App\Models\departmen;
use \App\Models\officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;

class HelpdeskController extends Controller
{
    public function index()
    {
        //$admin = admin::Paginate(15)->sortBy('status');
        // $data = admin::where('status','!=',4)
        //         ->get();
        //$data = admin::get()->sortBy('status');
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        $data = DB::table('helpdesk')
        ->join('detailkategori', 'detailkategori.id_detail', '=', 'helpdesk.id_detail')
        ->join('spesialis', 'spesialis.id_detail', '=', 'detailkategori.id_detail')
        ->join('officer', 'officer.id_officer', '=', 'spesialis.id_officer')
        ->join('user', 'user.nip', '=', 'helpdesk.nip')
        ->join('kategori', 'kategori.id_kategori', '=', 'detailkategori.id_kategori')
        ->join('divisi', 'divisi.id_divisi', '=', 'helpdesk.id_divisi')
        ->where('officer.id_officer', Session::get('officer'))
        ->orderBy('status','asc')
        ->orderBy('tgl_pengajuan','desc')
        ->get();

        // dd($data);

        return view('file_main/helpdesk', compact('data', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }

    public function helpdesk()
    {
        // $officer = officer::all();
        $data = admin::orderBy('status','asc')
                ->orderBy('id_helpdesk','asc')
                ->where('status','!=',4)->paginate(15);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        // $data = DB::table('detailkategori')
        // ->join('helpdesk', 'helpdesk.id_detail', '=', 'detailkategori.id_detail')
        // ->join('spesialis', 'spesialis.id_detail', '=', 'detailkategori.id_detail')
        // ->join('kategori', 'kategori.id_kategori', '=', 'detailkategori.id_kategori')
        // ->join('officer', 'officer.id_officer', '=', 'spesialis.id_officer')
        // ->join('user', 'user.nip', '=', 'officer.nip')
        // ->join('divisi', 'divisi.id_divisi', '=', 'helpdesk.id_divisi')
        // ->where('kategori', Session::get('kategori'))
        // ->get();
        $data = DB::table('helpdesk')
        ->join('detailkategori', 'detailkategori.id_detail', '=', 'helpdesk.id_detail')
        ->join('spesialis', 'spesialis.id_detail', '=', 'detailkategori.id_detail')
        ->join('officer', 'officer.id_officer', '=', 'spesialis.id_officer')
        ->join('user', 'user.nip', '=', 'helpdesk.nip')
        ->join('kategori', 'kategori.id_kategori', '=', 'detailkategori.id_kategori')
        ->join('divisi', 'divisi.id_divisi', '=', 'helpdesk.id_divisi')
        ->where('officer.id_officer', Session::get('officer'))
        ->get();

        return view('file_main/helpdesk', compact('data', 'user', 'divisi', 'departmen','detail_kategori', 'data'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }

    // public function detail($id)
    // {
    //  $admin = admin::find($id);
    //     $user = user::all();
    //     $detail_kategori = detail_kategori::all();
    //     $divisi = divisi::all();
    //     $departmen = departmen::all();

    //     return view('file_main/detail_admin', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
    //     // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    // }

    public function detail2($id)
    {
        // $officer = officer::all();
        $data = admin::find($id);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/detailhelpdesk', compact('data', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }

    // public function edit($id)
    // {
    //     $admin = admin::find($id);
    //     $user = user::all();
    //     $detail_kategori = detail_kategori::all();
    //     $divisi = divisi::all();
    //     $departmen = departmen::all();

    //     return view('file_main/edit_admin', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
    //     // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    // }

    // public function update(Request $request){
    //     $this->validate($request,[
    //         //'id_helpdesk' => 'required',
    //         'tgl_pengajuan'=>'required',
    //         'tgl_selesai'=>'required',
    //         'nip' => 'required',
    //         //'nama' => 'required',
    //         'id_divisi' => 'required',
    //         'id_departmen' => 'required',
    //         'telp_ext' => 'required',
    //         'id_detail' => 'required',
    //         'ket_masalah' => 'required',
    //         'trouble'=>'required',
    //         'solved'=>'required',
    //         //'foto_awal'=>'mimes:jpeg,png,jpg,gif,svg',
    //         'foto_awal'=>'required',
    //         'foto_akhir'=>'mimes:jpeg,png,jpg,gif,svg',
    //         //'foto_akhir'=>'required',
    //         //'ttd'=>'required',
    //         'ttd'=>'mimes:jpeg,png,jpg,gif,svg',
    //         'officer'=>'required',
    //         'status'=>'required',
    //         'rating'=>'required'
    //     ]);

    //     $admin = admin::find($request->id_helpdesk);
    //     $admin->tgl_pengajuan = $request->tgl_pengajuan;
    //     $admin->tgl_selesai = $request->tgl_selesai;
    //     $admin->nip = $request->nip;
    //     $admin->id_divisi = $request->id_divisi;
    //     $admin->id_departmen = $request->id_departmen;
    //     $admin->telp_ext = $request->telp_ext;
    //     $admin->id_detail = $request->id_detail;
    //     $admin->ket_masalah = $request->ket_masalah;
    //     $admin->trouble = $request->trouble;
    //     $admin->solved = $request->solved;
    //     $admin->foto_awal = $request->foto_awal;

    //     $nama_file = $request->foto_akhir->getClientOriginalName() . '-' . 
    //     time() . '-' . $request->foto_akhir->extension();
    //     $request->foto_akhir->move(public_path('data_file'), $nama_file);
    //         $admin->foto_akhir = $nama_file;

    //         //$admin->foto_akhir = $request->foto_akhir;
    //         //$admin->ttd = $request->ttd;

    //     $admin->ttd = $request->ttd;
    //     $file_ttd = $request->ttd->getClientOriginalName() . '-' . 
    //     time() . '-' . $request->ttd->extension();
    //     $request->ttd->move(public_path('data_file'), $file_ttd);
    //         $admin->ttd = $file_ttd;

    //         $admin->officer = $request->officer;
    //         $admin->status = $request->status;
    //         $admin->rating = $request->rating;
    //         $admin->save();
    //     return redirect('/halamanadmin');
    //}

    public function edit_helpdesk($id)
    {
        $data = admin::find($id);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/edit_helpdesk', compact('data', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }
    public function update_helpdesk(Request $request){
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
            'foto_akhir'=>'mimes:jpeg,png,jpg,gif,svg',
            //'foto_akhir'=>'required',
            'ttd'=>'required',
            //'ttd'=>'mimes:jpeg,png,jpg,gif,svg',
            'officer'=>'required',
            'status'=>'required',
            'rating'=>'required'
        ]);

        $data = admin::find($request->id_helpdesk);
        $data->tgl_pengajuan = $request->tgl_pengajuan;
        $data->tgl_selesai = $request->tgl_selesai;
        $data->nip = $request->nip;
        $data->id_divisi = $request->id_divisi;
        $data->id_departmen = $request->id_departmen;
        $data->telp_ext = $request->telp_ext;
        $data->id_detail = $request->id_detail;
        $data->ket_masalah = $request->ket_masalah;
        $data->trouble = $request->trouble;
        $data->solved = $request->solved;
        $data->foto_awal = $request->foto_awal;

        $nama_file = $request->foto_akhir->getClientOriginalName() . '-' . 
        time() . '-' . $request->foto_akhir->extension();
        $request->foto_akhir->move(public_path('data_file'), $nama_file);
            $data->foto_akhir = $nama_file;

            //$admin->foto_akhir = $request->foto_akhir;
            //$admin->ttd = $request->ttd;

            $data->ttd = $request->ttd;
            $data->officer = $request->officer;
            $data->status = $request->status;
            $data->rating = $request->rating;
            $data->save();
        return redirect('/helpdesk')->with('success','Data berhasil diubah');
    }

    public function editstatus($id)
    {
        $data = admin::find($id);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/update_status', compact('data', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }
    public function updatestatus(Request $request){
        $this->validate($request,[
            //'id_helpdesk' => 'required',
            // 'tgl_pengajuan'=>'required',
            // 'tgl_selesai'=>'required',
            // 'nip' => 'required',
            //'nama' => 'required',
            // 'id_divisi' => 'required',
            // 'id_departmen' => 'required',
            // 'telp_ext' => 'required',
            // 'id_detail' => 'required',
            // 'ket_masalah' => 'required',
            // 'trouble'=>'required',
            // 'solved'=>'required',
            //'foto_awal'=>'mimes:jpeg,png,jpg,gif,svg',
            // 'foto_awal'=>'required',
            // 'foto_akhir'=>'mimes:jpeg,png,jpg,gif,svg',
            //'foto_akhir'=>'required',
            //'ttd'=>'required',
            // 'ttd'=>'mimes:jpeg,png,jpg,gif,svg',
            // 'officer'=>'required',
            'status'=>'required',
            //'rating'=>'required'
        ]);

       $data = admin::find($request->id_helpdesk);
        //     $admin->tgl_pengajuan = $request->tgl_pengajuan;
        //     $admin->tgl_selesai = $request->tgl_selesai;
        //     $admin->nip = $request->nip;
        //     $admin->id_divisi = $request->id_divisi;
        //     $admin->id_departmen = $request->id_departmen;
        //     $admin->telp_ext = $request->telp_ext;
        //     $admin->id_detail = $request->id_detail;
        //     $admin->ket_masalah = $request->ket_masalah;
        //     $admin->trouble = $request->trouble;
        //     $admin->solved = $request->solved;
        //     $admin->foto_awal = $request->foto_awal;

        // $nama_file = $request->foto_akhir->getClientOriginalName() . '-' . 
        // time() . '-' . $request->foto_akhir->extension();
        // $request->foto_akhir->move(public_path('data_file'), $nama_file);
        //     $admin->foto_akhir = $nama_file;

        //     //$admin->foto_akhir = $request->foto_akhir;
        //     //$admin->ttd = $request->ttd;

        //      $admin->ttd = $request->ttd;
        // $file_ttd = $request->ttd->getClientOriginalName() . '-' . 
        // time() . '-' . $request->ttd->extension();
        // $request->ttd->move(public_path('data_file'), $file_ttd);
        //     $admin->ttd = $file_ttd;

        //     $admin->officer = $request->officer;
            $data->status = $request->status;
            // $admin->rating = $request->rating;
            $data->save();
        return redirect('/helpdesk')->with('info','Data Status berhasil diubah');
    }

    public function hapus2($id){
        $data = admin::find($id);
        $admin->status = 4;
        $admin->save();
        return redirect('/helpdesk');
    }
}