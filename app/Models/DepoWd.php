<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepoWd extends Model
{
    use HasFactory;

    public $incrementing = false;
    
    protected $fillable = ['username', 'referral', 'groupbank',  'amount', 'keterangan', 'jenis', 'bank', 'namarek', 'norek', 'mbank', 'mnamarek', 'mnorek', 'txnid', 'balance', 'status', 'approved_by'];

    protected $primaryKey = 'id';

    protected $keyType = 'string';

    protected $table = 'depo_wd';
}
