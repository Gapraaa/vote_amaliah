<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XPPLG1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0071526115', '24.5.0169', 'ADI PRAMBUDI HIDAYAT'],
            ['0091299655', '24.5.0137', 'AKBAR ILHAM RAMADAN'],
            ['0088319223', '24.5.0360', 'ALYA DESTIANA'],
            ['0096526595', '24.5.0327', 'ANDINI NUR HAYATI'],
            ['3094875888', '24.5.0260', 'AQUILLIA PUTRI TERPILIH RAHMADILLAH'],
            ['0093934472', '24.5.0134', 'FAQIH AL WANNUDI'],
            ['0093140042', '24.5.0157', 'FILO CAESARIO F'],
            ['0099449501', '24.5.0249', 'HAIFA NAWAL AZKA'],
            ['0099361569', '24.5.0117', 'IBRAHIM MAULUDI HABIBI'],
            ['0088312813', '24.5.0048', 'KEISYA SALAMATU ZAHRA'],
            ['0096772995', '24.5.0145', 'KHAIRU TAUFIQURROHMAN'],
            ['0099764051', '24.5.0246', 'M. AQILLA KUSUMA'],
            ['0095951737', '24.5.0022', 'MAGHFI GIFFARI ALDZAN'],
            ['0096441990', '24.5.0263', 'MELYNDA PUTRI RUSFIANI'],
            ['0093241551', '24.5.0286', 'MUAMAR KHADAVI AL-GHAZALI'],
            ['0091132565', '24.5.0008', 'MUHAMAD ADITYANSYAH'],
            ['0081154980', '24.5.0195', 'MUHAMAD FAHREZI AL ZIKRIE'],
            ['0093763035', '24.5.0114', 'MUHAMAD FAIZ BAYU PRATAMA'],
            ['0081277823', '24.5.0092', 'MUHAMAD REYHAN ARDIANSYAH'],
            ['0094969309', '24.5.0155', 'MUHAMAD RIZKY SETIAWAN'],
            ['0093328461', '24.5.0217', 'MUHAMMAD IBNI ALZAM'],
            ['3086434864', '24.5.0235', 'MUHAMMAD IQBAL NASRULLAH'],
            ['0095561912', '24.5.0401', 'PANDU RESTU PRIANTO'],
            ['0096709243', '24.5.0253', 'RATU RITZ CALTON KALENDARA'],
            ['0095065224', '24.5.0118', 'RIFKY HILMAWAN'],
            ['0088495209', '24.5.0007', 'RIZAL FAUZAN ABDULLAH'],
            ['0096789131', '24.5.0277', 'SALSYABILA NUR LATHIFA'],
            ['0086566434', '24.5.0357', 'SERENA MEILANI PUTRI'],
            ['0099026111', '24.5.0116', 'SITI FANNIA FATIMAH'],
            ['0096922100', '24.5.0417', 'TIO MAULANA HIDAYATULLAH'],
            ['0081801577', '24.5.0188', 'VIZRAN RAMADHAN'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 4, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
