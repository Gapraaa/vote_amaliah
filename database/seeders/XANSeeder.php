<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class XANSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['0091937451', '24.5.0314', 'ALYANIA NURAINI'],
            ['0095201524', '24.5.0066', 'ALZENA RAISAH'],
            ['0083120286', '24.5.0080', 'AMANDA RAMADHANY SUHARTO'],
            ['0099185628', '24.5.0287', 'AZKA AULIA'],
            ['0086663529', '24.5.0409', 'BINTANG LEGO HARJONO'],
            ['0099872565', '24.5.0384', 'DARREL ARSA PRADINKA'],
            ['0097783045', '24.5.0301', 'DEWI ANDITA PUTRI'],
            ['0099508281', '24.5.0410', 'FABIAN ABDILLAH NASHRI'],
            ['0085415423', '24.5.0347', 'FARDAN FHAQIH HABIBURRAHMAH'],
            ['0085434273', '24.5.0183', 'FRISKHA ZAHRA FERTYANZA'],
            ['0095483101', '24.5.0323', 'GHEA NAFITRI'],
            ['0098168497', '24.5.0132', 'HAMZA AL ASAD'],
            ['0093165642', '24.5.0095', 'ILHAM SAPUTRA'],
            ['0097566362', '24.5.0247', 'M NIZAR PRATAMA IRSHAN'],
            ['0086246233', '24.5.0002', 'M. RIZWAN KURNIAWAN'],
            ['0085847796', '24.5.0324', 'MAULANA JOOSY KAWET'],
            ['0086935077', '24.5.0290', 'MUHAMAD AGASTA RAYA AGUNG'],
            ['0088055152', '24.5.0346', 'MUHAMAD FAHRY RAMADHANI'],
            ['0089775204', '24.5.0051', 'MUHAMAD FARIL AL MUIZ'],
            ['0086471653', '24.5.0153', 'MUHAMAD RIZAL SAKINA'],
            ['0087028160', '24.5.0147', 'MUHAMMAD ADITYA ADZHARI FIRMANSYAH'],
            ['0089497623', '24.5.0373', 'MUHAMMAD FAKHRI RIZKY ADHARI'],
            ['0084853641', '24.5.0411', 'MUHAMMAD SEFTIANDI RAMDHANI'],
            ['0095465412', '24.5.0215', 'MUHAMMAD SYAHRIALDI UTAMA'],
            ['0098889749', '24.5.0208', 'MYIESHA AZWIYAH'],
            ['0095351858', '24.5.0248', 'RAFA FEBRIYO DWI ARIANSYAH'],
            ['0085837527', '24.5.0142', 'RAFFA ARSYAFFIN'],
            ['3096494741', '24.5.0216', 'RAFI FATONI AHMAD'],
            ['0098921190', '24.5.0101', 'RAFIL SAVERIO'],
            ['0089827759', '24.5.0219', 'RESTU MAULID\'YA ABDZAL'],
            ['0092140478', '24.5.0035', 'STELLA AYUVIA MAYRES'],
            ['3099251823', '24.5.0043', 'SYARIFA BALQIS'],
        ];

        foreach ($data as $item) {
            User::create([
                'name' => $item[2], // Nama pengguna
                'username' => $item[0], // NISN sebagai username
                'password' => Hash::make(str_replace('.', '', $item[1])), // NIS sebagai password (hashed, tanpa titik)
                'nisn' => $item[0], // NISN
                'nis' => str_replace('.', '', $item[1]), // NIS tanpa titik
                'kelas_id' => 7, // Misalnya, kelas_id = 1
                'role_id' => 1,  // Misalnya, role_id = 1 untuk siswa
                'school_id' => 1,
            ]);
        }
    }
}
