<?php

namespace App\Http\Controllers;

use App\Models\Rapot;
use App\Models\Raw;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function list(Request $request)
    {
        // Menyiapkan query data siswa
        $siswa = Siswa::join('rapot', 'rapot.id_siswa', 'siswa.id')
                      ->join('kelas', 'kelas.id', 'siswa.id_kelas')
                      ->select('siswa.nis', 'siswa.nama', 'siswa.kota', 'kelas.nama as kelas', 'rapot.nilai', 'rapot.nilai_huruf');

        // Filter query jika terdapat parameter kota
        if (isset($request->kota)) {
            $siswa = $siswa->where('siswa.kota', 'like', '%'.$request->kota.'%');
        }

        // Filter query jika terdapat parameter kelas
        if (isset($request->kelas)) {
            $siswa = $siswa->where('kelas.nama', 'like', '%' . $request->kelas . '%');
        }

        // Ambil semua data siswa
        $siswa = $siswa->get();

        // return kondisi ketika data tidak ditemukan
        if (count($siswa) == 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan',
            ]);
        }

        return response()->json([
            'status' => true,
            'message' => 'Ok',
            'data' => $siswa
        ]);
    }

    public function import()
    {
        // Ambil data raw
        $raws = Raw::get();

        foreach ($raws as $raw) {
            // Sesuaikan kondisi untuk nilai huruf
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

            // Cek apakah siswa ada pada database berdasarkan nis
            $siswa = Siswa::where('nis', $raw->nis)->first();
            if ($siswa) {
                // Insert data ke rapot jika terdapat data siswa
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
