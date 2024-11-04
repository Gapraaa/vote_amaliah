<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XMP3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0095682225", "24.6.0174", "ALWISYAH TULAZZAHRA"],
            ["0093308525", "24.6.0227", "ALYA PUTRI RAHAYU"],
            ["0081977925", "24.6.0226", "ANGGITA AZALIA"],
            ["0095916333", "24.6.0196", "ASHA HUSNIYAH KAMILA"],
            ["0085562577", "24.6.0271", "CARISA PUTRI RAHMA DANI"],
            ["0089033092", "24.6.0257", "DEANISA SAFIRA"],
            ["3095421670", "24.6.0046", "DELIA SAFITRI"],
            ["0097608506", "24.6.0098", "HAYFA TIARA FUTRI K"],
            ["0085507465", "24.6.0146", "INDAH BUNGA ZAENAL"],
            ["0097541014", "24.6.0408", "KHUSUL KHOTIMAH"],
            ["0095985808", "24.6.0306", "MAWAR YULIA HASANAH"],
            ["3098308268", "24.6.0300", "MAZAYA SHAFA FRAMASTI"],
            ["0091038197", "24.6.0057", "MUHAMMAD ALFARIZI"],
            ["0085355833", "24.6.0069", "MUHAMMAD FAHRIZA"],
            ["0091992466", "24.6.0261", "MUHAMMAD IBNU NABIL"],
            ["0097838518", "24.6.0175", "NADYA ULYA NUR WAFA"],
            ["0083895192", "24.6.0154", "NANDA NOVA AULIA"],
            ["0094581628", "24.6.0097", "NEZA HAIFA RAMADHANI"],
            ["0088095394", "24.6.0056", "NOVI AULIA"],
            ["0095360841", "24.6.0088", "SALWA NUR AULIA"],
            ["0088901110", "24.6.0120", "SANDYA KEYSHA ANWAR"],
            ["0085047450", "24.6.0192", "SHINTA AULIA"],
            ["0096815886", "24.6.0105", "SITI QARINA SHAFIRA KAMAL"],
            ["0083935445", "24.6.0292", "SITI RAHMAWATI"],
            ["0096273284", "24.6.0139", "VIONA AMELIA"],
            ["0092182000", "24.6.0315", "VIONA DAMAYANTI"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 25, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
