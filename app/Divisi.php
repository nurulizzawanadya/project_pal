<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class Divisi extends Model
{
    use SoftDeletes;
    protected $table ='divisi';
    protected $primaryKey = 'id_divisi';  
    protected $fillable = ['id_divisi','divisi'];
    public $timestamps = false;

    // public function departmen(){
    //     return $this->belongsTo(Departmen::class, 'id_departmen');
    // }
}
