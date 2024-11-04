<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIAN2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0074750898', '22.5.0320', 'ABDUL MALIK BAGASKARA'],
            ['0068923237', '22.5.0396', 'ADITIA DWI SAPUTRA'],
            ['0075134788', '22.5.0012', 'ALIFFIA ALVIRA HAKIM'],
            ['0076169029', '22.5.0039', 'AVRILLIA AZ\' ZAHRA'],
            ['3063409519', '22.5.0373', 'DARENT AGUSTIAN'],
            ['0071219330', '22.5.0354', 'DICKY WAHYUDI'],
            ['0065452622', '22.5.0338', 'ERLANDA SYAPUTRA'],
            ['0076373804', '22.5.0306', 'FADLY FADILAH HIDAYAT'],
            ['0075954804', '22.5.0148', 'FARLY AHMAD NURISMAN'],
            ['0063065170', '22.5.0400', 'FIRZA GILANG HERMANA'],
            ['0063810635', '22.5.0239', 'IBNU SYABIL ASYIDIQ'],
            ['0069310721', '22.5.0278', 'KEVIN TROY SUKENDRO'],
            ['0079349600', '22.5.0131', 'LINTANG CANTIKA'],
            ['3079524027', '22.5.0056', 'M DZAKI MAULANA'],
            ['0067116961', '22.5.0221', 'M.HAIRIL ANWARI'],
            ['0076338361', '22.5.0013', 'MAYANG KUMALA SARI'],
            ['0071083955', '22.5.0431', 'MUHAMAD RAFFA ATHALAH BASIR'],
            ['0064209819', '22.5.0247', 'MUHAMMAD AKBAR JAYA'],
            ['0077311713', '22.5.0330', 'MUHAMMAD FIQIH'],
            ['0066490382', '22.5.0343', 'MUHAMMAD MAHDI'],
            ['0079021131', '22.5.0231', 'NANDANA ARIF MAULANA'],
            ['0061966394', '22.5.0175', 'NURHABIBAH'],
            ['0079207848', '22.5.0179', 'RAFFI MUHAMAD AFRIANSYAH'],
            ['0067279737', '22.5.0264', 'RESTU ADI SAPUTRA'],
            ['0062238171', '22.5.0364', 'SASKIA ALYA SHAFIRA'],
            ['0071091719', '22.5.0257', 'SHALEH HILABI'],
            ['0078444561', '22.5.0394', 'SITI CHANTICA ARIFIN'],
            ['0061877370', '22.5.0065', 'SITI PUTRI ZAHARA'],
            ['0071508070', '22.5.0361', 'TUBAGUS MUHAMAD IHSAN FEBRIAN'],
            ['0073459601', '22.5.0357', 'YOGA ARIF WICAKSONO'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 16, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
