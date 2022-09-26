<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AdmloginController;
use \App\Http\Controllers\AdmpageController;
use \App\Http\Controllers\AdmdetailController;
use \App\Http\Controllers\ManajemenuserController;
use \App\Http\Controllers\ManajemenofficerController;
use \App\Http\Controllers\SignatureController;
use \App\Http\Controllers\Signature2Controller;
use \App\Http\Controllers\KategoriController;
use \App\Http\Controllers\DetailController;
use \App\Http\Controllers\SpesialisController;
use \App\Http\Controllers\HelpdeskController;
use \App\Http\Controllers\Helpdesk_2Controller;
use \App\Http\Controllers\HapusofficerController;

//user
use App\Http\Controllers\infonipController;
use App\Http\Controllers\infotroubleController;
use App\Http\Controllers\antriansolvedController;
use App\Http\Controllers\SuksesantrianController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AjaxController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/start', function () {
    return view('file_main/form');
});
Route::get('/pilihantrian', function () {
    return view('file_main/pilihantrian');
});
Route::get('/suksesantrian', function () {
    return view('file_main/suksesantrian');
});
Route::get('/antriannip', function () {
    return view('file_main/antriannip');
});
Route::get('/antriannip2', function () {
    return view('file_main/antriannip2');
});

Route::get('/antriansolved', function () {
    return view('file_main/antriansolved');
});
Route::get('/search', function () {
    return view('file_main/search');
});

Route::get('/antrianinfo', function () {
    return view('file_main/antrianinfo');
});

Route::get('/formnip', function () {
    return view('file_main/formnip');
});

Route::get('/infonip', function () {
    return view('file_main/infonip');
});

Route::get('/formtrouble', function () {
    return view('file_main/formtrouble');
});

Route::get('/infotrouble', function () {
    return view('file_main/infotrouble');
});

//login-logout
Route::get('/loginadmin', [AdmloginController::class,'index']);
Route::post('/login', [AdmloginController::class,'login']);
Route::get('/logout', [AdmloginController::class,'index']);

//home admin
Route::get('/adminHome', [AdmloginController::class,'index'])->name('adminHome');

//Halaman Admin
Route::get('/halamanadmin', [AdmpageController::class,'index']);
Route::resource('admin', AdmpageController::class);
//detail
Route::get('/halamanadmin/detail/{id}', [AdmpageController::class, 'detail']);
Route::get('/halamanadmin/edit/{id}', [AdmpageController::class, 'edit']);
Route::post('/halamanadmin/update', [AdmpageController::class, 'update']);
Route::get('/halamanadmin/hapus/{id}', [AdmpageController::class, 'hapus']);

//helpdesk
Route::get('/helpdesk/detailhelpdesk/{id}', [HelpdeskController::class, 'detail2']);
Route::get('/helpdesk', [HelpdeskController::class,'index']);
Route::get('/helpdesk/edit/{id}', [HelpdeskController::class,'edit_helpdesk']);
Route::post('/helpdesk/update', [HelpdeskController::class,'update_helpdesk']);
Route::get('/helpdesk/hapus2/{id}', [HelpdeskController::class, 'hapus2']);

//update status helpdesk
Route::get('/helpdesk/editstatus/{id}', [HelpdeskController::class, 'editstatus']);
Route::post('/helpdesk/updates', [HelpdeskController::class,'updatestatus']);

//helpdesk2
// Route::get('/helpdesk/detailhelpdesk/{id}', [Helpdesk_2Controller::class, 'detail2']);
// Route::get('/helpdesk', [Helpdesk_2Controller::class,'index']);
// Route::get('/helpdesk/edit/{id}', [Helpdesk_2Controller::class,'edit_helpdesk']);
// Route::post('/helpdesk/update', [Helpdesk_2Controller::class,'update_helpdesk']);
// Route::get('/helpdesk/hapus2/{id}', [Helpdesk_2Controller::class, 'hapus2']);

// //update status helpdesk
// Route::get('/helpdesk/editstatus/{id}', [HelpdeskController::class, 'editstatus']);
// Route::post('/helpdesk/updates', [HelpdeskController::class,'updatestatus']);

//manajemenuser
Route::get('/halamanmanajemenuser', [ManajemenuserController::class,'index']);
//edit
Route::get('halamanmanajemenuser/editmanajemenuser/{id}', [ManajemenuserController::class,'edit']);
Route::post('/updatemanajemenuser', [ManajemenuserController::class,'update']);
//tambah
Route::get('halamanmanajemenuser/tambahmanajemenuser', [ManajemenuserController::class,'tambah']);
Route::get('/simpanmanajemenuser', [ManajemenuserController::class,'simpan']);
Route::get('halamanmanajemenuser/hapusmanajemenuser/{id}', [ManajemenuserController::class,'hapus']);
//user
// Route::post('/search_user', [ManajemenuserController::class,'search']);

