<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            AdminSeeder::class,
            SchoolSeeder::class,
            Kelas1Seeder::class,
            Kelas2Seeder::class,
            XAKLSeeder::class,
            XANSeeder::class,
            XBDPSeeder::class,
            XDPBSeeder::class,
            XIAK1Seeder::class,
            XIAK2Seeder::class,
            XIAN1Seeder::class,
            XIBRSeeder::class,
            XIDPBSeeder::class,
            XIIAK1Seeder::class,
            XIIAK2Seeder::class,
            XIIAN1Seeder::class,
            XIIAN2Seeder::class,
            XIIBRSeeder::class,
            XIIDPBSeeder::class,
            XIILPSSeeder::class,
            XIIMP1Seeder::class,
            XIIMP2Seeder::class,
            XIIMP3Seeder::class,
            XIIMP4Seeder::class,
            XIIPPLG1Seeder::class,
            XIIPPLG2Seeder::class,
            XIITKJ1Seeder::class,
            XIITKJ2Seeder::class,
            XILPSSeeder::class,
            XIMP1Seeder::class,
            XIMP2Seeder::class,
            XIMP3Seeder::class,
            XIPPLG1Seeder::class,
            XIPPLG2Seeder::class,
            XIPPLG3Seeder::class,
            XITKJ1Seeder::class,
            XITKJ2Seeder::class,
            XITKJ3Seeder::class,
            XLPSSeeder::class,
            XMP1Seeder::class,
            XMP2Seeder::class,
            XMP3Seeder::class,
            XPPLG1Seeder::class,
            XPPLG2Seeder::class,
            XPPLG3Seeder::class,
            XTKJ1Seeder::class,
            XTKJ2Seeder::class,
            XTKJ3Seeder::class,
            GuruAM1Seeder::class,
            GuruAM2Seeder::class,
            KTTAM1Seeder::class,
            KTTAM2Seeder::class,
            KTYAM1Seeder::class,
            KTYAM2Seeder::class,
            SecurityAMSeeder::class
        ]);
    }
}
