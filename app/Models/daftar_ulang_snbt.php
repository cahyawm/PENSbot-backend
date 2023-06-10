<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class daftar_ulang_snbt extends Model
{
    use HasFactory;
    protected $table = "daftar_ulang_snbt";
    public $timestamps = false;
    protected $fillable = [
        'keterangan',
        'tanggal_mulai',
        'tanggal_selesai',
    ];
}
