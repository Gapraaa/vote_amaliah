<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIIAN1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0077919573', '22.5.0023', 'AFRILIA VIARADITA'],
            ['0054359568', '22.5.0163', 'ANANDA JUSTIN PRATAMA'],
            ['0076837150', '22.5.0366', 'AZRIL FAZIRA PUTRA'],
            ['0077512427', '22.5.0236', 'DENISHA NUR AZIZAH AMITHA PUTRI'],
            ['0079314466', '22.5.0308', 'ELGA MUKHTI IRMADELA'],
            ['0069450264', '22.5.0025', 'FADLAN RENOVA'],
            ['0075933787', '22.5.0162', 'FAHRAN NUGRAHA RAMDHANA'],
            ['0074866905', '22.5.0411', 'FATIMAH ALMUTMAINAH'],
            ['0071515120', '22.5.0042', 'HILDA AVRILIA'],
            ['0068451206', '22.5.0077', 'KAYDA RAUDHATUL JANNAH'],
            ['0063393230', '22.5.0340', 'KHARENT DWI CAHYANI'],
            ['0077665407', '22.5.0399', 'MAULANA AHGIS ARRAJULU MALAHA'],
            ['0066700867', '22.5.0032', 'MOHAMAD RAKHA RASENDRIYA RISQULLOH'],
            ['0076620633', '22.5.0402', 'MUHAMAD RIVAL ARDABILLY'],
            ['0073670055', '22.5.0152', 'MUHAMMAD DAFFA AL-FARIDZY'],
            ['0068626419', '22.5.0118', 'MUHAMMAD DZAKI ALFANSYAH'],
            ['0063690055', '22.5.0317', 'MUHAMMAD HAFIDZ RAMADHAN'],
            ['0079514895', '22.5.0254', 'MUHAMMAD RAFFI MARIANDI'],
            ['0063849600', '22.5.0058', 'MUHAMMAD RAFLY RAFSANJANI'],
            ['0071475499', '22.5.0133', 'MUHAMMAD RAZZAQ PRATAMA'],
            ['0088689179', '22.5.0401', 'MUHAMMAD WISNU PURWADI'],
            ['0075842888', '22.5.0151', 'NICKYTA AZURRA'],
            ['0065211256', '22.5.0161', 'PANDU JUARSA PUTRA'],
            ['0072772433', '22.5.0241', 'REMBUN ANGGRAENI PUTRI'],
            ['0062789747', '22.5.0307', 'SABRINA CHELSI VIRANIA'],
            ['0067301828', '22.5.0422', 'SALWA ANDARA GITA'],
            ['0067479773', '22.5.0024', 'SHIDKI ALI MIQDAD'],
            ['0074209472', '22.5.0347', 'SITI NURIANA FEBRIANI'],
            ['0079537010', '22.5.0432', 'SITI RACHMASARI'],
            ['0072904399', '22.5.0064', 'SITI ZALFA RAHMATUNNISYA'],
            ['0079816342', '22.5.0288', 'ZAHRATUS SHIFA RAMADHANI'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 15, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
