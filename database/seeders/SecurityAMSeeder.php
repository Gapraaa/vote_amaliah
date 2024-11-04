<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SecurityAMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Wahyu Saputra', '50000001', '5001'],
            ['Hendi Wijaya', '50000002', '5002'],
            ['Yadi Mulyadi', '50000003', '5003']
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[0], // Nama pengguna 
                'username' => $item[1], // NISN sebagai username 
                'password' => Hash::make(str_replace('.', '', $item[2])), // NIS sebagai password (hashed, tanpa titik)  
                'role_id' => 3,  // Misalnya, role_id = 1 untuk siswa 
                'school_id' => 0,
            ]);
        }
    }
}
