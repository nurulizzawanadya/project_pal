<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\manajemenofficer;

class HapusofficerController extends Controller
{
    public function index($id){
    	$manajemenofficer = manajemenofficer::find($id);
    	$manajemenofficer->officer_status=2;
    	$manajemenofficer->save();

    	return redirect('/halamanmanajemenofficer')->with('Danger','Data berhasil dihapus')
    }
}
