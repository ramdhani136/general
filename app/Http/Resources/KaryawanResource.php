<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KaryawanResource extends JsonResource
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
        'nip'=>$this->nip,
        'nama'=>$this->nama, 
        'id_divisi'=>$this->divisi->nama,
        'status'=>$this->status,
        ];
    }
}
