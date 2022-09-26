<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class divisi extends Model
{
    use SoftDeletes;
    protected $table ='divisi';
    protected $primaryKey = 'id_divisi';  
    protected $fillable = ['id_divisi','divisi'];
    public $timestamps = false;
    protected $data=['deleted_at'];

    public function departmen(){
        return $this->hasMany(departmen::class, 'id_divisi');
    }
    public function manajemenuser(){
        return $this->hasMany(divisi::class, 'id_divisi');
    }

 }
