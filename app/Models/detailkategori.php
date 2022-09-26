<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;


class detailkategori extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='detailkategori';
    protected $primaryKey = 'id_detail';  
    protected $fillable = ['id_detail','id_kategori', 'detail'];
    public $timestamps = false;
    protected $dates = ['deleted_at'];

     public function helpdesk(){
        return $this->hasMany(helpdesk::class, 'id_detail');
    }

    public function kategori(){
        return $this->belongsTo(kategori::class, 'id_kategori');
    }

    public function spesialis(){
        return $this->hasMany(spesialis::class, 'id_detail');
}
}
