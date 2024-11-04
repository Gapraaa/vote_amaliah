<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XPPLG2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0096706622', '24.5.0073', 'AHMADINEJAD BANYU RIZKY'],
            ['3080768177', '24.5.0403', 'ALI ATTAZIRI NURISMAN'],
            ['0088232139', '24.5.0091', 'ALYA RAMADHANI'],
            ['0086664457', '24.5.0005', 'ARYA NUGRAHA PRATAMA RUSLAN'],
            ['0096465847', '24.5.0017', 'CARISSA HANA SAPHIRA'],
            ['0099580515', '24.5.0012', 'CELYA VANNISA PUTRI'],
            ['0094897174', '24.5.0400', 'DEVIANI MAULANI AZZAHRA'],
            ['0095478286', '24.5.0165', 'DITO ARKHAN ARAFFI'],
            ['0089483343', '24.5.0075', 'FATHIR SURYA WIJAYA'],
            ['0088073040', '24.5.0044', 'GERRY APRIANSYAH'],
            ['0091503837', '24.5.0299', 'HANAN NURANISA UMAR JAWAS'],
            ['0098117571', '24.5.0061', 'JUAN HARTONO'],
            ['3094564531', '24.5.0397', 'KEYSA JANAHTU ALVIRA'],
            ['0087903130', '24.5.0180', 'M ABDUL FALAH'],
            ['3090394477', '24.5.0086', 'MAGIED AQILAN YAZKURNIZA'],
            ['0096519086', '24.5.0223', 'MOCH HARLAN PADILAH'],
            ['0081137673', '24.5.0178', 'MOCH. PUTRA HARDIAT'],
            ['3090866998', '24.5.0393', 'MUHADZADZIB RAJA NUSANTARA'],
            ['0099754730', '24.5.0083', 'MUHAMAD DAVIN ILHAM MUJIWAN'],
            ['3082296891', '24.5.0033', 'MUHAMAD IKWAL ALDIANSYAH'],
            ['0086051025', '24.5.0349', 'MUHAMAD RIFA FAUZAN'],
            ['0087958709', '24.5.0042', 'MUHAMAD ZINDAN'],
            ['0092445934', '24.5.0198', 'MUHAMMAD FATHIR CHAIRIL'],
            ['3099949918', '24.5.0127', 'MUHAMMAD MALIK FAJAR'],
            ['0086467818', '24.5.0050', 'PAJAR RAMDANI'],
            ['0084037681', '24.5.0241', 'QALBI SABDA RABBANI'],
            ['0087965279', '24.5.0336', 'REVANDRA LANGIT RAMADHAN'],
            ['0097461274', '24.5.0251', 'SAQILA JASWA MAULANI'],
            ['0096947833', '24.5.0242', 'SHOPIA AMALIA'],
            ['3092031571', '24.5.0093', 'TEGAR REVALDI AKBAR'],
            ['3085217253', '24.5.0176', 'WULAN SAYYINA'],
            ['0094370611', '24.5.0326', 'ZAVIER ALDEN RADITYA'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 5, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
