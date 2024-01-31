<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ProductHistory;

class ProductHistoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProductHistory::create([
            'kode' => 'INV-1',
            'nama' => 'Kursi siswa',
            'harga' => 200000,
        ]);
        
        ProductHistory::create([
            'kode' => 'INV-2',
            'nama' => 'Meja siswa',
            'harga' => 220000,
        ]);

        ProductHistory::create([
            'kode' => 'INV-3',
            'nama' => 'Komputer',
            'harga' => 10220000,
        ]);

        ProductHistory::create([
            'kode' => 'INV-4',
            'nama' => 'Asbak',
            'harga' => 10000,
        ]);

        ProductHistory::create([
            'kode' => 'INV-5',
            'nama' => 'Komputer',
            'harga' => 10220000,
        ]);

        ProductHistory::create([
            'kode' => 'INV-6',
            'nama' => 'Asbak',
            'harga' => 10000,
        ]);

        ProductHistory::create([
            'kode' => 'INV-7',
            'nama' => 'Komputer',
            'harga' => 10220000,
        ]);

        ProductHistory::create([
            'kode' => 'INV-8',
            'nama' => 'Komputer',
            'harga' => 10220090,
        ]);
    }
}
