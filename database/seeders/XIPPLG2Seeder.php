<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIPPLG2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0072178795', '23.5.0402', 'A. MALIK IBRAHIM'],
            ['0087045051', '23.5.0329', 'ABDUL AZIS MAULANA IBRAHIM'],
            ['0089977166', '23.5.0083', 'AGUNG GUMELAR'],
            ['0081869755', '23.5.0200', 'ANDIKA PUTRA PRATAMA'],
            ['0082091156', '23.5.0361', 'ATHALA SHAKILARASKA'],
            ['0077683892', '23.5.0345', 'AULIA LESTARI'],
            ['0083192626', '23.5.0065', 'AYUDYA SABRINA MUKTI'],
            ['0085363650', '23.5.0376', 'AZZAHROTUS SYIFA'],
            ['0077156805', '23.5.0305', 'DIMAS JUNIANSYAH'],
            ['0078612025', '23.5.0166', 'FITRI OKTAVIA'],
            ['0078148945', '23.5.0348', 'HAIFA SYAHLA NUR SABRINA'],
            ['0077894947', '23.5.0330', 'HARSYA RAHADIAN PUTRA NURDIN'],
            ['0083837104', '23.5.0324', 'M FACHRI SANUSI'],
            ['0073270180', '23.5.0088', 'MUHAMAD AIDIL ADHA'],
            ['0082957959', '23.5.0384', 'MUHAMAD ALDO ABDILLAH ROJAN'],
            ['0079753399', '23.5.0241', 'MUHAMAD FAHMILATHUN'],
            ['0076983465', '23.5.0312', 'MUHAMAD FAREL RAMADANI'],
            ['0088493890', '23.5.0377', 'MUHAMAD FITRAH PUTRA KOMARUDIN'],
            ['0082453190', '23.5.0249', 'MUHAMAD MARIO'],
            ['0082994206', '23.5.0227', 'MUHAMAD RIZIQ IBRAHIM MUSA'],
            ['3094983893', '23.5.0382', 'MUHAMMAD AL FAHRI RAMADHAN'],
            ['0081752103', '23.5.0250', 'MUHAMMAD FAHRI NUR ROBBI'],
            ['0078622504', '23.5.0303', 'MUHAMMAD FIRZA NAJMUDIN PUTRA RAIS'],
            ['0077673795', '23.5.0060', 'MUHAMMAD RAIHAN FIRDAUS'],
            ['0081763946', '23.5.0297', 'MUHAMMAD ZIDAN SAPUTRA'],
            ['0084344787', '23.5.0095', 'NAUFAL KHAERUL ANWAR'],
            ['0079541720', '23.5.0147', 'RAIHAN SAMI'],
            ['0073262372', '23.5.0062', 'SANDI'],
            ['0075034493', '23.5.0008', 'SATRIO AZKA RITADJI'],
            ['0077061492', '23.5.0386', 'SHAFWAN RIZIQ BAWAZIER'],
            ['0072426107', '23.5.0004', 'SINTIA SUPRAPTO'],
            ['0095917426', '23.5.0052', 'SITI MARSYA MAHARANI'],


        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 13, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
