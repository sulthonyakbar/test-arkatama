<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    public function processInput(Request $request)
    {
        $inputData = $request->input('data-pengguna');

        preg_match('/^(.*?)\s*(\d+)\s*(tahun|thn|th)?\s*(.*?)$/', $inputData, $data);

        if (count($data) === 5) {
            $nama = strtoupper(trim($data[1]));
            $usia = (int)$data[2];
            $kota = strtoupper(trim($data[4]));

            $kota = preg_replace('/\s*(tahun|thn|th)$/i', '', $kota);

            Pengguna::create([
                'name' => $nama,
                'age' => $usia,
                'city' => $kota,
            ]);

        return redirect('/')->with('success', 'Data berhasil disimpan.');
    }
}
}
