<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XPPLG3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0082612373', '24.5.0141', 'AIDIL AKBAR'],
            ['0091625729', '25.5.0102', 'AINI NUR HALIMAH'],
            ['0089672740', '24.5.0032', 'ALIEF ALAFFAN'],
            ['3099374141', '24.5.0262', 'ANANDA REZKY JUNIOR'],
            ['0093211905', '24.5.0412', 'BIMO SAPUTRO'],
            ['0096093363', '24.5.0071', 'BINTANG PUTRA ANUGRAHA PRATAMA'],
            ['0089794072', '24.5.0225', 'DEDY SUNJAYA'],
            ['0091020819', '24.5.0319', 'DESINTA MELIANI'],
            ['0086831274', '24.5.0236', 'FADLI DWI NUGRAHA'],
            ['0096195437', '24.5.0200', 'FERDY FIRMANSYAH'],
            ['0096382427', '24.5.0123', 'HABIBI ASKA PERMANA'],
            ['0099182505', '24.5.0104', 'HARUM ERILIA SUHANDI'],
            ['0093977984', '24.5.0013', 'KANAYA YUSTIA RUDIANTO'],
            ['0084735708', '24.5.0213', 'KHAERYL HIDAYATULLOH'],
            ['0098866756', '24.5.0222', 'M IKHSAN HAFIULLAH'],
            ['0082762386', '24.5.0129', 'M. FADLAN RAMADINANSYA'],
            ['0082993706', '24.5.0078', 'M.REVAN ARISTA'],
            ['0082592999', '24.5.0275', 'M.RIFKY PUTRA HILMANSYAH'],
            ['0086461249', '24.5.0394', 'MAHFUZA ZAHIRAH'],
            ['0092215472', '24.5.0375', 'MOHAMAD KHOERUL FAHRI'],
            ['0099220268', '24.5.0279', 'MOHAMMAD ABU RIZKI'],
            ['3091316065', '24.5.0133', 'MUHAMAD APIPUDIN'],
            ['0096577914', '24.5.0185', 'MUHAMAD ILHAM FEBRIANTO'],
            ['0079356337', '24.5.0021', 'MUHAMMAD AIRLANGGA'],
            ['0084663179', '24.5.0224', 'MUHAMMAD IQBAL'],
            ['0099988594', '24.5.0244', 'MUHAMMAD RUSLI'],
            ['0074459369', '24.5.0233', 'MUHAMMAD ZEIN IRFAN ATTHARIQUE'],
            ['0094289092', '24.5.0330', 'PANDU PUTRA NURASIH'],
            ['0091572017', '24.5.0181', 'RIFKI MAULANA'],
            ['3094187659', '24.5.0302', 'RIZKY PUTRA HADIATAMA'],
            ['0094757608', '24.5.0067', 'SELVIRA PUTRI RAHMAWATI'],
            ['0093739832', '24.5.0027', 'SITI ATIKAH SARI'],
            ['3091711132', '24.5.0234', 'YANWAR HAKIM'],
            ['0086711826', '24.5.0332', 'ZILVA ZIA YULIANI'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 6, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
