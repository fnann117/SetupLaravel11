<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gundam extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_model',
        'seri',
        'deskripsi',
        'harga',
        'stok',
        'grade',
        'tinggi'
    ];
}