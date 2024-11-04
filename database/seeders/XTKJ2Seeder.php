<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XTKJ2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0082587292', '24.5.0025', 'ADES JULIANTO'],
            ['0087690468', '24.5.0214', 'AHMAD HILBRAN MUSTAFA'],
            ['0087402101', '24.5.0268', 'ARIS SETIAWAN'],
            ['0084885302', '24.5.0058', 'DEDE IFAZ FAUZAN'],
            ['0095434416', '24.5.0414', 'GHAZY THUFAIL AL-GHIFARI'],
            ['0081799593', '24.5.0238', 'IBRAHIM DRAJATULLOH'],
            ['0079295755', '24.5.0112', 'JAFAR SIBARANI'],
            ['3094728436', '24.5.0298', 'KHAIKAL NILNAL MUNA'],
            ['3092772304', '24.5.0015', 'M. FATHURRAHMAN WAHID'],
            ['0089595461', '24.5.0402', 'M. GILANG RAMADAN'],
            ['3086809206', '24.5.0009', 'M. NADZRIL YAMAN'],
            ['0083104106', '24.5.0040', 'MAULANA PRADIKTA'],
            ['0086138236', '24.5.0126', 'MOCH ARRAF SANJANI'],
            ['0088648077', '24.5.0164', 'MOHAMAD RIZKY ELZZYANSYAH'],
            ['3092755015', '24.5.0010', 'MUH ALIF YASIN'],
            ['0095094334', '24.5.0024', 'MUHAMAD FARID HARTAWAN'],
            ['0097869665', '24.5.0194', 'MUHAMAD RANGGA IRAWAN'],
            ['0097123628', '24.5.0296', 'MUHAMAD RIZKY ABDUL KHOLIK'],
            ['0085197574', '24.5.0339', 'MUHAMMAD ADLI FATHAN'],
            ['0087360576', '24.5.0303', 'MUHAMMAD AL AZIZIR DESTRAN SEBASTIAN'],
            ['0092564981', '24.5.0187', 'MUHAMMAD FABIAN ARIES'],
            ['0096554083', '24.5.0281', 'MUHAMMAD FARHAN'],
            ['0088198362', '24.5.0273', 'MUHAMMAD IQBAL ABILLAH'],
            ['0099386174', '24.5.0084', 'MUHAMMAD RAFI ALDIANSYAH'],
            ['0081192369', '24.5.0415', 'PAJAR RAMDANI KURNIAWAN'],
            ['0099790193', '24.5.0270', 'RAFAEL EMERALD AL-GHIFARI'],
            ['0089411652', '24.5.0392', 'RAIHAN LUFTY SALAMPESSY'],
            ['0086898388', '24.5.0106', 'RAMDANI AGUSTIAN'],
            ['0098710671', '24.5.0036', 'RIFA DENHAS'],
            ['0097503050', '24.5.0173', 'SANDY ALHUSAINI']
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 2, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
