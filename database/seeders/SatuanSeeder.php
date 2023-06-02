<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
        [
            'kode_satuan' => 'KG',
            'nama_satuan' => 'kilogram',
            'dekripsi' => 'kilogram'
        ],
        [
            'kode_satuan' => 'G',
            'nama_satuan' => 'Gram',
            'dekripsi' => 'Gram'
        ],
        [
            'kode_satuan' => 'Rm',
            'nama_satuan' => 'Rim',
            'dekripsi' => 'Rim'
        ],
    ]);
    }
}
