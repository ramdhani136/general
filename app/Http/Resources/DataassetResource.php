<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataassetResource extends JsonResource
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
            'nama'=>$this->nama,
            'satuan'=>$this->satuan,
            'keterangan'=>$this->keterangan,
            'status'=>$this->status,
        ];
    }
}
