<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = ['10 IPA', '11 IPA', '12 IPA'];
        foreach ($datas as $data) {
            Kelas::create([
                'nama' => $data,
            ]);
        }
    }
}
