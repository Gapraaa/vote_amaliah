<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIAK1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0074019478", "22.6.0009", "ADINDA SALSABILA"],
            ["0072152120", "22.6.0424", "AHMAD NURHADI"],
            ["0076472356", "22.6.0348", "ALIYA TURROFIAH ANWARY"],
            ["0082600084", "22.6.0146", "AMANDA AULIA GIZELA"],
            ["0062619033", "22.6.0397", "ANISA RAMADHANI"],
            ["0074649277", "22.6.0040", "CESSA SUBAGJA"],
            ["0063780963", "22.6.0242", "DESTIANI SILFANI"],
            ["0075718564", "22.6.0076", "DINDA ARISKA"],
            ["0071456374", "22.6.0157", "DWI ANINDYA PUTRI"],
            ["0077025245", "22.6.0240", "ENENG NUR CAHAYA"],
            ["0078728989", "22.6.0450", "LATHIFA NURROHIMAH"],
            ["0077018665", "22.6.0359", "MAURAD GIBRAN MALIKI"],
            ["0074475940", "22.6.0393", "MEILYSA SALSABILA"],
            ["0077135943", "22.6.0022", "MUHAMMAD ALPIN"],
            ["0063613170", "22.6.0147", "MUHAMMAD ARIFIN IHSAN"],
            ["0052511070", "22.6.0124", "MUHAMMAD JUNAIDI"],
            ["0085408960", "22.6.0224", "NASHWA RIAS SABRINA"],
            ["0079040753", "22.6.0226", "NURY ERVINA MUTIARA PERTIWI"],
            ["0069228521", "22.6.0211", "RISNA FAUZIAH"],
            ["0075218100", "22.6.0156", "SAFIRA ALINIAWATI"],
            ["0079183380", "22.6.0116", "SHINTA HIDAYAT"],
            ["0082703811", "22.6.0066", "SILHA VITA NINGRUM"],
            ["0074956859", "22.6.0207", "SITI NABILA ADAM"],
            ["0079983641", "22.6.0324", "SITI SOPIAH AL ULYA"],
            ["0077687701", "22.6.0329", "SYIFA HANIFAH ZAHRA"],
            ["0071069986", "22.6.0410", "TSARWA ZAKIATU RAHMAN"],
            ["0063942189", "22.6.0236", "ZAHARA HARTADINATI"],
            ["0077726927", "22.6.0326", "ZAHRA FIKRIYAH SALSABILA"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 36, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
