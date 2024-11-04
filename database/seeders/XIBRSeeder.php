<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIBRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0083680776", "23.6.0041", "AZKIYA RAMBU BILAWAL"],
            ["0084425806", "23.6.0322", "ERRINA AULIA HIDAYAT"],
            ["0078233956", "23.6.0216", "FATWA NATA RAYA"],
            ["0085386727", "23.6.0394", "GEMA FITRI ADIBRATA PUTRA"],
            ["0089609062", "23.6.0117", "HANITA SHAFRIANI TAZKIA"],
            ["0082565437", "23.6.0129", "ICA KHAERUNNISA"],
            ["0071168528", "23.6.0151", "LINTANG OKTAVIRA DARYATMO"],
            ["0079898646", "23.6.0353", "M NABIL SYARIF"],
            ["0076118747", "23.6.0267", "M. DAFA FADILLAH"],
            ["0076908200", "23.6.0310", "MUHAMAD FAHRI ADITYA MISLAH"],
            ["0083241435", "23.6.0068", "MUHAMMAD FAUZAN APRILIANI TAUPIQ"],
            ["0074541690", "23.6.0314", "NURUL IZZATI MAUDI. P"],
            ["0088097440", "23.6.0395", "PUTRI KHIRANA HERMAWAN"],
            ["0073157077", "23.6.0281", "RIZKY SAPUTRA"],
            ["0089167381", "23.6.0271", "SALMAN AL FARIZI"],
            ["0086098017", "23.6.0289", "SATYA PRADITA MAHARI"],
            ["0088106168", "23.6.0352", "SITI RASMI SALPIYAH"],
            ["0084729510", "23.6.0213", "SITI VARERA"],
            ["0069635524", "23.6.0365", "STEVANI LADIA SYAKIRA"],
            ["0077796818", "23.6.0091", "SURYANIH"],
            ["0082080485", "23.6.0349", "ZULFA JAUDAH JAELANI"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 30, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
