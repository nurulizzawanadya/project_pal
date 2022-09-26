<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;;

class officer extends Model
{
    use SoftDeletes;
    protected $table ='officer';
    protected $primaryKey = 'id_officer';  
    protected $fillable = ['id_officer','nip','nama_officer','username','password','email','officer_status'];
    public $timestamps = false;

   
}

