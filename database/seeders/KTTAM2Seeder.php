<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KTTAM2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Nara Meisyarani', '40000011', '4011'],
            ['Septi Yuliyani', '40000012', '4012'],
            ['Muhamad Akmal', '40000013', '4013']
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
