<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class Dokter extends Model
{
    use SoftDeletes;
    protected $table ='helpdesk';
    protected $primaryKey = 'id_helpdesk';  
    protected $fillable = ['id_helpdesk','tgl_pengajuan','tgl_selesai','nip','id_detail','ket_masalah','trouble','solved','foto_awal','foto_akhir','ttd','officer','status'];
    public $timestamps = false;

     public function detail(){
        return $this->belongsTo(Detail::class, 'id_detail');
    }
}
