<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIMP3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0086841322", "23.6.0160", "AMANDA FELIS PEBRIEL"],
            ["0072139362", "23.6.0020", "AMI RAMADHANTI"],
            ["0073937590", "23.6.0397", "ARIDA DWI MARLA"],
            ["0078847171", "23.6.0012", "AULIA AGISCA SYAHRUDIN"],
            ["0087200146", "23.6.0278", "AULIA AMANDA ALAMSYAH"],
            ["0086624317", "23.6.0126", "AZKA AZKIA"],
            ["0096318772", "23.6.0013", "HANIFA ANGGRAENI"],
            ["0088331813", "23.6.0398", "ILUH ISMAWATI"],
            ["0073307078", "23.6.0326", "KEYSHA ZAHRANI RAHMA PUTRI"],
            ["0081295869", "23.6.0128", "MAY FIRA RASAKI"],
            ["0081427604", "23.6.0396", "MEIVA FAIQ FIKRIYAH"],
            ["0081659969", "23.6.0127", "MIYA TIARA"],
            ["0074709109", "23.6.0226", "NAURAH PUTERI RAYYANI"],
            ["0087256612", "23.6.0153", "NAZLA ZAHIRAH"],
            ["0081831602", "23.6.0097", "RAHMA PARDHA AULIA"],
            ["0085110633", "23.6.0238", "RAISYA ADISTYA RAHMAN"],
            ["0085039403", "23.6.0318", "RAISYA ASYIFA"],
            ["0079839749", "23.6.0196", "SELFINA"],
            ["0076213295", "23.6.0359", "SITI FATIMAH RAHMADINA"],
            ["0086705016", "23.6.0082", "SITI NAURA KIRANIA"],
            ["3083773726", "23.6.0163", "SITI RAHMAWATI"],
            ["0082597620", "23.6.0152", "SITI SARAH"],
            ["0072268783", "23.6.0118", "SITI SARAH HANDAYANI"],
            ["0081347334", "23.6.0157", "TALITHA NATHANIA RACHMA"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 33, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
