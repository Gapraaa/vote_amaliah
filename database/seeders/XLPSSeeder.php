<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XLPSSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ["0093953366", "24.6.0388", "ALDA AMALIA PUTRI"],
            ["0083620212", "24.6.0363", "ALFAN PUTRA RAMADHAN"],
            ["0099660007", "24.6.0122", "ARINI MUTIARA HAFIDZ"],
            ["0082893792", "24.6.0297", "CARISSA PUTRI SAFRIYADI"],
            ["0081449628", "24.6.0353", "CHIKO DAVINA GUNAWATI"],
            ["0089531920", "24.6.0293", "DILI"],
            ["0082267754", "24.6.0377", "ENENG RANTI"],
            ["0092025561", "24.6.0148", "FAIZ NURRIZKI A"],
            ["0096092189", "24.6.0059", "KENZA ANZANI"],
            ["0083854251", "24.6.0111", "KHARISA RAHMAWATI"],
            ["0087928626", "24.6.0371", "M. REVAN WAHYU HIDAYAT"],
            ["0098068020", "24.6.0210", "MEI SYAHPUTRI"],
            ["0097690322", "24.6.0329", "MUHAMMAD ARDI"],
            ["0086848660", "24.6.0321", "MUHAMMAD ICHSAN MAULANA"],
            ["0093080567", "24.6.0115", "MUHAMMAD IMAM SAPUTRA"],
            ["0081960091", "24.6.0354", "MUHAMAD KHOIRUL ANAMI"],
            ["0083409924", "24.6.0204", "MUTIARA SYIFA AZZAHRA"],
            ["0091644027", "24.6.0370", "NATASYA AURA JASMIN"],
            ["0092465165", "24.6.0355", "NOURA DITA WIDIANA"],
            ["0087895837", "24.6.0166", "NOVAL HAFIDZ DIANSYAH"],
            ["0095184325", "24.6.0367", "NUR FARIDA AZZAHRA"],
            ["0083190646", "24.6.0307", "PUTRI AMELIA"],
            ["0094269981", "24.6.0398", "RAHUEL FEBRIANO"],
            ["0096248118", "24.6.0186", "RAISYA NUR ASYUARA"],
            ["3092323079", "24.6.0331", "RAMADHAN RIZKY WIBOWO"],
            ["0099644261", "24.6.0369", "RISKA ALZAHRA"],
            ["0098718967", "24.6.0328", "ROCHELLA MULIA PUTRI"],
            ["0083782339", "24.6.0308", "SARAH SACY DJAYASAPUTRA"],
            ["0098914720", "24.6.0099", "SITI ALFIRA NURFAIZAH R"],
            ["0083960811", "24.6.0366", "SHYLA NUR AZZAHRA"],
            ["0084700294", "24.6.0382", "TIYAS ISWARI RAMDANI"]
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 26, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