//manajemenofficer
Route::get('/halamanmanajemenofficer', [ManajemenofficerController::class,'index']);
//edit
Route::get('halamanmanajemenofficer/editmanajemenofficer/{id}', [ManajemenofficerController::class,'edit']);
Route::post('/updatemanajemenofficer', [ManajemenofficerController::class,'update']);
//tambah
Route::get('halamanmanajemenofficer/tambahmanajemenofficer', [ManajemenofficerController::class,'tambah']);
Route::get('/simpanmanajemenofficer', [ManajemenofficerController::class,'simpan']);

Route::get('/halamanmanajemenofficer/hapusmanajemenofficer/{id}', [ManajemenofficerController::class,'hapus']);

Route::get('/hapusmanajemenofficer/{id}', [HapusofficerController::class, 'index']);

//signature
// Route::get('/ttd/{id}', [SignatureController::class,'index']);
// // Route::get('/ttd','SignatureController@index');
// Route::post('/uploadttd', [SignatureController::class, 'upload'])->name('signature');
// Route::post('/uploadttd','SignatureController@upload')->name('signature');

//kategori
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/tambah', [KategoriController::class, 'tambah']);
Route::get('/kategori/simpan', [KategoriController::class, 'simpan']);
Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::post('/kategori/update', [KategoriController::class, 'update']);
Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus']);

//detail kategori
Route::get('/detailkategori', [DetailController::class, 'index']);
Route::get('/detailkategori/tambah', [DetailController::class, 'tambah']);
Route::get('/detailkategori/simpan', [DetailController::class, 'simpan']);
Route::get('/detailkategori/edit/{id}', [DetailController::class, 'edit']);
Route::post('/detailkategori/update', [DetailController::class, 'update']);
Route::get('/detailkategori/hapus/{id}', [DetailController::class, 'hapus']);

//detail kategori
Route::get('/spesialis', [SpesialisController::class, 'index']);
Route::get('/spesialis/tambah', [SpesialisController::class, 'tambah']);
Route::get('/spesialis/simpan', [SpesialisController::class, 'simpan']);
Route::get('/spesialis/edit/{id}', [SpesialisController::class, 'edit']);
Route::post('/spesialis/update', [SpesialisController::class, 'update']);
Route::get('/spesialis/hapus/{id}', [SpesialisController::class, 'hapus']);

//
Route::post('/halamanadmin/records', [AdmpageController::class, 'filter'])->name('halamanadmin/records');

//filter tanggal
// Route::get('/halamanadmin/{dateStart}/{dateEnd}', [AdmpageController::class, 'filter']);

//signature2
Route::get('/ttd2/{id}', [Signature2Controller::class,'index']);
Route::get('/ttd5/{id}', [Signature2Controller::class,'submit']);
// Route::get('/ttd','SignatureController@index');
//Route::POST('/uploadttd1', [SignatureController::class, 'upload'])->name('signature');
Route::POST('/uploadttd3', [Signature2Controller::class, 'upload'])->name('signature');
Route::POST('/uploadttd4', [Signature2Controller::class, 'simpan']);

//user
Route::get('/form2', function () {
    return view('file_main/form');
});
Route::get('/antrian', function () {
    return view('file_main/antrian');
});
Route::get('/pilihantrian', function () {
    return view('file_main/pilihantrian');
});
Route::get('/suksesantrian', function () {
    return view('file_main/suksesantrian');
});
Route::get('/antriannip', function () {
    return view('file_main/antriannip');
});
Route::get('/antriannip2', function () {
    return view('file_main/antriannip2');
});

Route::get('/antriansolved', function () {
    return view('file_main/antriansolved');
});
// Route::get('/search', function () {
//     return view('file_main/search');
// });

Route::get('/antrianinfo', function () {
    return view('file_main/antrianinfo');
});

Route::get('/formnip', function () {
    return view('file_main/formnip');
});

// Route::get('/infonip', function () {
//     return view('file_main/infonip');
// });

Route::get('/formtrouble', function () {
    return view('file_main/formtrouble');
});

Route::get('/infotrouble', function () {
    return view('file_main/infotrouble');
});

Route::get('infonip', [infonipController::class, 'index']);
Route::get('infotrouble', [infotroubleController::class, 'index']);
Route::get('antriansolved', [antriansolvedController::class, 'index']);
Route::get('suksesantrian', [SuksesantrianController::class, 'index']);
Route::post('/search-nip',[infonipController::class,'search']);
Route::post('/search-tiket',[infotroubleController::class,'search']);
Route::get('/infonip/tampil/{id}', [infonipController::class, 'tampil']);
Route::get('/antriansolved/tampil/{id}', [antriansolvedController::class, 'tampil']);
Route::get('/Suksesantrian/edit/{id}', [SuksesantrianController::class, 'edit']);
Route::post('/Suksesantrian/update/{id}',[SuksesantrianController::class, 'update']);

Route::get('form', [FormController::class, 'index']);
Route::POST('form/simpan', [FormController::class, 'simpan']);
//Route::get('form/ajax/{id}', [FormController::class, 'ajax']);
Route::get('/ajax/form/{id}', [AjaxController::class, 'form']);
Route::POST('ajax/simpan', [AjaxController::class, 'simpan']);