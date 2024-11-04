<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KTYAM2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Dedi Setiana', '40000001', '4001'],
            ['Mudin', '40000002', '4002'],
            ['Muhammad Romdhoni', '40000003', '4003'],
            ['Arif Hidayat', '40000004', '4004'],
            ['Halim Mahmud', '40000005', '4005'],
            ['Muhamad Fikri, MOS', '40000006', '4006'],
            ['Muhammad Kemal Irfany Azhar', '40000007', '4007'],
            ['Siti Murti Dewi', '40000008', '4008'],
            ['Herdiana', '40000009', '4009'],
            ['Saepulloh', '40000010', '4010'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[0], // Nama pengguna 
                'username' => $item[1], // NISN sebagai username 
                'password' => Hash::make(str_replace('.', '', $item[2])), // NIS sebagai password (hashed, tanpa titik)  
                'role_id' => 3,  // Misalnya, role_id = 1 untuk siswa 
                'school_id' => 2,
            ]);
        }
    }
}
