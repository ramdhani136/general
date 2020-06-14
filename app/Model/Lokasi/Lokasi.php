<?php

namespace App\Model\Lokasi;

use Illuminate\Database\Eloquent\Model;
use App\Model\Aset\Assets;

class Lokasi extends Model
{
    protected $table="lokasi";
    protected $guarded=[];
    
    public function assets(){
        return $this->hasMany(assets::class,'id_lokasi','id');
    }
}
