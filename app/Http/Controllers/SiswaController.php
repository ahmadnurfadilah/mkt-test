<?php

namespace App\Http\Controllers;

use App\Models\Rapot;
use App\Models\Raw;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    public function import()
    {
        $raws = Raw::get();

        foreach ($raws as $raw) {
            if ($raw->nilai >= 80) {
                $nilai_huruf = 'A';
            } elseif ($raw->nilai >= 65) {
                $nilai_huruf = 'B';
            } elseif ($raw->nilai >= 55) {
                $nilai_huruf = 'C';
            } elseif ($raw->nilai >= 40) {
                $nilai_huruf = 'D';
            } else {
                $nilai_huruf = 'E';
            }


            $siswa = Siswa::where('nis', $raw->nis)->first();
            if ($siswa) {
                Rapot::create([
                    'id_siswa' => $siswa->id,
                    'nilai' => $raw->nilai,
                    'nilai_huruf' => $nilai_huruf,
                ]);
            }
        }

        return response()->json([
            'status' => true,
            'message' => 'Success'
        ]);
    }
}
