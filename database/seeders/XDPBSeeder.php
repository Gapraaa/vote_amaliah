<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XDPBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0096525293", "24.6.0023", "AIRA QIANNAVISYA P"],
            ["0093987786", "24.6.0337", "CHERRYL NAURA LOPULUA"],
            ["0093808736", "24.6.0282", "CLARA APRILIA MANOPO"],
            ["0081505212", "24.6.0184", "DELA RISTA BELA"],
            ["3093948627", "24.6.0272", "ENI NURAENI"],
            ["0094309341", "24.6.0313", "LATIFAH KURNIANSYAH"],
            ["0084636716", "24.6.0310", "LENGKANA ANNAZMI"],
            ["0085238671", "24.6.0379", "NATASYA AUGUSTA MARADANY"],
            ["0088126022", "24.6.0041", "SYALBIATU SYAHWA"],
            ["0086040648", "24.6.0269", "SALSYA AGUSTINA"],
            ["3096857419", "24.6.0162", "SITI NUR HIKMAH"],
            ["0091174509", "24.6.0232", "SYAFA NURISAR"],
            ["0095764839", "24.6.0361", "ZAHRA SIKHLA"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 27, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
