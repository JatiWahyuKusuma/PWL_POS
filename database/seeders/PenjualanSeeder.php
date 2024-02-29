<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1, 
                'user_id' => 3, 
                'pembeli' => 'Jati Wahyu',
                'penjualan_kode' => 'A01',
                'penjualan_tanggal' => '2024-01-06',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 2, 
                'user_id' => 3, 
                'pembeli' => 'Fadly Ulya',
                'penjualan_kode' => 'A02',
                'penjualan_tanggal' => '2024-01-16',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 3, 
                'user_id' => 3, 
                'pembeli' => 'Fablo Aimar',
                'penjualan_kode' => 'A03',
                'penjualan_tanggal' => '2024-01-21',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 4, 
                'user_id' => 3, 
                'pembeli' => 'Wisang Garnies',
                'penjualan_kode' => 'A04',
                'penjualan_tanggal' => '2024-01-27',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 5, 
                'user_id' => 3, 
                'pembeli' => 'Maulana Akbar',
                'penjualan_kode' => 'A05',
                'penjualan_tanggal' => '2024-02-02',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 6, 
                'user_id' => 3, 
                'pembeli' => 'Helmi Agung',
                'penjualan_kode' => 'A06',
                'penjualan_tanggal' => '2024-02-08',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 7, 
                'user_id' => 3, 
                'pembeli' => 'Ananda Galang',
                'penjualan_kode' => 'A07',
                'penjualan_tanggal' => '2024-02-11',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 8, 
                'user_id' => 3, 
                'pembeli' => 'Alega Naufal',
                'penjualan_kode' => 'A08',
                'penjualan_tanggal' => '2024-02-15',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 9, 
                'user_id' => 3, 
                'pembeli' => 'M Ariesta',
                'penjualan_kode' => 'A09',
                'penjualan_tanggal' => '2024-02-18',
                'created_at' => now(),
            ],
            [
                'penjualan_id' => 10, 
                'user_id' => 3, 
                'pembeli' => 'Galur Arasy',
                'penjualan_kode' => 'A10',
                'penjualan_tanggal' => '2024-02-21',
                'created_at' => now(),
            ],
           
          
              
            ];
            DB::table('t_penjualan')->insert($data);//
    }
}
