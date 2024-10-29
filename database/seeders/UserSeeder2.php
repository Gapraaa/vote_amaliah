<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder2 extends Seeder
{
    public function run()
    {
        $data = [
            ['0077195975', '22.6.0350', 'ALIFIA NILAM BILQISZ'],
            ['0067468020', '22.6.0080', 'ALIKA SALSABILA'],
            ['0062625599', '22.6.0352', 'ANINDIA SYAFIRA DARMANSYAH'],
            ['0064379092', '22.6.0423', 'DEPI APRILIA'],
            ['0073437318', '22.6.0119', 'DEWI WIDAYAH DAMAYANTI'],
            ['0078192131', '22.6.0034', 'DWI FERUZIA RAMADHANI DARMAWAN'],
            ['0077543473', '22.6.0272', 'FEBRIANA GINTING'],
            ['0139153666', '22.6.0126', 'INDRI CHALISA'],
            ['0072734894', '22.6.0051', 'INTAN NUROCTA APRIANY'],
            ['0069828561', '22.6.0026', 'ISAWALA AMINARTI'],
            ['0064367406', '22.6.0106', 'ISMI NURDIANA'],
            ['0062987126', '22.6.0102', 'M. RIZKY PAHREZA S.'],
            ['0075402085', '22.6.0073', 'MONICA'],
            ['0075839007', '22.6.0053', 'MOZA DWI RISTIANI'],
            ['0075911692', '22.6.0086', 'MUHAMMAD DANDIRA PUTRA HILMAN'],
            ['0073087380', '22.6.0082', 'MUTIARA ANANDA'],
            ['0077366586', '22.6.0289', 'NAJWA WIEDIE AL ZAHRA'],
            ['0079879672', '22.6.0070', 'OLIVIA DWI LARASATI'],
            ['0063040838', '22.6.0186', 'SALWABILA SAVITRI'],
            ['0071733949', '22.6.0282', 'SITI ANISA'],
            ['0069181825', '22.6.0174', 'SITI MAESA AYU'],
            ['0071262906', '22.6.0135', 'SITI MUNAJAH'],
            ['0074152580', '22.6.0248', 'SITI NABILA INDRIANI'],
            ['0063520702', '22.6.0342', 'SITI PADILAH'],
            ['0076553212', '22.6.0332', 'SYEIRA APRILIANTY'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 2, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
