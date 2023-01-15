<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Take extends Model
{
    use HasFactory;
    protected  $fillable = [
        'user_id',
        'nama',
        'nis',
        'saksi',
        'rayon',
        'keperluan',
        'tanggal_pinjam',
        'status',
        'done_time',
    ];
}
