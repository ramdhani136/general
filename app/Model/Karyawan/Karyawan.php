<?php

namespace App\Model\Karyawan;


use Illuminate\Database\Eloquent\Model;
use App\Model\Divisi\Divisi;

class Karyawan extends Model
{
    protected $table ="karyawan";
    protected $guarded=[];

    public function divisi(){
        return $this->belongsTo(Divisi::class,'id_divisi','id');
    }
}
