<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIITKJ2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0078901049', '22.5.0448', 'AHMAD ALWAN HAFAZAH'],
            ['0061423076', '22.5.0201', 'AHMAD RIZKY FIRMANSYAH'],
            ['0078920342', '22.5.0067', 'AJI CAHYA MUSTAQIM'],
            ['0079638837', '22.5.0097', 'ALDI MAULANA'],
            ['0077738006', '22.5.0449', 'ALWI PRATAMA'],
            ['0066494478', '22.5.0204', 'ANDRI ALANSYAH'],
            ['0067023052', '22.5.1251', 'ANGGI RESTU'],
            ['0075386585', '22.5.0170', 'BAGAS BUDIANTO'],
            ['0073977203', '22.5.0021', 'DAFA AGASYA DELIYARDI'],
            ['0075040265', '22.5.0048', 'DIMAS PUSPITO DIPENI'],
            ['0076268484', '22.5.0255', 'FABIAN PUTRA AQIL SYAFIQ'],
            ['0067142422', '22.5.0262', 'GALIH SATRIO PERMANA'],
            ['0074726606', '22.5.0049', 'HAIKAL MAULID AL AYUBI'],
            ['0068153366', '22.5.0052', 'IRSYAD FA\'IQ FAJARI'],
            ['0064200968', '22.5.0337', 'M ZALVI HERMAWAN'],
            ['0076912301', '22.5.0276', 'M. HAIKAL RIZKY ABDILLAH'],
            ['0072677213', '22.5.0027', 'MOHAMMAD SYARBIAN FIRMANSYAH'],
            ['0072244334', '22.5.0286', 'MUHAMAD FADIHILAH'],
            ['0063386673', '22.5.0142', 'MUHAMAD FIKRI FAHREZI'],
            ['0077226116', '22.5.0006', 'MUHAMAD HAIKAL SAPUTRA'],
            ['0061360527', '22.5.0140', 'MUHAMAD INDRA HERDIANSYAH'],
            ['0076153235', '22.5.0139', 'MUHAMAD RIFA FIRDAUS'],
            ['0072056511', '22.5.0176', 'MUHAMAD SAMBAS'],
            ['0068727291', '22.5.0336', 'MUHAMAD WAHAB HUSAENI'],
            ['0069698192', '22.5.0358', 'MUHAMMAD AZRUL ANANDA'],
            ['0061273173', '22.5.0095', 'MUHAMMAD DAFFA SIDQI'],
            ['0073461845', '22.5.0150', 'MUHAMMAD HAEKAL AGUSTINE'],
            ['0063385177', '22.5.0018', 'MUHAMMAD NADZRIL HAMDALLAH RIDWAN'],
            ['0066226898', '22.5.0103', 'MUHAMMAD RAFLI'],
            ['0062882065', '22.5.0035', 'MUHAMMAD RIZKY ALFAREZY'],
            ['0075652304', '22.5.0020', 'MUHAMMAD ROBBY SANIATY'],
            ['0079722737', '22.5.0166', 'RAYHAN RAYA PRATAMA'],
            ['0075173260', '22.5.0143', 'REYHAN RHIAD RAMDANI'],
            ['0072091400', '22.5.0193', 'SYAHRIL ANANDA FACHRI'],
            ['0069850013', '22.5.0436', 'SYAMSI AL SYABANI'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 18, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
