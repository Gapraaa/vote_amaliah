<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XITKJ3Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0078450626', '23.5.0066', 'ARMAN MAULANA'],
    ['3081018691', '23.5.0113', 'AZIKRA MAULANA'],
    ['0071163717', '23.5.0030', 'BAGAS PERMANA PUTRA'],
    ['0088887446', '23.5.0159', 'GINAN MAULANA AKBAR'],
    ['0084922854', '23.5.0273', 'GUTSYAF FAHRYGAFRYZA ANDHYARAMA'],
    ['0083023043', '23.5.0079', 'MARIO PRASETYO'],
    ['0086759375', '23.5.0094', 'MUHAMAD ADITIA'],
    ['0085590397', '23.5.0098', 'MUHAMAD APRILIANSYAH'],
    ['0076125194', '23.5.0080', 'MUHAMAD DIAZ ADITIYA'],
    ['0086567910', '23.5.0102', 'MUHAMAD FARIZ ARIANSYAH'],
    ['0072568647', '23.5.0130', 'MUHAMAD FAUZI'],
    ['0081793960', '23.5.0019', 'MUHAMAD IDRUS'],
    ['0062792875', '23.5.0168', 'MUHAMAD RIFALDI SETIAWAN'],
    ['0085187706', '23.5.0174', 'MUHAMAD RIZAL NUR ALAM'],
    ['0078089394', '23.5.0173', 'MUHAMMAD ALDIYANSYAH'],
    ['0074667748', '23.5.0073', 'MUHAMMAD FIRMANSYAH GUMILANG'],
    ['0077507491', '23.5.0054', 'MUHAMMAD HILDAN'],
    ['0085002853', '23.5.0037', 'MUHAMMAD MIFTAHUL HAETAMI'],
    ['0071168453', '23.5.0255', 'MUHAMMAD RAFI ALFAWWAZ'],
    ['0076768872', '23.5.0274', 'MUHAMMAD ROBI'],
    ['0074115721', '23.5.0224', 'REZA ADRIAN'],
    ['0075218815', '23.5.0137', 'RIDHO FITRA RAMADHAN'],
    ['0075713313', '23.5.0011', 'RIVAL FAZRI'],


        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 11, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
