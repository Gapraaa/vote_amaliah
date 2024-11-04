<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIPPLG2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0135648411', '22.5.0233', 'ANDHIKA RIZKI RAMADHAN'],
            ['0066760361', '22.5.0229', 'ANDRIANA'],
            ['0076666259', '22.5.0243', 'BINTANG AKBAR SUTJIPTO'],
            ['0075318861', '22.5.0075', 'DIMAS ENGGAR PUTRA'],
            ['0068541466', '22.5.0206', 'FAHRI ANDRA PRATAMA'],
            ['0079369135', '22.5.0183', 'FARHAN BAGAS SATRIANO'],
            ['3071097555', '22.5.0019', 'FIRDA JULVIANA'],
            ['0076112735', '22.5.0038', 'HABIB MUHAMAD ALATAS'],
            ['0064682091', '22.5.0375', 'HARSYA AKMAL PUTRA'],
            ['0073573307', '22.5.0372', 'LIA NUR ALAWIAH WAHDAH'],
            ['0071220592', '22.5.0382', 'MAELRIDZKY KAHIDZ AGDANA'],
            ['0079855537', '22.5.0054', 'MELISA LIANI PUTRI'],
            ['0066265230', '22.5.0349', 'MUHAMAD ADITYA DARMAWAN'],
            ['0078847075', '22.5.0328', 'MUHAMAD AKBAR RAYVI'],
            ['0074167490', '22.5.0123', 'MUHAMAD PHAZRI SEPTIAN'],
            ['0072201197', '22.5.0279', 'MUHAMAD RAFFY ARASYA'],
            ['0067382553', '22.5.0055', 'MUHAMAD RIVALDY FIRDAUS'],
            ['0068292531', '22.5.0298', 'MUHAMAD RIZKY ALFIANSYAH'],
            ['0071916472', '22.5.0427', 'MUHAMAD ZAENAL ABIDIN'],
            ['0068940977', '22.5.0189', 'MUHAMMAD EL SHIRAZY NADIN'],
            ['0074478977', '22.5.0087', 'MUHAMMAD FIKRI'],
            ['0063909847', '22.5.0414', 'MUHAMMAD NAUFAL RAHMATULLAH'],
            ['0062734280', '22.5.0099', 'NAFISA JULIANSAH SAPUTRA'],
            ['0078908201', '22.5.0333', 'NAVITA AYU DIAN PRATIWI'],
            ['0062912659', '22.5.0355', 'RADEN MUHAMAD FATHURAHMAN WIJAYA'],
            ['0062200126', '22.5.0315', 'RENDI SAPUTRA'],
            ['0064170113', '22.5.0346', 'REZA WIRAKUSUMA'],
            ['0071432300', '22.5.0377', 'SAMI NABHAN ISKANDAR'],
            ['0072809502', '22.5.0430', 'SITI FADILAH FEBRIANI'],
            ['0075377759', '22.5.0268', 'SITI GINAYAH ADAWIYAH'],        
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 20, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
