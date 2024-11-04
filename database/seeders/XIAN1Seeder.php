<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIAN1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0083761546', '23.5.0262', 'ACHMAD KHALID MESHAL'],
            ['0079793231', '23.5.0076', 'AGISKA SHANIA RACHMAN'],
            ['0082414773', '23.5.0201', 'ALDI PARI FAWADJAL'],
            ['0075739014', '23.5.0057', 'ARIA BAGJA MAULANA'],
            ['0088240683', '23.5.0371', 'ARIEFA RAUHANAYA OEHLERS'],
            ['0087548619', '23.5.0264', 'AUREL PUTRI FIANDA'],
            ['0077109307', '23.5.0284', 'AYSEL ABHISALY UMAM'],
            ['0081959365', '23.5.0346', 'DIMAS ARIA NUGRAHA'],
            ['0082817867', '23.5.0034', 'JAHROTU SITA'],
            ['0075241300', '23.5.0247', 'JIBRIL RUDIAT'],
            ['0069167542', '23.5.0275', 'Kevin Gunawan'],
            ['0083436336', '23.5.0356', 'M. Fathurohman Hidayat'],
            ['0087374211', '23.5.0010', 'M.ZIDAN FIRDAUS'],
            ['0072332881', '23.5.0150', 'MAULANA IKSAN'],
            ['0081023338', '23.5.0069', 'MUHAMAD ALFAREIL FEBRIYAN HARIZKIE'],
            ['0071398998', '23.5.0350', 'MUHAMAD ANDRA VIRGIAWAN'],
            ['0074894262', '23.5.0387', 'MUHAMAD FAJRI HERMAWAN'],
            ['0085063995', '23.5.0210', 'MUHAMAD FEBRIANSYAH PRATAMA'],
            ['0071855523', '23.5.0256', 'MUHAMAD FIRDAN'],
            ['0089507270', '23.5.0296', 'MUHAMAD ILHAM FATHURAHMAN'],
            ['0087022914', '23.5.0155', 'Muhamad Tristan'],
            ['0085291624', '23.5.0347', 'MUHAMAD WISTARA RENDRA'],
            ['0089594896', '23.5.0207', 'MUHAMMAD BAGAS AR-RIZKY'],
            ['0078367830', '23.5.0260', 'MUHAMMAD REYHAN AZIZ'],
            ['0076363512', '23.5.0276', 'MUHAMMAD REYHAN PADILAH'],
            ['0067481153', '23.5.0388', 'NADHILA MEIRIZKI NUGROHO'],
            ['0076570243', '23.5.0389', 'RISKY MAULANA SAPUTRA'],
            ['0074083610', '23.5.0140', 'SITI NAZIA AULIA'],
            ['0084481241', '23.5.0026', 'SITI ROBIAH ADAWIYAH'],
            ['0078134923', '23.5.0390', 'SUTAN FATIR RESTU AJI'],
            ['0089932678', '23.5.0167', 'Syahnaz Zahra Ayu'],
            ['0084603676', '23.5.0089', 'THYARA NUR RAFA'],
            ['0073965421', '23.5.0331', 'ZASKIA RAMADANDRI PUTRI'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 8, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
