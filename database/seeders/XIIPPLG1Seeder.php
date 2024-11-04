<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIPPLG1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0081918758', '22.5.0294', 'AL KENATARO RAJA AFGAN'],
            ['0078162456', '22.5.0321', 'ANDI MARDIANSYAH'],
            ['0073256256', '22.5.0408', 'AUDI APRIANSYAH'],
            ['0068849579', '22.5.0303', 'DANI SETIAWAN NOVIANSYAH'],
            ['0075615582', '22.5.0378', 'DIMAS MAULIDI ARDANA'],
            ['0079331647', '22.5.0198', 'FAHRI PURWANA HADI'],
            ['0075347510', '22.5.0160', 'FARHAN FATURAHMAN'],
            ['0068259909', '22.5.0407', 'GHAFFARA ARYA KELANA'],
            ['0076744783', '22.5.0083', 'HAIKAL GEOVANE PERMANA'],
            ['0074943860', '22.5.0390', 'IRFAN RIZKYA NUGRAHA'],
            ['0074136678', '22.5.0230', 'M. RAIHAN IBNU SYABRI'],
            ['0065317211', '22.5.0327', 'M. VIRGI RAMDANI'],
            ['0063794500', '22.5.0214', 'MOCHAMAD EGI DARMAWANSYAH'],
            ['0077838809', '22.5.0222', 'MUHAMAD ADIB JIRJIS'],
            ['0054718673', '22.5.0194', 'MUHAMAD NURJAMIL'],
            ['0079329411', '22.5.0387', 'MUHAMAD PERDIYANSYAH'],
            ['0063871884', '22.5.0428', 'MUHAMAD RAFLI KRIDO WAHONO'],
            ['0062700736', '22.5.0195', 'MUHAMAD RIVAL'],
            ['0085812930', '22.5.0202', 'MUHAMAD YESA'],
            ['0068818666', '22.5.0385', 'MUHAMAD YUSUF MAULANA'],
            ['0078848853', '22.5.0047', 'MUHAMMAD FAHRIANSYAH'],
            ['0074442893', '22.5.0172', 'MUHAMMAD FAJRI AWALUDIN'],
            ['0057713292', '22.5.0197', 'MUHAMMAD SYAHRUL PIKRIYANA'],
            ['0073146984', '22.5.0256', 'NADYA AYDI YUNIAR'],
            ['0062381880', '22.5.0203', 'NOVA HILDA FACHRIZAH'],
            ['0077707567', '22.5.0232', 'RADEN FAZRIAH SALSABILA AMMALIA'],
            ['0062919928', '22.5.0429', 'RAIHAN NAFISA'],
            ['0072553261', '22.5.0069', 'RIO VALDO APENDI'],
            ['0073496675', '22.5.0127', 'RIZQI PADIL DARMAWAN'],
            ['0067854447', '22.5.0196', 'SITI ANISA NUR FATWA'],
            ['0067659814', '22.5.0223', 'SYAM SHEKY HAFRIZAL'],
            ['0075448382', '22.5.0217', 'TIARA ARDITA SUPRIYO'],        
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 19, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
