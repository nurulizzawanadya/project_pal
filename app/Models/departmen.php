<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class departmen extends Model
{
    use SoftDeletes;
    protected $table ='departmen';
    protected $primaryKey = 'id_departmen';  
    protected $fillable = ['id_departmen','id_divisi', 'departmen'];
    public $timestamps = false;
    protected $data=['deleted_at'];

    public function divisi(){
         return $this->belongsTo(divisi::class, 'id_divisi');
    }
    public function helpdesk(){
        return $this->hasMany(helpdesk::class, 'id_departmen');
    }
    public function manajemenuser(){
        return $this->hasMany(departmen::class, 'id_departmen');
   }
}

