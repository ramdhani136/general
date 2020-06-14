<?php

namespace App\Model\Divisi;

use Illuminate\Database\Eloquent\Model;
use App\Model\Karyawan\Karyawan;
use App\Model\Aset\Assets;

class Divisi extends Model
{
    protected $table="divisi";
    protected $guarded=[];

    public function karyawan(){
        return $this->hasMany(Karyawan::class,'id_divisi','id');
    }

    public function assets(){
        return $this->hasMany(assets::class,'id_divisi','id');
    }
}
