<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIMP2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0075730123", "22.6.0177", "ALMA ZAHIRA SUGIARTO"],
            ["0062339542", "22.6.0246", "ALYA DZIKRA WULANDARI"],
            ["0074802526", "22.6.0101", "DEVINA AUDREY SABRINA HUTAGALUNG"],
            ["0079828145", "22.6.0002", "DEVINA AYU FEBRIYANTI"],
            ["0071913442", "22.6.0031", "DWI NUR AZIZAH"],
            ["0073352614", "22.6.0015", "FEBRY KHOERUNISA"],
            ["0079565513", "22.6.0292", "KHALISATUN NAYLA"],
            ["0066279730", "22.6.0164", "KURNIA RAMADANI"],
            ["0064975054", "22.6.0300", "LENI PERMATASARI"],
            ["0081927526", "22.6.0181", "MUHAMAD RIZQI AKBAR"],
            ["0073116138", "22.6.0271", "MUHAMAD SANI PURNAMA"],
            ["0064258700", "22.6.0360", "MUHAMMAD RIFGI ALIF ALFAUZAN"],
            ["0072673484", "22.6.0227", "NADIA PUTRI AISYAH"],
            ["0063768421", "22.6.0104", "NADIA ZAHRA YASINTA"],
            ["0072923646", "22.6.0078", "NAYLA SYEFANI"],
            ["0071895394", "22.6.0369", "NIA ALFILIANI"],
            ["0073016777", "22.6.0068", "RADI MAULANA"],
            ["0072373519", "22.6.0072", "RASYA SETIADI"],
            ["0072011817", "22.6.0444", "RHEINA KAYLA AZ ZAHRA"],
            ["0061276630", "22.6.0323", "SALSA NABILA"],
            ["0061477924", "22.6.0017", "SALWA NAFITA MULYADI"],
            ["0047234282", "22.6.0059", "SHANDRIKA HAERUNISA"],
            ["0073544924", "22.6.0154", "SHERINA ZHAFIRA MAULIDA"],
            ["0073917770", "22.6.0011", "SITI AMINAH"],
            ["0064308728", "22.6.0092", "SITI MAGVIRA NOVIANTI"],
            ["3079962000", "22.6.0270", "SITI SALWA AULIA"],
            ["0061969223", "22.6.0253", "SUCI RAHMADHANI"],
            ["0074411511", "22.6.0376", "SYAHLIA NURRAHMAN"],
            ["0068209078", "22.6.0216", "TANIA TANDAYU"],
            ["0076872362", "22.6.0074", "WILDA NURAINI"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 40, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
