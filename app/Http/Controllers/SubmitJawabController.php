<?php

namespace App\Http\Controllers;

use App\Soal;
use Illuminate\Http\Request;

class SubmitJawabController extends Controller
{
    public function store(Request $request)
    {
        $benar = 10;
        $nilai = 0;
        foreach ($request->pilihan as $i => $pilihan) {
            $find = Soal::where('id_soal', $i)->first();
            if ($find->knc_jawaban == $pilihan) {
                $nilai + = $benar;
            }
        }
            //menyipan nilai
            Nilai::create([
                "nama" => "Sueb",
                "npm" => "06.392039.323.32",
                "modul" => 4,
                "nilai" => $nilai
            ]);

        return redirect()->back();
    }
}
