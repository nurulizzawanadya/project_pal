<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\helpdesk;
use \App\Models\kategori;
use \App\Models\user;
use \App\Models\divisi;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class infotroubleController extends Controller
{
    public function index(Request $request){
            $id=$request->cari;
            $arrayb=explode('-',$id);
            $b=end($arrayb);
            if($b==null){
            $helpdesk = helpdesk::where ('id_helpdesk','LIKE','%'.$b.'%')
            ->get(); 
             return view('/file_main/infotrouble',['helpdesk'=>$helpdesk,'data'=>'helpdesk','b'=>$b]);
            }else{
                $helpdesk = helpdesk::where ('id_helpdesk','like',['helpdesk'=>$b])
            ->get();
            $z=helpdesk::where ('id_helpdesk','like',['helpdesk'=>$b])
            ->get();
            $y=0;
            foreach($z as $z){
                $y++;
            }
            if ($y==0) {
                echo "<script> alert('Data yang anda masukkan tidak ada')</script>";
                header("refresh:0; /infotrouble");
            }
            else{
                $c = helpdesk::where ('id_helpdesk','like',['helpdesk'=>$b])->join('detailkategori','helpdesk.id_detail','=','detailkategori.id_detail')
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
                if ($a->id_helpdesk != $b) {
                    $no_a++;
                }else{
                    $no_a++;
                    break;
                }
    
            }
             return view('/file_main/infotrouble',['helpdesk'=>$helpdesk,'data'=>'helpdesk','b'=>$b,'no_a'=>$no_a]); 
    
            }
            //dd($y);
            
            }
           
           
           
        }
    
         public function search (Request $request) {
            $b=$request->cari;
            $helpdesk=helpdesk::where('id_helpdesk','LIKE',['helpdesk=>$b'])
            ->get();
            return view('/file_main/infotrouble',['helpdesk'=>$helpdesk,'data'=>'helpdesk','b'=>$b]);
         }
    
}





