<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIAK2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0066996180", "22.6.0296", "AGISNA MAULIDA"],
            ["0071338805", "22.6.0404", "AGNIA NAFEEZA SOFWAN"],
            ["0064221495", "22.6.0093", "ALIA THALITA SAKILAH"],
            ["0073636130", "22.6.0094", "ANA SEPTIANA"],
            ["0065959253", "22.6.0353", "ANDRAMEDYA SAKA SANGDARA"],
            ["0072633871", "22.6.0363", "BELA MIYANTI"],
            ["0066551605", "22.6.0188", "BUNGA HASANAH ISKANDAR"],
            ["0072637930", "22.6.0200", "DEA SAFARINA"],
            ["0065799054", "22.6.0029", "DINAR SYAWALITA"],
            ["0078812197", "22.6.0384", "ELA LESTARI"],
            ["0068081710", "22.6.0405", "ENENG SITI KHOERIDAH"],
            ["0074510194", "22.6.0379", "HANIFA MAULIDA"],
            ["0069731545", "22.6.0167", "INTAN SULISTIAWATI"],
            ["0074653008", "22.6.0417", "LINDA WIDIYAWAN"],
            ["0068076721", "22.6.0205", "MITA OKTAVIANI"],
            ["0075972945", "22.6.0030", "NADYA AZZAHRA"],
            ["0072590623", "22.6.0398", "NATASYA AMALIA"],
            ["3057137249", "22.6.0418", "NINDI DESIANI"],
            ["0067322996", "22.6.0285", "NURFADIA CHALISA"],
            ["0062299112", "22.6.0105", "RATU SITI DILA ARMILA"],
            ["0063308677", "22.6.0190", "SAFIRA NURUL ARIFIN"],
            ["0073575905", "22.6.0155", "SITI FARHATUL WILDA"],
            ["0061344001", "22.6.0319", "SITI FAUZIAH RAHMAWATI"],
            ["0062760996", "22.6.0171", "SRI AULIA"],
            ["0074660839", "22.6.0158", "SRI NAYRA FIRLIANSYAH"],
            ["0064040059", "22.6.0228", "SYAHLA ATHLIA"],
            ["0074484856", "22.6.0277", "ULFA KAMARULLAH"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 37, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
