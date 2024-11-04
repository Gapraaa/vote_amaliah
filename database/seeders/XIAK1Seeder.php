<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIAK1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0075616033", "23.6.0405", "AFRA BAIATUN NISADANI"],
            ["0073702448", "23.6.0125", "AHMAD JUNAEDI"],
            ["0084216298", "23.6.0328", "AMARA SENJANA AGUSTIA"],
            ["0073490792", "23.6.0351", "ANGELINA RUSLI"],
            ["0087496984", "23.6.0058", "ARSILA DEA RAHAYU"],
            ["0085599998", "23.6.0221", "DISA AULIA"],
            ["0088603062", "23.6.0355", "ESTEFANI DA COSTA"],
            ["0077419517", "23.6.0162", "FARIZ RUSTAM"],
            ["0089916860", "23.6.0311", "FEBY AMELIASARI"],
            ["0089853986", "23.6.0103", "FIRLLY FEBRIANTI SOFIAN"],
            ["0078177570", "23.6.0038", "INDRA BAYU WANA PUTRA"],
            ["3075179130", "23.6.0391", "JAUFA LAILA"],
            ["0086116303", "23.6.0017", "JIHAN HUMAIRA"],
            ["0081604028", "23.6.0170", "KANYA SITI NORRAZZLLY SOBARY"],
            ["0086878887", "23.6.0070", "KHAIRA YASQI"],
            ["0079576038", "23.6.0184", "MEGAWATI"],
            ["0087403232", "23.6.0357", "MUHAMAD RADHIT RAFIKI"],
            ["0086713380", "23.6.0282", "NAILA SHALSABILA"],
            ["0071061423", "23.6.0199", "NASHIRA AMALIA"],
            ["0086081651", "23.6.0299", "NASHWA MAULIDYA NUR HIKMAH"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 28, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
