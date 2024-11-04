<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIMP4Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0076835191', '22.6.0192', 'ADINDA DESWITA'],
            ['0064720954', '22.6.0199', 'ALIFA OKTAFIANI'],
            ['0072211799', '22.6.0266', 'ANJELI SAFARIYANTI YUSUF'],
            ['0064497378', '22.6.0079', 'ARDI WILIANTO'],
            ['0075569531', '22.6.0334', 'DEFANI FEBRIANI'],
            ['0067122689', '22.6.0220', 'DEVI LAPATMA'],
            ['0061150278', '22.6.0267', 'DWI INDRIANI'],
            ['0076333620', '22.6.0041', 'FIERSA YULIANTI'],
            ['0064326041', '22.6.0114', 'FITRIA RAHMAH'],
            ['0063885364', '22.6.0314', 'GITA MORRAULI LESTARI HUTABARAT'],
            ['0071999213', '22.6.0120', 'HASYA SHABIYA'],
            ['0074967926', '22.6.0003', 'INTAN MEIKA RAHAYU'],
            ['0077338860', '22.6.0016', 'MUHAMAD ALKA ALIYANSYAH'],
            ['0071153831', '22.6.0291', 'MUHAMAD PAISAL YANDIN'],
            ['0074939457', '22.6.0365', 'MUHAMMAD RAFLI ALI MUKTI'],
            ['0063531581', '22.6.0173', 'REFALINA FAUZIAH'],
            ['0071189680', '22.6.0237', 'RIRI APRILIANI'],
            ['0074757791', '22.6.0090', 'SHIFA ALIKA PUTRI'],
            ['0071743512', '22.6.0129', 'SITI ALIAH ADRIANI'],
            ['0077291386', '22.6.0388', 'SITI AULIA SHIFA'],
            ['0066232407', '22.6.0187', 'SITI ERLI SIYAHWATI'],
            ['0066535221', '22.6.0374', 'SITI HASNA NABILA'],
            ['0064125898', '22.6.0071', 'SITI MADANIAH'],
            ['0074969435', '22.6.0252', 'ZILNAN FIRDAUS'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 42, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
