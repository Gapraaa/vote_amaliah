<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XITKJ2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0066188149', '23.5.0198', 'Ali Akmal Zain'],
            ['0074593826', '23.5.0185', 'ALIKA NOVIANSYAH'],
            ['0088426687', '23.5.0333', 'APRI KURNIAWAN'],
            ['0081349589', '23.5.0074', 'EGA PRATAMA'],
            ['0078505400', '23.5.0027', 'FACHRI HASANI'],
            ['0077798419', '23.5.0248', 'ILHAM ARDIANSYAH'],
            ['0079025341', '23.5.0195', 'M. RASYA BAGJA PURNAMA'],
            ['0085978811', '23.5.0165', 'MOH.FACHRI AKBAR'],
            ['0079351679', '23.5.0298', 'MUCHAMAD RIZQI'],
            ['0079772705', '23.5.0283', 'MUCHAMMAD RYAN'],
            ['0089625488', '23.5.0240', 'MUHAMAD BULDAN ANWAR'],
            ['0084099312', '23.5.0014', 'MUHAMAD FAQIH NUR HAFID'],
            ['0082418033', '23.5.0373', 'MUHAMAD FEBRIANSYAH'],
            ['0072183961', '23.5.0149', 'MUHAMAD NASRUL SAPUTRA'],
            ['0071425541', '23.5.0206', 'MUHAMAD RIDWANULLOH'],
            ['0067335578', '23.5.0257', 'MUHAMMAD AKBAR RIZQULLAH'],
            ['0077495016', '23.5.0186', 'MUHAMMAD AZMA FARIDDUDIN'],
            ['0088744498', '23.5.0035', 'MUHAMMAD FADHLUN SANTOSO'],
            ['0073433344', '23.5.0374', 'Muhammad Hikmal Akmal'],
            ['0085148218', '23.5.0022', 'MUHAMMAD PUTRA RAMADHAN'],
            ['0082551733', '23.5.0001', 'REHAN'],
            ['0086188536', '23.5.0043', 'REZA PRATAMA BAHTIAR'],
            ['3072930786', '23.5.0375', 'WAFIQ MIFTAH FAUZAN'],
            ['0079196841', '23.5.0051', 'ZAHRAN MALIKI MUMTAZ'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 10, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
