<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('databarangs')->insert([
            [
                'kode_barang' => '01',
                'nama_barang' => 'Sprite',
                'harga_barang' => 250000,
                'deskripsi_barang' => 'enak dan lezat',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => '02',
                'nama_barang' => 'Tango Wafer',
                'harga_barang' => 150000,
                'deskripsi_barang' => 'enak dan mantap',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => '03',
                'nama_barang' => 'Mie Sedap',
                'harga_barang' => 300000,
                'deskripsi_barang' => 'enak dan sedap',
                'satuan_id' => 3
            ]
        ]);
    }
}
