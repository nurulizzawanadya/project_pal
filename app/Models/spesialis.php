<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class spesialis extends Model
{
    use SoftDeletes;
    protected $table ='spesialis';
    protected $primaryKey = 'id_spesialis';  
    protected $fillable = ['id_spesialis','id_officer','id_detail'];
    public $timestamps = false;

      public function officer(){
        return $this->belongsTo(Officer::class, 'id_officer');
    }
      public function Detail_kategori(){
        return $this->belongsTo(Detail_kategori::class, 'id_detail');
    }
}
