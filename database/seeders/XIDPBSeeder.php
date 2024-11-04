<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIDPBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["3083150224", "23.6.0109", "ATALLAH ZAKIAH"],
            ["0081780793", "23.6.0400", "CHELSEA AMELIA PUTRI"],
            ["0089012519", "23.6.0369", "FIRDA RIHADATUL AISY"],
            ["0089443524", "23.6.0309", "KAYLA RIZKY AZAHRA"],
            ["0089843548", "23.6.0304", "MAHARANI"],
            ["0084974374", "23.6.0277", "NADA FAIRUZ"],
            ["0071688506", "23.6.0032", "NADIN SAKILA ZULKUP"],
            ["0072447618", "23.6.0251", "NAZWA MAULIDA"],
            ["0065217537", "23.6.0243", "NURUL AENI"],
            ["0075856619", "23.6.0111", "SANDI RHAMADAN"],
            ["0076745109", "23.6.0401", "SITI ASIAH"],
            ["0077412221", "23.6.0049", "SITI NASEHA"],
            ["0089903259", "23.6.0285", "SITI RURI MARTIANI"],
            ["0073090821", "23.6.0064", "SITI ZAIRA NOOR AZIZA"],
            ["0086737965", "23.6.0370", "TIARA KANIAZAHRA"],
            ["0088978768", "23.6.0007", "ZAHARA AYU KENANGA NUR CAHYA"],
            ["0088657619", "23.6.0295", "ZAHRA MAULIDYA"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 35, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
