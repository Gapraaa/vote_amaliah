<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XITKJ1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0087385989', '23.5.0372', 'ABDILLAH RAFI HARDIAN'],
            ['0087238152', '23.5.0142', 'ACHMAD SULISTIYO'],
            ['0073668732', '23.5.0172', 'AHMAD JAMALUDIN MARUP'],
            ['0076262653', '23.5.0122', 'DIMAS PUTRA RAMDHANI'],
            ['0081444871', '23.5.0272', 'DIRLI PRATAMA'],
            ['0089105903', '23.5.0136', 'FADILAH MUHAMMAD ZACKI'],
            ['0073053198', '23.5.0135', 'Kelvin Andreas'],
            ['0085022125', '23.5.0211', 'MOCHAMAD RAJIB ALFURQONI'],
            ['0086419394', '23.5.0085', 'MOCHAMAD RASYID PERMANA'],
            ['0084401173', '23.5.0003', 'MOHAMAD IKSAN YUDA NUGRAHA'],
            ['0086115868', '23.5.0123', 'MUHAMAD AFTSAB CASSIM RAZVI'],
            ['3085232925', '23.5.0042', 'Muhamad Dery Ferdiansyah'],
            ['0075413403', '23.5.0239', 'MUHAMAD FARHAN RAMDANI'],
            ['0081361862', '23.5.0175', 'MUHAMAD IKHSANUDIN'],
            ['0081121206', '23.5.0119', 'MUHAMAD NABIL AULIA'],
            ['0086707588', '23.5.0253', 'MUHAMAD RIPAN PEBRIAN'],
            ['0072060738', '23.5.0403', 'MUHAMAD ROBYANSYAH'],
            ['0072784109', '23.5.0067', 'MUHAMMAD ADITIA SURYA PRATAMA'],
            ['0089005127', '23.5.0360', 'MUHAMMAD DARUS PRATAMA FAJAR DINANTO'],
            ['0083471102', '23.5.0031', 'MUHAMMAD MIKAYLA ARRAFI'],
            ['0066085648', '23.5.0188', 'MUHAMMAD MUHTAR'],
            ['0082371622', '23.5.0039', 'MUHAMMAD NADZAR ROJA ABDULLAH'],
            ['0081727453', '23.5.0121', 'MUHAMMAD NUHBATUL FIKAR'],
            ['0087809586', '23.5.0236', 'MUHAMMAD REFAN TRIAWAN'],
            ['0082975984', '23.5.0209', 'MUHAMMAD ZAKKY MUBAROK'],
            ['0084909074', '23.5.0300', 'NYNDHIAZ ALLYSCHAFITRI'],
            ['0087605885', '23.5.0044', 'RIFA NOVIANTI'],
            ['0083137013', '23.5.0100', 'SHAQUILLE RENJIRO FIRLO P'],
            ['0072946174', '23.5.0018', 'WAVA SEPTIAWAN PRATAMA'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 9, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
