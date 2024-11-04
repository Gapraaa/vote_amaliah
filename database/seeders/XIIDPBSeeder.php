<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIDPBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0064949682', '22.6.0212', 'ADELIA PUSPITA'],
            ['0071126434', '22.6.0234', 'AGNI NURSABILA'],
            ['0071040498', '22.6.0403', 'INNEKE ZASKIA VALENTINA'],
            ['0066535536', '22.6.0295', 'INTAN NURAENI'],
            ['0075771363', '22.6.0331', 'MAULIDYA AFRIYANTI'],
            ['0075771364', '22.6.0218', 'NAYLA SABIRAH'],
            ['0073294946', '22.6.0180', 'NAZWA NAURA SALSABILA AL\'ZAHRRA'],
            ['0074013402', '22.6.0057', 'QISTI DINDA MAULIDIAH'],
            ['0072542447', '22.6.0431', 'SEPTIANTI ROSITA DEWI'],
            ['0074013403', '22.6.0168', 'SRI RAHAYU'],
            ['0058009053', '22.6.0269', 'SYAFIRA FITRIANY NOOR'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 44, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
