<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XMP2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0073171877", "24.6.0082", "ALWAN JULIAN ALKEANU"],
            ["0094524411", "24.6.0156", "ANANDA CHELSEA APRILIA"],
            ["0092007619", "24.6.0255", "ANANDA NOER NAZIRA"],
            ["0086256985", "24.6.0167", "ANINDYA TRI NOVRYANDINI"],
            ["0094631498", "24.6.0038", "ANISA SUWANDI"],
            ["0085116841", "24.6.0335", "AZKIYA HILWAYA ATSULASA"],
            ["0094497653", "24.6.0172", "DEA APRILIA"],
            ["0096808291", "24.6.0064", "FERISYA AGHFA NURAYRA"],
            ["0086765952", "24.6.0344", "FITRIYANI AGUSTINA"],
            ["0083725291", "24.6.0049", "HELMA PERMATA SARI"],
            ["0085747754", "24.6.0045", "ISTI RAHMAWATI"],
            ["0087840938", "24.6.0039", "KAYLA AVIVAHTUL AZZAHRA"],
            ["0074869941", "24.6.0267", "M. INDRAWAN"],
            ["0091653700", "24.6.0089", "MARSYA ALIA NUR MAULIDA"],
            ["0085302124", "24.6.0304", "MUHAMAD EKI SAPUTRA"],
            ["0093252684", "24.6.0230", "MUHAMAD HAIDAR H"],
            ["0098982461", "24.6.0240", "NADIRA SYAFA FEBRIANI"],
            ["3089740902", "24.6.0152", "NADYA SABRINA SOFIANTY"],
            ["0072414829", "24.6.0190", "NAURA DESWITA VIRANDA"],
            ["0091500230", "24.6.0252", "NAURA PUTRI HAFIDZAH"],
            ["0081112751", "24.6.0081", "NOVITA SARI"],
            ["3087056288", "24.6.0161", "NUR AZRINAH KHHAERUNNISA"],
            ["0071136686", "24.6.0250", "RESTI SETIANI"],
            ["0088085652", "24.6.0351", "SALWA SALSABILA SAFITRI"],
            ["0088550072", "24.6.0072", "SASQIA SYAH"],
            ["0084802492", "24.6.0076", "SEYRA AULYA PUTRI"],
            ["0082371448", "24.6.0029", "SITI NURANTI"],
            ["0093900283", "24.6.0047", "SITI SALMA AULIA"],
            ["0095693766", "24.6.0203", "SITI SALWA NADIATUL F."],
            ["0098298082", "24.6.0245", "USVANOVA ELMIRA DEANOVA"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 24, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
