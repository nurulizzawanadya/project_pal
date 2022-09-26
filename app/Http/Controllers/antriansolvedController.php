<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\helpdesk;
use \App\Models\detailkategori;
use \App\Models\user;
use \App\Models\officer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class antriansolvedController extends Controller
{
   public function index (Request $id_helpdeks) {
      $a=$id_helpdeks->cari;
      $helpdesk=helpdesk::where('nip','LIKE','%'.$a.'%')
      ->get();
      return view('/file_main/antriansolved',['helpdesk'=>$helpdesk,'data'=>'helpdesk']);
   }

   public function tampil ($id) {
      $helpdesk=helpdesk::where('id_helpdesk','=',$id)
      ->get();
      $user = user::all();
      $detailkategori = detailkategori::all();
      return view('/file_main/suksesantrian', compact('helpdesk', 'user', 'detailkategori'));
   }
   public function simpan (Request $request) {
     
   }
     
}
