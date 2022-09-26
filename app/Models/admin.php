<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;


class admin extends Model
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
    public function user()
    {
        return $this->belongsTo(user::class, 'nip');
    }
    // public function officer()
    // {
    //     return $this->belongsTo(user::class, 'id_officer');
    // }
    use SoftDeletes;
    protected $table ='helpdesk';
    protected $primaryKey = 'id_helpdesk';  
    protected $fillable = [
            'id_helpdesk',
            'tgl_pengajuan',
            'tgl_selesai',
            'nip',
            'id_divisi',
            'id_departmen',
            'telp_ext',
            'id_detail',
            'ket_masalah',
            'trouble',
            'solved',
            'foto_awal',
            'foto_akhir',
            'ttd',
            'officer',
            'status',
            'rating'
    ];
    public $timestamps = false;

     
}