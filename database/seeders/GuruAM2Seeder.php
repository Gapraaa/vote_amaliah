<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuruAM2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Gugun Gunadi, S.Pd.I.,M.Pd', '20000001', '2234'],
            ['Siti Wadiah, SE.I.,MOS', '20000002', '2235'],
            ['Gilang Gumilar, SE.I.,Gr.,MOS', '20000003', '2236'],
            ['Yulianti Ramadhan, S.Pd., Gr.', '20000004', '2237'],
            ['Heni Nuraeni, SE.,MOS', '20000005', '2238'],
            ['Mila Karmila, SE., MOS', '20000006', '2239'],
            ['Tri Ekawati, S.Pd.Gr', '20000007', '2240'],
            ['Reni Oktaviani, SE.', '20000008', '2241'],
            ['Aidina Barek Hoda, SE.', '20000009', '2242'],
            ['Dwi Handayani, S.Kom., MOS.', '20000010', '2243'],
            ['Dra. Eti Nurhayati', '20000011', '2244'],
            ['Rahmi Putri Handayani, SE.I.Gr', '20000012', '2245'],
            ['Siti Sarah Monika, S.Pd.', '20000013', '2246'],
            ['Abdul Azis Sudrajat, S.Kom,MOS', '20000014', '2247'],
            ['Wenny Ismawati, S.Pd.', '20000015', '2248'],
            ['Siti Nurjanah Nasution, S.Pd.', '20000016', '2249'],
            ['Siti Amaliah, S.Pd', '20000017', '2250'],
            ['Hadi Pasito, S.Si.', '20000018', '2251'],
            ['Septa Sopiatun, S.Pd.,Gr.', '20000019', '2252'],
            ['Gina Mulyani, S.Pd.I.', '20000020', '2253'],
            ['Else As Syavira, S. Mat', '20000021', '2254'],
            ['Muhammad Sayuti, SH', '20000022', '2255'],
            ['Dede Jaenudin, SE', '20000023', '2256'],
            ['Akwal Syahril, S.H.I', '20000024', '2257'],
            ['Riris Maurisal Jannah, S.Pd', '20000025', '2258'],
            ['Anggraini Indah Pratiwi', '20000026', '2259'],
            ['Siti Nurafifah, S.Pd.', '20000027', '2260'],
            ['Rismayanti, SE.', '20000028', '2261'],
            ['Tuti Susilawati, S.Pd', '20000029', '2262'],
            ['Yogi Ahmad Nugraha, SE', '20000030', '2263'],
            ['Gizwinanda', '20000031', '2264'],
            ['Syilvia Rachmawati, SM', '20000032', '2265'],
            ['Siti Nuranisah, S.Pd', '20000033', '2266'],
            ['Annisa Riani, SE', '20000034', '2267'],
            ['Zahra Azkia Ibrahim, SM', '20000035', '2268'],
            ['Indra Delta, S.H.,MA', '20000036', '2269'],
            ['Siti Alfina', '20000037', '2270'],
            ['Siti Hertiwi Khasanah, SM', '20000038', '2271'],
            ['Siti Sahidah, S.Pd', '20000039', '2272'],
            ['Zurriyati, S.Psi', '20000040', '2273'],
            ['Niar Handayani, SS', '20000041', '2274'],
            ['Selvia Prihastiyani, S.Kom.,Gr', '20000042', '2275'],
            ['Selvia Safitri, S.I.Kom', '20000043', '2276'],
            ['Muhammad Kemal Irfany Azhar', '20000044', '2277'],
            ['Muhammad Abdul Malik', '20000045', '2278'],
            ['Annisa, S.Pd', '20000046', '2279']
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[0], // Nama pengguna 
                'username' => $item[1], // NISN sebagai username 
                'password' => Hash::make(str_replace('.', '', $item[2])), // NIS sebagai password (hashed, tanpa titik)  
                'role_id' => 2,  // Misalnya, role_id = 1 untuk siswa 
                'school_id' => 2,
            ]);
        }
    }
}
