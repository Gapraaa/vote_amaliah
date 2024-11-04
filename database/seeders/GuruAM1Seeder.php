<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuruAM1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Tisna Sudrajat, S.Kom., Gr., ACA', '10000001', '1234'],
            ['Rd. Hendriawan Tansyah, S.T., Gr., ACA., MTA.', '10000002', '1235'],
            ['Isma Tri Pamungkas, S.Pd.', '10000003', '1236'],
            ['Amirudin Muslim, S.Pd.I., MM., Gr.', '10000004', '1237'],
            ['Septyandi Utama, A.Md.', '10000005', '1238'],
            ['M. Rendi Nurmansyah, S.I.Kom.', '10000006', '1239'],
            ['Selvia Prihastyani, S.Kom., Gr.', '10000007', '1240'],
            ['Mimi Sumiati, M.Pd., Gr.', '10000008', '1241'],
            ['Ami Listiami, S.P.', '10000009', '1242'],
            ['Yeni Latifah, S.Kom.', '10000010', '1243'],
            ['Ernawati, S.Pd.', '10000011', '1244'],
            ['Septa Sopiatun, S.Pd., Gr.', '10000012', '1245'],
            ['Ana Luciana, S.Pd.', '10000013', '1246'],
            ['Hadi Pasito, S.Si.', '10000014', '1247'],
            ['Guna Tatapijana, S.Sos.', '10000015', '1248'],
            ['Muhamad Romdoni', '10000016', '1249'],
            ['Muhammad Fendra Kari', '10000017', '1250'],
            ['Syahrul Ramdoni, S.I.Kom.', '10000018', '1251'],
            ['Tuti Susilawati, S.Pd.', '10000019', '1252'],
            ['Muhammad Muhklisin, S.Pd. I.', '10000020', '1253'],
            ['Oce Komarudin, S.Ag.', '10000021', '1254'],
            ['Anggraini Indah Pratiwi', '10000022', '1255'],
            ['Yogi Ahmad Nugraha, SE.', '10000023', '1256'],
            ['Fitri Zuhria Fiani, A. Md.', '10000024', '1257'],
            ['Iqbal Firdaus', '10000025', '1258'],
            ['Aviani Sofiansyah', '10000026', '1259'],
            ['Putriani Nur Khotimah', '10000027', '1260'],
            ['Aisyah Rini Susanti, S.T., M.Kom.', '10000028', '1261'],
            ['Deden Zaenudin, S.Pd.', '10000029', '1262'],
            ['Rani Oktaviani', '10000030', '1263'],
            ['Muhammad Subhan Hidayat', '10000031', '1264'],
            ['Rizky Septiyadi Wirakusumah', '10000032', '1265'],
            ['Intan Sri Mulyani', '10000033', '1266'],
            ['Zuriyati, S.Psi', '10000034', '1267'],
            ['Siti Sahidah, S.Pd', '10000035', '1268'],
            ['Neylanur Maulidiyah, S.Li', '10000036', '1269'],
            ['Indra Delta, S.H.,MA', '10000037', '1270'],
            ['Tia Agustiani', '10000038', '1271'],
            ['Mudin', '10000039', '1272'],
            ['M. Fikri, MOS.', '10000040', '1273'],
            ['Yudistira Pratama Aristiawan', '10000041', '1274'],
            ['Miftahul Khoir, ME.', '10000042', '1275'],
            ['Abdul Azis Sudrajat, S.Kom., MOS.', '10000043', '1276'],
            ['Risfan Novrian', '10000044', '1277'],
            ['Mamay Sumarni, S.Pd.', '10000045', '1278'],
            ['Dra. Eti Nurhayat', '10000046', '1279'],
            ['Else As Syavira, S. Mat', '10000047', '1280'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[0], // Nama pengguna 
                'username' => $item[1], // NISN sebagai username 
                'password' => Hash::make(str_replace('.', '', $item[2])), // NIS sebagai password (hashed, tanpa titik)  
                'role_id' => 2,  // Misalnya, role_id = 1 untuk siswa 
                'school_id' => 1,
            ]);
        }
    }
}
