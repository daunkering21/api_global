<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DepoWdResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'amount' => $this->amount,
            'keterangan' => $this->keterangan,
            'jenis' => $this->jenis,
            'groupbank' => $this->groupbank,
            'bank' => $this->bank,
            'namarek' => $this->namarek,
            'norek' => $this->norek,
            'mbank' => $this->mbank,
            'mnamarek' => $this->mnamarek,
            'mnorek' => $this->mnorek,
            'txnid' => $this->txnid,
            'balance' => $this->balance,
            'status' => $this->status,
            'approved_by' => $this->approved_by,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
