<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PilihantrianController extends Controller
{
    public function index(){
    	return view('file_main/pilihantrian');
    }
}
