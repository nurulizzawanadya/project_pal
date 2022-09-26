<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manajemenuser extends Model
{
    use HasFactory;
    protected $table ='user';
    protected $primaryKey = 'nip';  
    protected $fillable = ['nip','nama','id_divisi','id_departmen','telp','user_status'];
    //public $timestamps = false;

    public function departmen(){
        return $this->belongsTo(departmen::class, 'id_department');
    }

    public function divisi(){
        return $this->belongsTo(divisi::class, 'id_divisi');
    }
}
