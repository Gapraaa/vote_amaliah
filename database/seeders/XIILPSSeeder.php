<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIILPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0074200860', '22.6.0112', 'ABILIA MAULIDINA'],
            ['0076450175', '22.6.0130', 'AHMAD ALI YUSUF'],
            ['0077301427', '22.6.0451', 'ASSYIFA TAQIA LULU BIJAKSONO'],
            ['0076033435', '22.6.0185', 'BUNGA AULIA'],
            ['0066679821', '22.6.0437', 'DELIA PUTRI SETIAWAN'],
            ['0076361478', '22.6.0122', 'DYAH KUSUMA WARDANI'],
            ['0063083694', '22.6.0209', 'HENI KURNIAWATI'],
            ['0054391967', '22.6.0108', 'INDRA'],
            ['0061987442', '22.6.0302', 'MAYA SARI DEWI'],
            ['3075959850', '22.6.0280', 'METTY THAMRIN'],
            ['0073162122', '22.6.0281', 'NADIA NUR HASFIYA'],
            ['0076244264', '22.6.0109', 'NANDA LESTARI'],
            ['0066620455', '22.6.0274', 'NOVIA AGISTA'],
            ['0069602930', '22.6.0351', 'RADIFA PUTRI'],
            ['0076556498', '22.6.0383', 'RAHMA NOVIYANTI'],
            ['0076557898', '22.6.0445', 'SITI SARAH ROSMALIA'],
            ['0072355627', '22.6.0452', 'TENGKU ARFAH SYIFANA'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 43, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
