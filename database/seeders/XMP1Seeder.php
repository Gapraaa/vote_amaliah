<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XMP1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0093125389", "24.6.0096", "AIDA RAMADANI"],
            ["0089516252", "24.6.0130", "ALVIAN PUTRA ARDHANI"],
            ["0088981689", "24.6.0228", "ANGGI EKA OKTAWIANSAH"],
            ["0091501587", "24.6.0163", "ANILDA LESTARI"],
            ["0093711933", "24.6.0220", "ANISA SYAHRANI"],
            ["0082558834", "24.6.0136", "ASYA NADIRA AGUSMANSYAH"],
            ["0092091099", "24.6.0004", "DARA AYU ALTAFUNNISA"],
            ["0098154557", "24.6.0368", "EVA SYAFIRA"],
            ["3082893345", "24.6.0390", "FADLI WIJAYA AZHAR"],
            ["0085918597", "24.6.0342", "INDAH BUNGA LESTARI"],
            ["0094976093", "24.6.0266", "KANIA PUTRI RAMADHAN"],
            ["0099026048", "24.6.0171", "LESTARI SAPITRI"],
            ["0083302132", "24.6.0237", "M.FARHAN ZEINJULI"],
            ["0088573479", "24.6.0207", "MAULANA HAFIZ"],
            ["3098323455", "24.6.0259", "MUHAMMAD LUTFI HASAN"],
            ["0085233028", "24.6.0128", "MUHAMMAD ZACKY NAHDIAWAN"],
            ["0083377533", "24.6.0121", "NIDA NURHASANAH"],
            ["0091835000", "24.6.0381", "NITA HERAWATI"],
            ["3082497625", "24.6.0140", "NOPI YANTI"],
            ["0085238496", "24.6.0077", "NUR ALIZA RAMADHANI"],
            ["3085764211", "24.6.0030", "PUTRI FIRYAL HUSNIYYA"],
            ["0099388345", "24.6.0352", "RADEN NAFILAH AMALIA"],
            ["0094694694", "24.6.0211", "RIFKI APRIANSYAH"],
            ["0091428468", "24.6.0189", "SASKIA BUNGA K"],
            ["3089238949", "24.6.0278", "SINTA FAUZIAH"],
            ["0086537959", "24.6.0053", "SITI NUR AMELIA SARI"],
            ["0087321778", "24.6.0254", "SITI NURUL AZIZAH"],
            ["3081051897", "24.6.0358", "SITI SHIFANNY SAPITRI"],
            ["0096186826", "24.6.0019", "SITI SILVIA"],
            ["0087421146", "24.6.0396", "SOFIA NURAZIZAH"],
            ["0097974742", "24.6.0389", "VHANESA PUTRI RAMADANI"],
            ["0095974976", "24.6.0334", "VIOLA LOLITA HUMBARA"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 23, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
