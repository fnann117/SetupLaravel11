<?php

namespace Database\Seeders;

use App\Models\Gundam;
use Illuminate\Database\Seeder;

class GundamSeeder extends Seeder
{
    public function run(): void
    {
        Gundam::create([
            'nama_model' => 'RX-78-2 Gundam',
            'seri' => 'Mobile Suit Gundam',
            'deskripsi' => 'Gundam legendaris pertama yang dipilot Amuro Ray',
            'harga' => 1250000,
            'stok' => 10,
            'grade' => 'MG',
            'tinggi' => 18
        ]);

        Gundam::create([
            'nama_model' => 'MS-06S Zaku II',
            'seri' => 'Mobile Suit Gundam',
            'deskripsi' => 'Zaku merah milik Char Aznable',
            'harga' => 980000,
            'stok' => 15,
            'grade' => 'HG',
            'tinggi' => 12
        ]);

        Gundam::create([
            'nama_model' => 'XXXG-01W Wing Gundam',
            'seri' => 'Gundam Wing',
            'deskripsi' => 'Gundam utama dalam seri Gundam Wing',
            'harga' => 1500000,
            'stok' => 8,
            'grade' => 'RG',
            'tinggi' => 14
        ]);
    }
}

