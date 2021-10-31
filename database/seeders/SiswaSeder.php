<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class SiswaSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            [1, '1001', 'Rizaldi Maulidia', 'Bandung'],
            [1, '1002', 'Siska Melina', 'Bandung'],
            [1, '1003', 'Arkaan Lathif', 'Bandung'],
            [2, '1004', 'Gerry Ardimanggala', 'Bandung'],
            [2, '1005', 'Agung', 'Bandung'],
            [3, '1006', 'Rudi Permana', 'Bandung'],
            [3, '1007', 'Ina', 'Bandung'],
            [1, '1008', 'Ilham Arifin', 'Jakarta'],
            [1, '1009', 'Indra Maulana', 'Jakarta'],
            [2, '1010', 'Samba Ilham', 'Jakarta'],
            [3, '1011', 'Nadya Rohani', 'Jakarta'],
            [3, '1012', 'Salman Agustian', 'Jakarta'],
            [3, '1013', 'Amanda', 'Jakarta'],
        ];

        foreach ($datas as $data) {
            Siswa::create([
                'id_kelas' => $data[0],
                'nis' => $data[1],
                'nama' => $data[2],
                'kota' => $data[3],
            ]);
        }
    }
}
