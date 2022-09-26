<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class manajemenofficer extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table ='officer';
    protected $primaryKey = 'id_officer';  
    protected $fillable = ['id_officer','nip','nama_officer','username','password','email','officer_status'];
    //public $timestamps = false;

    // public function user(){
    //     return $this->belongsTo(user::class, 'nip');
    // }
    // public function officer(){
    //     return $this->belongsTo(officer::class, 'id_officer');
    // }

}
