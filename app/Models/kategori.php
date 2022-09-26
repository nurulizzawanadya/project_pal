<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class kategori extends Model
{
    use SoftDeletes;
    protected $table ='kategori';
    protected $primaryKey = 'id_kategori';  
    protected $fillable = ['id_kategori','kategori','kategori_status'];
    public $timestamps = false;

     public function detailkategori(){
        return $this->hasMany(detailkategori::class, 'id_kategori');
    }
}
