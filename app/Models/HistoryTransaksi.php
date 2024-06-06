<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryTransaksi extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $fillable = ['username', 'invoice', 'refno', 'keterangan', 'portfolio', 'status', 'debit', 'kredit', 'balance'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';
}
