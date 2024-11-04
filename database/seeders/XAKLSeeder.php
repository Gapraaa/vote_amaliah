<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XAKLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0096156999', '24.6.0079', 'ADELIO RUNAKO TYAGA ERYANTO'],
            ['0088818502', '24.6.0108', 'ALYA SEPTIRA'],
            ['0091946656', '24.6.0317', 'ANISA RIZKY BAROKAH'],
            ['0097269015', '24.6.0070', 'ARSA CALLISTA INDIARSARI'],
            ['0094288962', '24.6.0109', 'ASHAROTUL FATIMAH'],
            ['0092376366', '24.6.0011', 'ASHILAH FITRI FADIYAH .H'],
            ['0093463941', '24.6.0345', 'BUNGA APRILIA CAHYANI'],
            ['0093576390', '24.6.0374', 'BUTSAINAH ASHILAH HERNAWATI'],
            ['0082726494', '24.6.0322', 'CUT SILVIA KIRANI'],
            ['3097520477', '24.6.0143', 'DYANA LUTHFIAH LESTARI'],
            ['0082903450', '24.6.0386', 'EKA NOVITASARI VIANATA'],
            ['0091927062', '24.6.0065', 'GHEA ANDINI PUTRI'],
            ['0085437119', '24.6.0062', 'LAILA RAMADHANI L.'],
            ['0095438929', '24.6.0060', 'LIRA MARIANI'],
            ['0085753430', '24.6.0312', 'MEILANDRI'],
            ['0096980129', '24.6.0385', 'MELANIE KARINA.E'],
            ['0084943742', '24.6.0378', 'MUHAMAD BIAZ PUTRA AL AZZRA'],
            ['0086101001', '24.6.0359', 'MUHAMAD RAFLI WIDIANTO'],
            ['0087945238', '24.6.0289', 'NABILA AURA MEDINA'],
            ['0092415515', '24.6.0197', 'NADILA RISTANA'],
            ['0083588751', '24.6.0283', 'NAYLLA PRATAMA MAHDI'],
            ['0089626795', '24.6.0325', 'NAZWA PUTRI MIRANDA'],
            ['3099807747', '24.6.0243', 'NIKITA RAMADANI'],
            ['0086736831', '24.6.0405', 'NILA APRIYATI'],
            ['0098006941', '24.6.0305', 'RATU SHAFA ZASQIA'],
            ['0097322802', '24.6.0090', 'RAISA MARYASARI'],
            ['0089185800', '24.6.0288', 'RISMA RISTIANI PRATAMA'],
            ['0088207176', '24.6.0362', 'RIZKA NURZAHRA INDIRA'],
            ['0089691394', '24.6.0364', 'SITI NUR AZIZAH PERTIWI'],
            ['0095295605', '24.6.0018', 'SITI SILVANA'],
            ['3090325346', '24.6.0406', 'VALDO JUNIARTO'],
            ['0092146977', '24.6.0034', 'WIDIA PRATIWI'],
            ['0086272566', '24.6.0006', 'WITA AGUSTINA'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 21, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 2,
            ]);
        }
    }
}
