<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BorangPermohonan extends Model
{
    
    use HasFactory;
    public $timestamps = true;

    protected $fillable = [
        'nama_pemohon',
        'email_pemohon',
        'no_sambungan',
        'jawatan',
        'unit_bahagian',
        'nama_mesyuarat',
        'nama_bilik',
        'pengerusi',
        'dari',
        'hingga',
        'bilangan_ahli',
        // Add more fields as needed
    ];

    // You can define additional model logic here if necessary
}
