<?php

namespace App\Model\Karyawan;


use Illuminate\Database\Eloquent\Model;
use App\Model\Divisi\Divisi;
use App\Model\Aset\Assets;

class Karyawan extends Model
{
    protected $table ="karyawan";
    protected $guarded=[];

    public function divisi(){
        return $this->belongsTo(Divisi::class,'id_divisi','id');
    }

    public function assets(){
        return $this->hasMany(assets::class,'id_karyawan','id');
    }
}
