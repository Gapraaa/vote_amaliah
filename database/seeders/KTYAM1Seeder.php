<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KTYAM1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Muhammad Yasir', '30000001', '3001'],
            ['Jafar Sodik', '30000002', '3002'],
            ['Aldino Ogi', '30000003', '3003'],
            ['Risfan Novrian', '30000004', '3004'],
            ['Iis Asiyah, S.Pd', '30000005', '3005'],
            ['Selvia Safitri', '30000006', '3006'],
            ['Deri Hermawan', '30000007', '3007'],
            ['Gizwinanda Rachmawati', '30000008', '3008'],
            ['Siti Nabila', '30000009', '3009'],
            ['Tia Agustiani', '30000010', '3010'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[0], // Nama pengguna 
                'username' => $item[1], // NISN sebagai username 
                'password' => Hash::make(str_replace('.', '', $item[2])), // NIS sebagai password (hashed, tanpa titik)  
                'role_id' => 3,  // Misalnya, role_id = 1 untuk siswa 
                'school_id' => 1,
            ]);
        }
    }
}
