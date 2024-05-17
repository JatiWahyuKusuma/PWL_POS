<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // [
            //     'kategori_kode' => 'MKN', 
            //     'kategori_nama' => 'Makanan', 
            //     'created_at' => now(),
            // ],
            // [
            //     'kategori_kode' => 'SNK', 
            //     'kategori_nama' => 'Makanan Ringan (Snack)', 
            //     'created_at' => now(),
            // ],
            // [
            //     'kategori_kode' => 'SBK', 
            //     'kategori_nama' => 'Sembako', 
            //     'created_at' => now(),
            // ],
            [
                'kategori_kode' => 'FSN', 
                'kategori_nama' => 'Fashion', 
                'created_at' => now(),
            ],

        ];
        DB::table('m_kategori')->insert($data);
        //
    }
}
