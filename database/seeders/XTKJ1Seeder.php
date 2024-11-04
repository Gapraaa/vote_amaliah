<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XTKJ1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0087714566', '24.5.0001', 'ABDUL FAQIH YAMANI'],
            ['0082248049', '24.5.0387', 'AHMAD AL-HAKIM'],
            ['0085231571', '24.5.0199', 'ALIF AL-MUDKHIR NASABOE'],
            ['0072283073', '24.5.0258', 'ANGGA ARDIAN SAPUTRA'],
            ['0088029969', '24.5.0264', 'AUFADA ZAQI'],
            ['0083268002', '24.5.0202', 'ERLANGGA ATMA JAYA'],
            ['3098378998', '24.5.0309', 'FIKRI KHALID ARRABIH'],
            ['0091841896', '24.5.0177', 'IBRAHIM ZARKASIH'],
            ['0099993815', '24.5.0395', 'JAYADI INDRA SUKMANA'],
            ['0098608838', '24.5.0276', 'KHALISA DIRNA'],
            ['0088794660', '24.5.0135', 'LUTHFI SAKHI ZAIDAN'],
            ['0086129324', '24.5.0285', 'M. ALDES ZULFIQAR'],
            ['0087999147', '24.5.0119', 'MARIO SANGGRA HOTMA'],
            ['0095945002', '24.5.0231', 'MELANI ANGGRAENI'],
            ['0099914981', '24.5.0221', 'MOCH FAIS FIRDAUS'],
            ['0099498587', '24.5.0054', 'MUHAMAD BARA RIZQI'],
            ['0083363242', '24.5.0074', 'MUHAMAD DINAR HIDAYAT'],
            ['3093347509', '24.5.0416', 'MUHAMAD HAIKAL'],
            ['0088395295', '24.5.0413', 'MUHAMAD KHUSNUL SIDIK'],
            ['0086341800', '24.5.0138', 'MUHAMAD NOVAL'],
            ['0097527639', '24.5.0343', 'MUHAMAD RAFLI KELVIANSYAH'],
            ['3098299061', '24.5.0295', 'MUHAMAD SULTON RIZAL HAFDINATA'],
            ['0097715723', '24.5.0131', 'MUHAMMAD HENDRIANSYAH ATMOKO'],
            ['0097230950', '24.5.0383', 'MUHAMMAD MARSHAL SURYA WAHAB'],
            ['0089925268', '24.5.0391', 'MUHAMMAD RAIHAN NABAWI'],
            ['0096977367', '24.5.0280', 'NAYLA FEBIOLA'],
            ['0081874450', '24.5.0028', 'RAJATAN ADRILA PUTRA'],
            ['0092006633', '24.5.0055', 'RAZMA AVTA NUGRAHA'],
            ['0083610915', '24.5.0376', 'REZA RAMDANI']
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 1, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
