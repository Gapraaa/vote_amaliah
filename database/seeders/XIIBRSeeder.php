<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIBRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0079832237", "22.6.0426", "AIRIN JULIANTI"],
            ["0075359573", "22.6.0380", "AJENG GUSMIRANTI"],
            ["0071111872", "22.6.0446", "ARIF RAHMAN"],
            ["0066101785", "22.6.0406", "DHEA RAMADHANI"],
            ["0077180367", "22.6.0371", "ERNA NURMAULIDA"],
            ["0069545669", "22.6.0419", "FRANS KEFITAN TARIGAN"],
            ["0063733533", "22.6.0159", "IRA SAFITRI"],
            ["0077143799", "22.6.0261", "JIHAN ATHAYA MUNARAJAB"],
            ["0077534795", "22.6.0318", "M. RAYHAN"],
            ["0067381098", "22.6.0273", "MOCH. ALDI KURNIAWAN"],
            ["0075205733", "22.6.0182", "MOCHAMMAD RAYHAN MUBAROK"],
            ["0071222127", "22.6.0311", "MUHAMAD YASIR"],
            ["0056602850", "22.6.0043", "SALMA JULIANI PUTRI"],
            ["0078476537", "22.6.0084", "SHIFA NAZLA MUTIA"],
            ["0073018735", "22.6.0299", "SITI NUR ALIYAH"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 38, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
