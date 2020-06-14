<?php

namespace App\Model\Aset;

use Illuminate\Database\Eloquent\Model;
use App\Model\Aset\Assets;

class Dataasset extends Model
{
    protected $table="dataasset";
    protected $guarded=[];


    public function assets(){
        return $this->hasMany(assets::class,'id_asset','id');
    }
}
