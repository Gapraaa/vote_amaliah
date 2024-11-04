<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kelas1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['kode_kelas' => 'XTJKT1', 'nama_kelas' => '10 TJKT 1', 'school_id' => '1'],
            ['kode_kelas' => 'XTJKT2', 'nama_kelas' => '10 TJKT 2', 'school_id' => '1'],
            ['kode_kelas' => 'XTJKT3', 'nama_kelas' => '10 TJKT 3', 'school_id' => '1'],
            ['kode_kelas' => 'XPPLG1', 'nama_kelas' => '10 PPLG 1', 'school_id' => '1'],
            ['kode_kelas' => 'XPPLG2', 'nama_kelas' => '10 PPLG 2', 'school_id' => '1'],
            ['kode_kelas' => 'XPPLG3', 'nama_kelas' => '10 PPLG 3', 'school_id' => '1'],
            ['kode_kelas' => 'XAN', 'nama_kelas' => '10 AN', 'school_id' => '1'],
            ['kode_kelas' => 'XIAN1', 'nama_kelas' => '11 AN 1', 'school_id' => '1'],
            ['kode_kelas' => 'XITJKT1', 'nama_kelas' => '11 TJKT 1', 'school_id' => '1'],
            ['kode_kelas' => 'XITJKT2', 'nama_kelas' => '11 TJKT 2', 'school_id' => '1'],
            ['kode_kelas' => 'XITJKT3', 'nama_kelas' => '11 TJKT 3', 'school_id' => '1'],
            ['kode_kelas' => 'XIPPLG1', 'nama_kelas' => '11 PPLG 1', 'school_id' => '1'],
            ['kode_kelas' => 'XIPPLG2', 'nama_kelas' => '11 PPLG 2', 'school_id' => '1'],
            ['kode_kelas' => 'XIPPLG3', 'nama_kelas' => '11 PPLG 3', 'school_id' => '1'],
            ['kode_kelas' => 'XIIAN1', 'nama_kelas' => '12 AN 1', 'school_id' => '1'],
            ['kode_kelas' => 'XIIAN2', 'nama_kelas' => '12 AN 2', 'school_id' => '1'],
            ['kode_kelas' => 'XIITJKT1', 'nama_kelas' => '12 TJKT 1', 'school_id' => '1'],
            ['kode_kelas' => 'XIITJKT2', 'nama_kelas' => '12 TJKT 2', 'school_id' => '1'],
            ['kode_kelas' => 'XIIPPLG1', 'nama_kelas' => '12 PPLG 1', 'school_id' => '1'],
            ['kode_kelas' => 'XIIPPLG2', 'nama_kelas' => '12 PPLG 2', 'school_id' => '1'],
        ]);
    }
}
