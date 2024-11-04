<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIAK2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0083875452", "23.6.0280", "NORIS NUR AQSO"],
            ["0078200660", "23.6.0329", "PIRA APRIYANI"],
            ["0082882356", "23.6.0215", "PUTRI CHANDRA WIYANA"],
            ["0071280653", "23.6.0228", "PUTRI NURMALA"],
            ["0072204741", "23.6.0214", "PUTRI NURUL AINI"],
            ["0068076895", "23.6.0343", "PUTRI SALMA AZZAHRA"],
            ["0083440904", "23.6.0336", "RAISYA ALEYDA HAQ"],
            ["0087319672", "23.6.0340", "RAISYA NUR FADILAH"],
            ["0081371183", "23.6.0148", "RESYA ANDINI AFIANY"],
            ["0084373653", "23.6.0133", "RIZKI FADILAH"],
            ["0075971960", "23.6.0005", "SHEIRA RAMADHANI SANDRIA"],
            ["0083235517", "23.6.0178", "SITI AINA MAULIDA"],
            ["0076759809", "23.6.0254", "SITI CAHAYA KIRANI"],
            ["0082644970", "23.6.0040", "SITI FADILAH BAETUL HASANAH"],
            ["0086448542", "23.6.0145", "SITI HUMAEROH"],
            ["0081191962", "23.6.0393", "SITI NURKAILA APRILIANI"],
            ["0081168102", "23.6.0179", "SITI PALICA ANANDA"],
            ["3088612932", "23.6.0141", "SITI ZAHIRA RAUDLATUL JANNAH"],
            ["0082793087", "23.6.0341", "SYAHIRA"],
            ["0083874676", "23.6.0301", "ZAKIYYA NURLAELI AHMAD"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 29, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
