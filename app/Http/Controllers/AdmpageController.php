<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use \App\Models\admin;
use \App\Models\user;
use \App\Models\detail_kategori;
use \App\Models\divisi;
use \App\Models\departmen;
use \App\Models\officer;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DB;
use Session;

class AdmpageController extends Controller
{
    public function index()
    {
    	//$admin = admin::Paginate(15)->sortBy('status');
        $admin = admin::orderBy('status','asc')
                ->orderBy('tgl_pengajuan','desc')
                ->where('status','!=',4)->get();
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/adminhelpdesk', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }

    // public function helpdesk()
    // {
    // 	// $officer = officer::all();
    //     $admin = admin::orderBy('status','asc')
    //             ->orderBy('id_helpdesk','asc')
    //             ->paginate(15);
    //     $user = user::all();
    //     $detail_kategori = detail_kategori::all();
    //     $divisi = divisi::all();
    //     $departmen = departmen::all();

        // $data = DB::table('detailkategori')
        // ->join('helpdesk', 'helpdesk.id_detail', '=', 'detailkategori.id_detail')
        // ->join('spesialis', 'spesialis.id_detail', '=', 'detailkategori.id_detail')
        // ->join('kategori', 'kategori.id_kategori', '=', 'detailkategori.id_kategori')
        // ->join('officer', 'officer.id_officer', '=', 'spesialis.id_officer')
        // ->join('user', 'user.nip', '=', 'officer.nip')
        // ->join('divisi', 'divisi.id_divisi', '=', 'helpdesk.id_divisi')
        // ->where('kategori', Session::get('kategori'))
        // ->get();
    //     $data = DB::table('helpdesk')
    //     ->join('detailkategori', 'detailkategori.id_detail', '=', 'helpdesk.id_detail')
    //     ->join('spesialis', 'spesialis.id_detail', '=', 'detailkategori.id_detail')
    //     ->join('officer', 'officer.id_officer', '=', 'spesialis.id_officer')
    //     ->join('user', 'user.nip', '=', 'helpdesk.nip')
    //     ->join('kategori', 'kategori.id_kategori', '=', 'detailkategori.id_kategori')
    //     ->join('divisi', 'divisi.id_divisi', '=', 'helpdesk.id_divisi')
    //     ->where('officer.id_officer', Session::get('officer'))
    //     ->get();

    //     return view('file_main/helpdesk', compact('data', 'user', 'divisi', 'departmen','detail_kategori', 'data'));
    //     // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    // }

    public function detail($id)
    {
    	$admin = admin::find($id);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/detail_admin', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }

    // public function detail2($id)
    // {
    // 	// $officer = officer::all();
    //     $admin = admin::find($id);
    //     $user = user::all();
    //     $detail_kategori = detail_kategori::all();
    //     $divisi = divisi::all();
    //     $departmen = departmen::all();

    //     return view('file_main/detailhelpdesk', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
    //     // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    // }

    public function edit($id)
    {
        $admin = admin::find($id);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/edit_admin', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }

    public function update(Request $request){
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
            //'ttd'=>'required',
            'ttd'=>'mimes:jpeg,png,jpg,gif,svg',
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

        $nama_file = $request->foto_akhir->getClientOriginalName() . '-' . 
        time() . '-' . $request->foto_akhir->extension();
        $request->foto_akhir->move(public_path('data_file'), $nama_file);
            $admin->foto_akhir = $nama_file;

            //$admin->foto_akhir = $request->foto_akhir;
            //$admin->ttd = $request->ttd;

        $admin->ttd = $request->ttd;
        $file_ttd = $request->ttd->getClientOriginalName() . '-' . 
        time() . '-' . $request->ttd->extension();
        $request->ttd->move(public_path('data_file'), $file_ttd);
            $admin->ttd = $file_ttd;

            $admin->officer = $request->officer;
            $admin->status = $request->status;
            $admin->rating = $request->rating;
            $admin->save();
        return redirect('/halamanadmin')->with('success','Data berhasil diubah');
    }

    // public function edit_helpdesk($id)
    // {
    //     $admin = admin::find($id);
    //     $user = user::all();
    //     $detail_kategori = detail_kategori::all();
    //     $divisi = divisi::all();
    //     $departmen = departmen::all();

    //     return view('file_main/edit_helpdesk', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
    //     // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    // }
    // public function update_helpdesk(Request $request){
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
    //     return redirect('/helpdesk');
    // }

    public function editstatus($id)
    {
        $admin = admin::find($id);
        $user = user::all();
        $detail_kategori = detail_kategori::all();
        $divisi = divisi::all();
        $departmen = departmen::all();

        return view('file_main/update_status', compact('admin', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }
    // public function updatestatus(Request $request){
    //     $this->validate($request,[
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
            // 'status'=>'required',
            //'rating'=>'required'
        //]);

       //$admin = admin::find($request->id_helpdesk);
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
            // $admin->status = $request->status;
            // $admin->rating = $request->rating;
    //         $admin->save();
    //     return redirect('/helpdesk');
    // }

    public function hapus($id){
        $admin = admin::find($id);
        $admin->status = 4;
        $admin->save();
        return redirect('/halamanadmin')->with('danger','Data berhasil dihapus');
    }
    // public function hapus2($id){
    //     $admin = admin::find($id);
    //     $admin->status = 4;
    //     $admin->save();
    //     return redirect('/helpdesk');
    // }
    
    // public function records(Request $request)
    // { dd($request);
    //     if ($request->ajax()) {

    //         if ($request->input('start_date') && $request->input('end_date')) {

    //             $start_date = Carbon::parse($request->input('start_date'));
    //             $end_date = Carbon::parse($request->input('end_date'));

    //             if ($end_date->greaterThan($start_date)) {
    //                 $admin = admin::whereBetween('created_at', [$start_date, $end_date])->get();
    //             } else {
    //                 $admin = admin::latest()->get();
    //             }
    //         } else {
    //             $admin = admin::latest()->get();
    //         }

    //         return response()->json([
    //             'admin' => $admin
    //         ]);
    //     } else {
    //         abort(403);
    //     }
    // }

    public function filter(Request $request)
    {
        $date = $request->start_date;
        $date_end = $request->end_date;

        $admin = admin::select('*')->whereBetween(DB::raw('DATE(tgl_pengajuan)'), [$date, $date_end])->get();

        // $admin = admin::whereBetween('created_at', [$start_date, $end_date])->get();

        return view('file_main/adminhelpdesk')->with(compact('admin'));
    }
}
