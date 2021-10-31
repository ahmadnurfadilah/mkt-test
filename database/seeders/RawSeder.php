<?php

namespace Database\Seeders;

use App\Models\Raw;
use Illuminate\Database\Seeder;

class RawSeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
                ['1001', 60],
                ['1002', 80],
                ['1003', 75],
                ['1004', 52],
                ['1005', 39],
                ['1006', 90],
                ['1007', 83],
                ['1008', 97],
                ['1009', 79],
                ['1010', 62],
                ['1011', 73],
                ['1012', 81],
                ['1013', 79],
            ];

        foreach ($datas as $data) {
            Raw::create([
                'nis' => $data[0],
                'nilai' => $data[1],
            ]);
        }
    }
}
