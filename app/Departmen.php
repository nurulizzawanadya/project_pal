<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class Dokter extends Model
{
    use SoftDeletes;
    protected $table ='departmen';
    protected $primaryKey = 'id_departmen';  
    protected $fillable = ['id_departmen','id_divisi', 'departmen'];
    public $timestamps = false;

    // public function divisi(){
    //     return $this->belongsTo(Divisi::class, 'id_divisi');
    // }

    // public function manajemenuser(){
    //     return $this->belongsTo(Departmen::class, 'id_department');
    // }
}

