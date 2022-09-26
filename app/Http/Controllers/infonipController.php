<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\helpdesk;
use \App\Models\detailkategori;
use \App\Models\user;
use \App\Models\officer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class infonipController extends Controller
{
    public function index(Request $request){
        $a=$request->cari;
        $helpdesk=helpdesk::where('nip','LIKE','%'.$a.'%')
        ->get();
        $z=helpdesk::where('nip','LIKE','%'.$a.'%')
        ->get();
        $y=0;
        foreach($z as $z){
            $y++;
        }
        if ($y==0) {
            echo "<script> alert('Data yang anda masukkan tidak ada')</script>";
            header("refresh:0; /infonip");
        }else{
        return view('/file_main/infonip',['helpdesk'=>$helpdesk,'data'=>'helpdesk','a'=>$a]);
    }
        // $coba=DB::table("helpdesk")->get();
        // dd($coba);
     }

    public function search (Request $request) {
        $a=$request->cari;
        $helpdesk=helpdesk::where('nip','LIKE','%'.$a.'%')
        ->get();
        return view('/file_main/infonip',['helpdesk'=>$helpdesk,'data'=>'helpdesk','a'=>$a]);
     }

    

       public function tampil($id){
        $user = user::all();
        $detailkategori = detailkategori::all();
            $helpdesk = helpdesk::where ('id_helpdesk','like',['helpdesk'=>$id])
        ->get();
        $c = helpdesk::where ('id_helpdesk','like',['helpdesk'=>$id])->join('detailkategori','helpdesk.id_detail','=','detailkategori.id_detail')
        ->get();
        foreach ($c as $c) {
           $status=$c->status;
           $id_kategori=$c->id_kategori;
        }

        $abc=helpdesk::select('id_helpdesk')->where('status',$status)->where('id_kategori',$id_kategori)->join('detailkategori','helpdesk.id_detail','=','detailkategori.id_detail')
       ->orderBy('helpdesk.updated_at')->orderBy('helpdesk.tgl_pengajuan')
        ->get();
        $no_a=0;
        foreach($abc as $a){
            if ($a->id_helpdesk != $id) {
                $no_a++;
            }else{
                $no_a++;
                break;
            }

        }
         return view('/file_main/antriansolved',['helpdesk'=>$helpdesk,'user'=>$user,'detailkategori'=>$detailkategori,'id'=>$id,'no_a'=>$no_a]); 
        }
    
}
