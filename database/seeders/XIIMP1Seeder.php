<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIMP1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0067662174", "22.6.0235", "ALYA RASYA AULIA"],
            ["0075293734", "22.6.0107", "ASTI FUJI LESTARI"],
            ["0068851134", "22.6.0060", "CHILI JAHWA DESTRIANA"],
            ["0069527213", "22.6.0389", "DENNISYA PUTRI RAMADHIAN"],
            ["0068969726", "22.6.0136", "DEWI SITI FATIMAH"],
            ["0069960753", "22.6.0260", "INDAH ARTIKA PUTRI"],
            ["0077488899", "22.6.0008", "INDRI APRIYANI"],
            ["0074605955", "22.6.0381", "INDRI FEBRIANI"],
            ["0073340634", "22.6.0061", "JULIANTI"],
            ["0074058507", "22.6.0310", "KENIA AZZAHRA OKTAVIA"],
            ["0062929612", "22.6.0313", "MESYA PUTRI YANI"],
            ["0066391628", "22.6.0443", "MUCHAMAD YUDHA NUGRAHA"],
            ["0076822895", "22.6.0044", "MUHAMAD IQBAL"],
            ["0075335641", "22.6.0149", "MUHAMAD REIHAN FEBRIANSYAH SAPUTRA"],
            ["0076191387", "22.6.0148", "MUHAMMAD ARRASYA VIDIARY ZULVIKRIANSYAH"],
            ["0079694141", "22.6.0098", "MUHAMMAD RAFI EFENDI"],
            ["0079859862", "22.6.0028", "NAYLA ANANDITA"],
            ["0077932046", "22.6.0007", "NISA INDRIYANI FAUZIAH"],
            ["0066677627", "22.6.0091", "NURIYANA SAKINAH"],
            ["0066402922", "22.6.0297", "PURWANTI"],
            ["0064431257", "22.6.0283", "R. SYAIDA NANDA NOVIANTI"],
            ["0062586834", "22.6.0004", "RIANY NURDIANA PUTRI"],
            ["0071032452", "22.6.0037", "RIZKA AMALIA"],
            ["0071648318", "22.6.0356", "SAFITRI EKA LESTARI"],
            ["0064716648", "22.6.0368", "SALWA FATHIYAH CANIAGO"],
            ["0015112006", "22.6.0441", "SASKIA RATU BILKIS"],
            ["0076404936", "22.6.0335", "SELFI SEPTIANI PUTRI"],
            ["0078690519", "22.6.0250", "SHAFINA PUTRI MAHARANI"],
            ["0071893438", "22.6.0121", "SITI FIRLYANI SUMARDI"],
            ["0072202400", "22.6.0117", "SITI NADYA AZZAHRA"],
            ["0071615883", "22.6.0259", "SYIFAUN NAZIYAH"],
            ["0074073857", "22.6.0312", "SYMPHONY ASTIKA RACHMI"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 39, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
