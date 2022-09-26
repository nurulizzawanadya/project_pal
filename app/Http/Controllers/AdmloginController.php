<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\officer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class AdmloginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $officer = officer::all();
        return view('file_main/login', compact('officer'));
    }
	public function login(Request $request)
    {
		$username = $request->username;
		$password = $request->password;
		
		$officer = DB::table('officer')
        ->join('spesialis', 'spesialis.id_officer', '=', 'officer.id_officer')
        ->join('detailkategori', 'detailkategori.id_detail', '=', 'spesialis.id_detail')
        ->join('kategori', 'kategori.id_kategori', '=', 'detailkategori.id_kategori')
        // ->select('username', 'password', 'kategori')
		->where('username',$username)->where('password', $password)->first();
		//  dd($officer);
			// dd($password);
            if($username=="batagor" && $password=="siomay"){
                Session::put('SuperAdmin', TRUE);
                return redirect('/halamanadmin');
            }
            elseif($officer){
                if($officer->password == $password){
                    Session::put('kategori', $officer->kategori);
                    Session::put('officer', $officer->id_officer);
                    Session::put('nama_officer', $officer->nama_officer);
                    // dd($officer->kategori);
                    Session::put('nip', $officer->nip);
                    Session::put('/login',TRUE);
                    return redirect('/helpdesk');
                }
                else{
                    return redirect('/loginadmin')->with('danger','Username atau Password salah');
                }
                }else{
                    return redirect('/loginadmin')->with('danger','Username atau Password salah');
                }
            }
	public function logout()
    {
		if (!Session::get('/login')){
			return redirect('/loginadmin');
		}else{
			Session::flush();
			return redirect('/loginadmin');
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
