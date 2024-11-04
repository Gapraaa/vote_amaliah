<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class KTTAM1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Asep Endang', '30000011', '3011'],
            ['Yana Suryana', '30000012', '3012'],
            ['Ajang Arif', '30000013', '3013'],
            ['Yudistira Pratama Aristiawan', '30000014', '3014']
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
