<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class pendudukseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $query = DB::table('penduduk')
        ->insert([
            'nik'=>'3376022701880006',
            'nama_lengkap'=>'Muhamad Nur Al Falah',
            'tempat_lahir'=>'Tegal',
            'tanggal lahir'=>'2002-10-06',
            'alamat'=>'Jalan Muria Desa Dukuhwringin Slawi'
        ]);
    }
}
