<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\helpdesk;
use \App\Models\kategori;
use \App\Models\user;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SuksesantrianController extends Controller
{
    public function index(Request $request){
        if ($request->has('cari')){ $helpdesk = helpdesk::where('nip','like','%'.$request->cari."%")->get ();}
        else{
        	
            $helpdesk = helpdesk::all();
        }
        
        $kategori = kategori::all();
        $user = user::all();
        return view('/file_main/suksesantrian', compact('kategori','user','helpdesk'));
    }
    public function edit($id)
    {
        $helpdesk = helpdesk::find($id);
        return view('/helpdesk/edit',['helpdesk' => $helpdesk]);
    }

    public function update(Request $request,$id)
    {
        $this->validate($request,[
            'rating' => 'required'
        ]);
        $helpdesk = helpdesk::find($id);
        $helpdesk->rating = $request->rating;
        $helpdesk -> update ($request->all());
        $helpdesk->save();
        return redirect("/antriansolved/tampil/$id");
    }
   
}
