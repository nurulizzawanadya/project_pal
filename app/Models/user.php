<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class user extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='user';
    protected $primaryKey = 'nip';  
    protected $fillable = ['nip','nama','id_divisi','id_departmen','telp','user_status'];
    public $timestamps = false;
    protected $data = ['deleted_at'];

    public function helpdesk(){
        return $this->hasMany(helpdesk::class, 'nip');
    }

    public function departmen(){
        return $this->belongsTo(departmen::class, 'id_departmen');
    }

    public function divisi(){
        return $this->belongsTo(divisi::class, 'id_divisi');
    }
}
