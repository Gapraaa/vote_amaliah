<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XTKJ3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0085390421', '24.5.0037', 'AGUS SUBARKAH'],
            ['0092247877', '24.5.0206', 'AHMAD MUZAKKI SAFARULLOH'],
            ['0098987642', '24.5.0016', 'ANDARU HAIKAL MUBIN'],
            ['0097182827', '24.5.0239', 'ASYAM BOEDI ALFAZRI'],
            ['0083441893', '24.5.0265', 'DWI ARKAN HADIANSYAH'],
            ['0095308849', '24.5.0191', 'FAISAL ADITYA SAPUTRA'],
            ['0097776201', '24.5.0158', 'GHIO ANANDA PUTRA'],
            ['0081910673', '24.5.0110', 'HANDI RAMADAN AQSO'],
            ['0091421874', '24.5.0201', 'M. ANUGRAH MUBAROK'],
            ['0092923049', '24.5.0125', 'M.KEVIN FIRMANSYAH'],
            ['0088066807', '24.5.0068', 'MOCHAMAD RAMLAN RAMDANI'],
            ['0092620863', '24.5.0014', 'MOULDY SHATAL KUSNADI'],
            ['0084815249', '24.5.0094', 'MUCHAMAD FACHRI ALWI NUR'],
            ['0095039384', '24.5.0218', 'MUHAMAD AKBAR AWALUDIN ZIDAN'],
            ['0098375745', '24.5.0085', 'MUHAMAD CIKAL VIZARO'],
            ['0084138827', '24.5.0316', 'MUHAMAD NATAN HARDIANSYAH'],
            ['0085356186', '24.5.0124', 'MUHAMAD RIFKY MAULANA'],
            ['0093517590', '24.5.0031', 'MUHAMAD SABTIAN'],
            ['0087594889', '24.5.0209', 'MUHAMAD SAMSUL RIZKI'],
            ['3081610541', '24.5.0340', 'MUHAMAD ZIBRAN MAULADI HAFIZD'],
            ['0091705099', '24.5.0341', 'MUHAMMAD ANWARUDIN'],
            ['0084815248', '24.5.0150', 'MUHAMMAD FACHRI MAULANA'],
            ['0083839120', '24.5.0103', 'MUHAMMAD IQBAL SAN'],
            ['0099346686', '24.5.0256', 'MUHAMMAD REZA ARRAFI'],
            ['0081926001', '24.5.0419', 'RANDY SATRIA UTAMA'],
            ['0091922683', '24.5.0151', 'REIVANDIO ABIE PRASTAMA MAHPUDIN'],
            ['3083492948', '24.5.0399', 'RIO PERDIYANSYAH'],
            ['3084559404', '24.5.0168', 'SULTAN SUNDANA'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 3, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
