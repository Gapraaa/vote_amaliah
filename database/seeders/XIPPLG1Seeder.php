<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XIPPLG1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0084811529', '23.5.0046', 'ADITYA PERMANA RAMADHAN'],
            ['0085267703', '23.5.0182', 'AFTORI YUSUF HAIRUCAHYA'],
            ['0071783365', '23.5.0306', 'ALDIS YUDISTIRA'],
            ['0082419182', '23.5.0268', 'ALFIHRA PUTRI SYAHBANIA'],
            ['0076961163', '23.5.0099', 'ANGELINA PRATIWI'],
            ['0089982991', '23.5.0246', 'AUZAN ALFIN RAHMAN'],
            ['0083326005', '23.5.0219', 'AVRIL REZKYA AMANDA'],
            ['0081532714', '23.5.0108', 'BASSAM SAID MUHAMMAD'],
            ['0083522928', '23.5.0106', 'DAFFINA NURUL OKTAVIANI'],
            ['0074583425', '23.5.0002', 'FACHRI ZAMAL'],
            ['0072712821', '23.5.0084', 'FAKHRI YANSYA'],
            ['0089403756', '23.5.0061', 'M RIFFAI'],
            ['3073411235', '23.5.0338', 'M. SYAWAL FAHRIZA'],
            ['0086970606', '23.5.0218', 'MOCH MALIKUL MULKI'],
            ['0067665938', '23.5.0231', 'MOCHAMAD FADILAH ARIQ HERLANSYAH'],
            ['0078525965', '23.5.0053', 'MOHAMAD SYEH RIZAN'],
            ['0082164707', '23.5.0315', 'MUHAMAD ADITYA PRAYOGA'],
            ['0088425951', '23.5.0023', 'MUHAMAD AZI SAPUTRA SURYADI'],
            ['0074039162', '23.5.0056', 'MUHAMAD INDRA SYAHDAN'],
            ['0084342277', '23.5.0181', 'MUHAMAD RAIHAN HADINATA'],
            ['0088491796', '23.5.0378', 'MUHAMMAD ARDHAN SHIDDIQ'],
            ['0072669772', '23.5.0358', 'MUHAMMAD FABIAN DWI SYAHPUTRA'],
            ['0089351851', '23.5.0187', 'MUHAMMAD FAKHRIL AL PARRAS'],
            ['0089795712', '23.5.0379', 'MUHAMMAD RIZAL NASUTION'],
            ['0071455720', '23.5.0290', 'MUHAMMAD ZIDANE GUNAWAN'],
            ['0079677300', '23.5.0383', 'NAUFAL ABDUL HAKIM BAWAZIER'],
            ['0076316601', '23.5.0380', 'NAYYARA PUTRI ZAFIRA'],
            ['0089416543', '23.5.0006', 'NAZWA GISELIA SANTOSO'],
            ['0084218386', '23.5.0363', 'REZA HADI PUTRA'],
            ['0086483482', '23.5.0364', 'RIZKY RAMADHAN'],
            ['0077286496', '23.5.0313', 'ROBY MARDIANSYAH'],
            ['0081345057', '23.5.0299', 'YUDHIESTYA PRATAMA'],

        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 12, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
