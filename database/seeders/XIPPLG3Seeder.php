<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIPPLG3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0079899568', '23.5.0164', 'AL MUTAKIN'],
            ['0085941154', '23.5.0294', 'ALFRIZA AKHMAD RAHADI'],
            ['0085929031', '23.5.0077', 'ANGGA SAPUTRA'],
            ['0073707637', '23.5.0120', 'ARIFIN ILHAM HANAFI'],
            ['0087089794', '23.5.0244', 'ARSYI RUDIYAT'],
            ['3098258416', '23.5.0316', 'Artha Parulian Silitonga'],
            ['0083771436', '23.5.0016', 'BURDAHUMA'],
            ['0074506167', '23.5.0232', 'FATTIH FAWWAZ SUTISNA'],
            ['0073531616', '23.5.0105', 'ILHAM DESQI WARDANA'],
            ['0077447167', '23.5.0075', 'INDRA HERLAMBANG SETIAWAN'],
            ['0075136598', '23.5.0047', 'KAYLA NAFEZA RAMADHANTI'],
            ['0086163475', '23.5.0317', 'M. ILHAM RAI\' SUBAGJA'],
            ['0088964406', '23.5.0132', 'MUHAMAD HARDI'],
            ['0076592606', '23.5.0212', 'MUHAMMAD AZKA MAULIDINA'],
            ['0084743670', '23.5.0259', 'MUHAMMAD FAKHRI MUBAROK'],
            ['0082189902', '23.5.0104', 'MUHAMMAD FAUZAN PRATAMA'],
            ['0088185470', '23.5.0009', 'MUHAMMAD ILYA HAMZAH'],
            ['0084932967', '23.5.0332', 'Muhammad Sidqi Al Huwaidi Harahap'],
            ['0086660150', '23.5.0325', 'NISWATUL HASANAH'],
            ['0089930523', '23.5.0385', 'RAYYA FAWUZIYYAH'],
            ['0085781539', '23.5.0111', 'RIZAL ABDURAHMAN'],
            ['0081635046', '23.5.0308', 'Safa Sopian Ali Basya'],
            ['0082607715', '23.5.0169', 'SHILA ISMA AULIA'],
            ['0071923410', '23.5.0302', 'SITI ANISA SULISTIAWATI'],
            ['0079750223', '23.5.0063', 'SITI SAHARA KHAERUNNISA'],
            ['0085625251', '23.5.0261', 'SYAHRUL RIZAL'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 14, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
