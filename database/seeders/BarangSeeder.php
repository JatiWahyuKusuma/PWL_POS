<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1, 
                'kategori_id' => 1,        
                'barang_kode' => 'AQU',
                'barang_nama' => 'Aqua',  
                'harga_beli' => 4000,
                'harga_jual' => 5000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 2, 
                'kategori_id' => 1,        
                'barang_kode' => 'PCR',
                'barang_nama' => 'Pocari',  
                'harga_beli' => 5000,
                'harga_jual' => 5500,
                'created_at' => now(),
            ],
            [
                'barang_id' => 3, 
                'kategori_id' => 2,        
                'barang_kode' => 'NSP',
                'barang_nama' => 'Nasi Padang',  
                'harga_beli' => 15000,
                'harga_jual' => 16000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 4, 
                'kategori_id' => 2,        
                'barang_kode' => 'RWN',
                'barang_nama' => 'Rawon',  
                'harga_beli' => 20000,
                'harga_jual' => 22000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 5, 
                'kategori_id' => 3,        
                'barang_kode' => 'CTO',
                'barang_nama' => 'Chitato',  
                'harga_beli' => 10000,
                'harga_jual' => 12000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 6, 
                'kategori_id' => 3,        
                'barang_kode' => 'AKA',
                'barang_nama' => 'Aoka',  
                'harga_beli' => 3000,
                'harga_jual' => 4000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 7, 
                'kategori_id' => 4,        
                'barang_kode' => 'TLR',
                'barang_nama' => 'Telur',  
                'harga_beli' => 8000,
                'harga_jual' => 10000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 8, 
                'kategori_id' => 4,        
                'barang_kode' => 'BRS',
                'barang_nama' => 'Beras',  
                'harga_beli' => 50000,
                'harga_jual' => 60000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 9, 
                'kategori_id' => 5,        
                'barang_kode' => 'BJU',
                'barang_nama' => 'Baju',  
                'harga_beli' => 150000,
                'harga_jual' => 170000,
                'created_at' => now(),
            ],
            [
                'barang_id' => 10, 
                'kategori_id' => 5,        
                'barang_kode' => 'CLN',
                'barang_nama' => 'Celana',  
                'harga_beli' => 100000,
                'harga_jual' => 120000,
                'created_at' => now(),
            ],

        ];
        DB::table('m_barang')->insert($data); //
    }
}
