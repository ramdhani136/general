<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AssetResource extends JsonResource
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
            'nama_asset'=>$this->dataasset->nama,
            'satuan'=>$this->dataasset->satuan,
            'divisi'=>$this->divisi->nama,
            'lokasi'=>$this->lokasi->nama,
            'ket_lokasi'=>$this->lokasi->keterangan,
            'nama_karyawan'=>$this->karyawan->nama,
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
