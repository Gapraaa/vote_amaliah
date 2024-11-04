<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIMP2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["3087227893", "23.6.0112", "AGNIA WIRDATUNISA"],
            ["0087864811", "23.6.0134", "ALFI NURHASANAH"],
            ["0082188367", "23.6.0279", "AZZAHRA JULIANTI FAHRUDIN"],
            ["0079768967", "23.6.0092", "DEA MELINDA"],
            ["0078962188", "23.6.0078", "DELA SETIA HANDYANI"],
            ["0088426403", "23.6.0131", "DIAN ESA PERMATASARI"],
            ["0079193620", "23.6.0025", "DIANA SEPTIANI"],
            ["0078999691", "23.6.0107", "ELGA PADILAH SARI"],
            ["0082847832", "23.6.0230", "FEBRIANI AYU FRIATNA"],
            ["0074885933", "23.6.0245", "GITA WIYAHRAHMAN"],
            ["0081267500", "23.6.0024", "INDRIYANI SRI RAHAYU"],
            ["0089964734", "23.6.0138", "INTAN SITI SHOFIA"],
            ["3085097850", "23.6.0287", "IRSYA SEPIA RAHMADANI"],
            ["0089075996", "23.6.0192", "JESICA AULIA NURLAELA SARI"],
            ["0081021437", "23.6.0197", "KEISHA PUTRI DHIYADHANA"],
            ["0088123405", "23.6.0263", "LISNA NURMALA SARI"],
            ["0088661820", "23.6.0235", "LYONES SHANAS WIDIJANTO"],
            ["0075128221", "23.6.0292", "NABILA APRILIA"],
            ["0088228327", "23.6.0337", "RATNAWATI KUSUMANING AYU"],
            ["0089678278", "23.6.0101", "RIZKYA CAILA FEBRYANTI"],
            ["0087375904", "23.6.0115", "SALSABILA"],
            ["0076420989", "23.6.0033", "SALWA AL SAKINAH B"],
            ["0082210339", "23.6.0036", "SITI AULIA"],
            ["0089889931", "23.6.0183", "SITI BILQIS SULTANIYAH"],
            ["0086546796", "23.6.0081", "SUSI SUSILAWATI"],
            ["0089886702", "23.6.0072", "SYATIRA AL HABSYI"],
            ["0087322122", "23.6.0093", "SYNTHIA JAMILY"],
            ["0085221514", "23.6.0327", "ZAHRA MARTHASYA AULIANTY"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 32, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
