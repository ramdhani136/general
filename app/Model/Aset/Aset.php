<?php

namespace App\Model\Aset;

use Illuminate\Database\Eloquent\Model;
use App\Model\Aset\Dataasset;
use App\Model\divisi\Divisi;
use App\Model\Karyawan\Karyawan;
use App\Model\Lokasi\Lokasi;

class Aset extends Model
{
    protected $table="assets";
    protected $guarded=[];

    public function dataasset(){
        return $this->belongsTo(Dataasset::class,'id_asset','id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class,'id_divisi','id');
    }

    public function karyawan(){
        return $this->belongsTo(karyawan::class,'id_karyawan','id');
    }

    public function lokasi(){
        return $this->belongsTo(lokasi::class,'id_lokasi','id');
    }
}
