<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AsetResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return 
        [
            'id'=>$this->id,
            'kode'=>$this->kode,
            'asset'=>$this->dataasset->nama,
            'satuan'=>$this->dataasset->satuan,
            'keterangan'=>$this->dataasset->keterangan,
            'ket_lokasi'=>$this->lokasi->keterangan,
            'divisi'=>$this->divisi->nama,
            'lokasi'=>$this->lokasi->nama,
            'karyawan'=>$this->karyawan->nama,
            'img'=>$this->img,
            'merk'=>$this->merk,
            'tipe'=>$this->tipe,
            'sn'=>$this->sn,
            'keterangan'=>$this->keterangan,
            'kondisi'=>$this->kondisi,
            'status'=>$this->status,


        ];
    }
}
