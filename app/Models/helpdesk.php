<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class helpdesk extends Model
{
    use SoftDeletes;
    protected $table ='helpdesk';
    protected $primaryKey = 'id_helpdesk';  
    protected $fillable = ['id_helpdesk','tgl_pengajuan','tgl_selesai','nip','id_divisi','id_departmen','telp_ext','id_detail','ket_masalah','trouble','solved','foto_awal','foto_akhir','ttd','id_officer','status','rating'];
    public $timestamps = false;
    

     public function detailkategori(){
        return $this->belongsTo(detailkategori::class, 'id_detail');
    }
    
     public function user(){
        return $this->belongsTo(user::class, 'nip');
    }

    public function departmen (){
        return $this->belongsTo(departmen::class,'id_departmen');
    }
    // public function officer (){
    //     return $this->belongsTo(officer::class,'id_officer');
    // }
    
}
