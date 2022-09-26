<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class form extends Model
{
	public function departmen()
	{
		return $this->belongsTo(departmen::class, 'id_departmen');
	}
    public function divisi()
    {
        return $this->belongsTo(divisi::class, 'id_divisi');
    }
	public function detail_kategori()
    {
        return $this->belongsTo(detail_kategori::class, 'id_detail');
    }
    public function userku()
    {
        return $this->belongsTo(userku::class, 'nip');
    }
    protected $table = "helpdesk";
    protected $primaryKey ="id_helpdesk";
    protected $fillable = ['tgl_pengajuan','tgl_selesai','nip','id_divisi','id_departmen','telp_ext','id_detail', 'ket_masalah','trouble','solved','foto_awal','foto_akhir','ttd','officer','status','rating'];
    //public $timestamps = false;

}

