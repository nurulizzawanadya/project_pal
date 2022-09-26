<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\adminhelpdesk;
use \App\Models\user;
use \App\detail_kategori;
use \App\Models\divisi;
use \App\Models\departmen;
use Illuminate\Support\Facades\Storage;

class AdmdetailController extends Controller
{
    public function index()
    {
    	$admin = adminhelpdesk::all();
        $user = user::all();
        $divisi = divisi::all();
        $departmen = departmen::all();
        $detail_kategori = detail_kategori::all();

        return view('file_main/detail', compact('adminhelpdesk', 'user', 'divisi', 'departmen','detail_kategori'));
        // return view('file_main/admin', compact('admin', 'user2', 'detail_kategori', 'divisi', 'department'));
    }
}
