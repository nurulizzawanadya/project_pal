<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class detail_kategori extends Model
{
    use SoftDeletes;
    protected $table ='detailkategori';
    protected $primaryKey = 'id_detail';  
    protected $fillable = ['id_detail','id_kategori', 'detail'];
    public $timestamps = false;

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
    public function helpdesk(){
        return $this->hasMany(helpdesk::class, 'id_helpdesk');
    }
    public function spesialis(){
        return $this->hasMany(spesialis::class, 'id_detail');
}
}
