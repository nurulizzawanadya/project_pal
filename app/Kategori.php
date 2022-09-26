<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class Dokter extends Model
{
    use SoftDeletes;
    protected $table ='kategori';
    protected $primaryKey = 'id_kategori';  
    protected $fillable = ['id_kategori','kategori','status'];
    public $timestamps = false;

    //  public function detail(){
    //     return $this->belongsTo(Detail::class, 'id_detail');
    // }
}
