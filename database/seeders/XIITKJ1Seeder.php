<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIITKJ1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0068411721', '22.5.0416', 'ABDUL JALI'],
            ['0068319072', '22.5.0395', 'ACHMAD QODRI RAMADHAN'],
            ['0074537159', '22.5.0005', 'AHMAD RIFAI'],
            ['0077074446', '22.5.0265', 'AJRIL AZKIA'],
            ['0071819832', '22.5.0392', 'ALDINO RIYO PARYONO'],
            ['0061018003', '22.5.0309', 'ALFIANSYAH MAHESA PUTRA'],
            ['3076767443', '22.5.0085', 'AZHAR PEBRIAN'],
            ['0072156006', '22.5.0191', 'DAFA ALIMAN HAKIM'],
            ['0062485937', '22.5.0153', 'FABIO JULIANSYAH CANAVARO'],
            ['0079683082', '22.5.0169', 'GILLY ANDHIKA SANDI'],
            ['0074339049', '22.5.0184', 'IHSAN RAMADHAN PUTRA PERMANA'],
            ['0077107761', '22.5.0301', 'JOSEFH EDWAR PANJI NUGRAHA'],
            ['0069848326', '22.5.0284', 'M ADEN AL FARABI'],
            ['0079325400', '22.5.0062', 'M ARIF RAMADAN'],
            ['0074657937', '22.5.0367', 'M FAUZAN SEPTIAN S'],
            ['0068867510', '22.5.0165', 'M. ELGIFA BADRUTAMAM'],
            ['0063552586', '22.5.0004', 'M. MUSFIKH AUMURROFIKASIDIK'],
            ['0066863330', '22.5.0145', 'MUHAMAD ARYA PAMUNGKAS'],
            ['0069827059', '22.5.0305', 'MUHAMAD FAJR MAULANA'],
            ['0073151948', '22.5.0113', 'MUHAMAD HARSHAL AZMI'],
            ['0062598962', '22.5.0100', 'MUHAMAD RAMZI ALBANI'],
            ['0079318332', '22.5.0144', 'MUHAMAD RIDHO MARDIANSYAH'],
            ['0078930423', '22.5.0111', 'MUHAMAD SANDI MAULANA'],
            ['0069255171', '22.5.0138', 'MUHAMAD ZULFIANSYAH'],
            ['0061254441', '22.5.0063', 'MUHAMMAD CHOERUL INSAN'],
            ['0062041438', '22.5.0134', 'MUHAMMAD FADILAH'],
            ['0075591623', '22.5.0178', 'MUHAMMAD JIHAN'],
            ['0079722038', '22.5.0386', 'MUHAMMAD NABHAN AKBAR'],
            ['0077845414', '22.5.0409', 'MUHAMMAD RAIHAN ZABRI'],
            ['0073782291', '22.5.0081', 'MUHAMMAD REYHAN TARIGAN'],
            ['0076353234', '22.5.0316', 'MUHAMMAD RUDI HERDIYANSYAH'],
            ['0077870335', '22.5.0251', 'RASYA DAVID PAMUNGKAS'],
            ['3068407428', '22.5.0435', 'RIFKI HILMAN M'],
            ['0066217165', '22.5.0046', 'RIFKI PADILAH'],
            ['0074620897', '22.5.0137', 'SAGARA AULIA ASALAM'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 17, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
