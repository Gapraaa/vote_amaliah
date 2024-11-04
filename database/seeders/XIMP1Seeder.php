<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIMP1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0082073005", "23.6.0156", "AMALIA AFRIANI"],
            ["0073922577", "23.6.0059", "ARISTIA CAHYANI"],
            ["0073026442", "23.6.0143", "AUDIA PUTRI SUKATMA"],
            ["0075947194", "23.6.0242", "BERLYAN DENIESA"],
            ["0088436978", "23.6.0204", "BILQIS ARLA MAHARANI"],
            ["0076876768", "23.6.0146", "CINTA MARCHA NABILA"],
            ["0071215615", "23.6.0266", "DENATA RASYIDAH BAHRI"],
            ["0081177155", "23.6.0191", "DESTI MEILANI PUTRI"],
            ["0073996525", "23.6.0048", "DEVI ROSDIANA"],
            ["0073547472", "23.6.0208", "ITA BELA"],
            ["0076556966", "23.6.0323", "KHAIRUNISA MULYA NAVIRA"],
            ["0082185486", "23.6.0021", "MAURA NURUL SUKMA"],
            ["0077033405", "23.6.0250", "MUHAMAD ALDIANSYAH"],
            ["0071729695", "23.6.0265", "MUHAMMAD FAJAR ARDIANSYAH"],
            ["0089219800", "23.6.0180", "MUTYA RESTYANA"],
            ["0077510824", "23.6.0171", "NABILA PUTRI"],
            ["0087999269", "23.6.0177", "NUR KAYLA RAHMANISA"],
            ["0082334687", "23.6.0028", "PRANESYHA KAMALITA PUTRI"],
            ["0071045235", "23.6.0339", "PRISKA GISELA"],
            ["0072534775", "23.6.0335", "RAISYA AZZAHRA RAMADHANI"],
            ["0077896975", "23.6.0237", "RAISYA PUTERI EKA MUSTAUFA"],
            ["0075199846", "23.6.0222", "RAISYA PUTRI KHAIRINA"],
            ["0081929621", "23.6.0229", "RAMA MARAHAI SOEKARNO"],
            ["0078129451", "23.6.0161", "RIMELVI DESTIANI"],
            ["0082022900", "23.6.0116", "RIZKA AZZAHRA"],
            ["0078780554", "23.6.0286", "SALWA SYABANI"],
            ["0086827261", "23.6.0071", "SHABDILLA FEBRIANA SAVIRA"],
            ["0087785944", "23.6.0050", "SIFA RAHMAWATI"],
            ["0086716635", "23.6.0176", "SILLY AFRILIA"],
            ["0081319334", "23.6.0190", "SITI RASITA ALDA PUTRI"],
            ["0079363655", "23.6.0055", "SITI SOVIATUNNISA AWALIYAH"],
            ["0088079375", "23.6.0269", "SITI SYAHWA AGUSTINA"],
            ["0085664623", "23.6.0342", "YANUARITA MAHARANI SUWANDI"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 31, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
