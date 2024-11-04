<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Kelas2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            ['kode_kelas' => 'XAKL', 'nama_kelas' => '10 AKL', 'school_id' => '2'],
            ['kode_kelas' => 'XBDP', 'nama_kelas' => '10 BDP', 'school_id' => '2'],
            ['kode_kelas' => 'XMP1', 'nama_kelas' => '10 MP 1', 'school_id' => '2'],
            ['kode_kelas' => 'XMP2', 'nama_kelas' => '10 MP 2', 'school_id' => '2'],
            ['kode_kelas' => 'XMP3', 'nama_kelas' => '10 MP 3', 'school_id' => '2'],
            ['kode_kelas' => 'XLPS', 'nama_kelas' => '10 LPS', 'school_id' => '2'],
            ['kode_kelas' => 'XDPB', 'nama_kelas' => '10 DPB', 'school_id' => '2'],
            ['kode_kelas' => 'XIAK1', 'nama_kelas' => '11 AK 1', 'school_id' => '2'],
            ['kode_kelas' => 'XIAK2', 'nama_kelas' => '11 AK 2', 'school_id' => '2'],
            ['kode_kelas' => 'XIBR', 'nama_kelas' => '11 BR', 'school_id' => '2'],
            ['kode_kelas' => 'XIMP1', 'nama_kelas' => '11 MP 1', 'school_id' => '2'],
            ['kode_kelas' => 'XIMP2', 'nama_kelas' => '11 MP 2', 'school_id' => '2'],
            ['kode_kelas' => 'XIMP3', 'nama_kelas' => '11 MP 3', 'school_id' => '2'],
            ['kode_kelas' => 'XILPS', 'nama_kelas' => '11 LPS', 'school_id' => '2'],
            ['kode_kelas' => 'XIDPB', 'nama_kelas' => '11 DPB', 'school_id' => '2'],
            ['kode_kelas' => 'XIIAK1', 'nama_kelas' => '12 AK 1', 'school_id' => '2'],
            ['kode_kelas' => 'XIIAK2', 'nama_kelas' => '12 AK 2', 'school_id' => '2'],
            ['kode_kelas' => 'XIIBR', 'nama_kelas' => '12 BR', 'school_id' => '2'],
            ['kode_kelas' => 'XIIMP1', 'nama_kelas' => '12 MP 1', 'school_id' => '2'],
            ['kode_kelas' => 'XIIMP2', 'nama_kelas' => '12 MP 2', 'school_id' => '2'],
            ['kode_kelas' => 'XIIMP3', 'nama_kelas' => '12 MP 3', 'school_id' => '2'],
            ['kode_kelas' => 'XIIMP4', 'nama_kelas' => '12 MP 4', 'school_id' => '2'],
            ['kode_kelas' => 'XIILPS', 'nama_kelas' => '12 LPS', 'school_id' => '2'],
            ['kode_kelas' => 'XIIDPB', 'nama_kelas' => '12 DPB', 'school_id' => '2'],
        ]);
    }
}
