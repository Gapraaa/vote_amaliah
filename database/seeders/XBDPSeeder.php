<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XBDPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0085463191', '24.6.0318', 'ADAM MALIK AKMARULLOH'],
            ['0091503791', '24.6.0149', 'ALFARO VELDA PUTRA SHANI'],
            ['3096633636', '24.6.0113', 'ANINDYA CAHYA KUSUMA'],
            ['3081879884', '24.6.0356', 'ARKHAN RIZKY RAMADHAN'],
            ['0094742876', '24.6.0291', 'DAVA ASHABUL'],
            ['0091965985', '24.6.0179', 'DWI PUTRI SUKMAWATI'],
            ['0099003636', '24.6.0404', 'ERNA DWI LESTARI'],
            ['0081915642', '24.6.0350', 'FAHRI ISMAIL'],
            ['0095186087', '24.6.0372', 'HAIKAL AKBAR SYABANI'],
            ['0094530074', '24.6.0407', 'LAURA CLAUDIYA ANINDIRYA'],
            ['0086623176', '24.6.0338', 'LISNA NURFAZIA ULFA'],
            ['0096399796', '24.6.0229', 'M. IRHAM MAULANA'],
            ['0089423694', '24.6.0020', 'M. LUTHFI IRWANSYAH'],
            ['0096469455', '24.6.0348', 'MOHAMAD DIRJASUYUTIISKI'],
            ['0094498878', '24.6.0380', 'MUH. FAUDHYL RAMADHAN'],
            ['3077505016', '24.6.0170', 'MUHAMMAD HERU'],
            ['0084284806', '24.6.0418', 'NUR RAZKA FAUZIYAH'],
            ['3061717412', '24.6.0311', 'NATASYA AULIA DESTIANI'],
            ['0081831361', '24.6.0026', 'RADITYA GUSTI PRATAMA'],
            ['0098607360', '24.6.0193', 'RIFKI MAULANA'],
            ['0082601050', '24.6.0063', 'SHERIN DESTIANA A'],
            ['0091154076', '24.6.0212', 'SHIRAZ ARDANA'],
            ['0084637940', '24.6.0333', 'TSALSABILA SITI JANATHA'],
            ['0092492059', '24.6.0320', 'YASMIN'],
            ['3096697728', '24.6.0052', 'ZASKIA AULIA PUTRI'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 22, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
