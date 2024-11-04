<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XILPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0086356466", "23.6.0194", "ALIZA MAULIDA"],
            ["0086932228", "23.6.0189", "ANINDHITA MAHARANI"],
            ["0086500142", "23.6.0124", "LARAS AMELIA"],
            ["0079790973", "23.6.0045", "MEYLANI PUTRI"],
            ["0078687223", "23.6.0362", "MUHAMAD DENIS ARISUBONO"],
            ["0072611979", "23.6.0319", "MUHAMAD YUSUF GUNAWAN ALKAHFI"],
            ["0085466777", "23.6.0307", "NURALYA TRI HANDAYANI"],
            ["0077890182", "23.6.0366", "RIKI SEPTIANA"],
            ["0085460225", "23.6.0154", "SALSABILA BADRIYAH"],
            ["0089403230", "23.6.0344", "SANNA SYAIRA AMANI"],
            ["0072933610", "23.6.0367", "SHAFINA ADE ELFARIANI"],
            ["0087803817", "23.6.0234", "SITI APRILIANA"],
            ["0077303024", "23.6.0015", "SITI ROHMATUL SADIAH"],
            ["0077128164", "23.6.0368", "TSAUROYA INDIRA RAMAIS"],
            ["0073539253", "23.6.0320", "VINA DESTIANA"],
            ["0076817481", "23.6.0321", "VINI DESTIANI"],
            ["0079482134", "23.6.0900", "ZULVA HOERIAH"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 34, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
