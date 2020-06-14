<?php

namespace App\Model\Aset;

use Illuminate\Database\Eloquent\Model;
use App\Model\Aset\Dataasset;
use App\Model\Divisi\Divisi;
use App\Model\Lokasi\Lokasi;
use App\Model\Karyawan\Karyawan;

class Assets extends Model
{
    protected $guarded=[];

    public function dataasset(){
        return $this->belongsTo(Dataasset::class,'id_asset','id');
    }

    public function divisi(){
        return $this->belongsTo(Divisi::class,'id_divisi','id');
    }

    public function lokasi(){
        return $this->belongsTo(Lokasi::class,'id_lokasi','id');
    }

    public function karyawan(){
        return $this->belongsTo(Karyawan::class,'id_karyawan','id');
    }
}
