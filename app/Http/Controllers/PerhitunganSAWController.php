<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Makanan;
use App\Models\SubKriteria;
use App\Models\Kriteria;

class PerhitunganSAWController extends Controller
{
    public function perhitunganSAW(Request $request)
    {
        $jenisMakanan = $request->input('jenis_makanan');

        // Ambil data kriteria dan subkriteria
        $kriteria = Kriteria::all()->keyBy('nama');
        $subkriteria = SubKriteria::all()->keyBy('id');

        // Ambil data makanan sesuai dengan jenis makanan yang dipilih
        if ($jenisMakanan) {
            $makanan = Makanan::where('jenis_makanan', $jenisMakanan)->get();
        } else {
            $makanan = collect(); // Kosongkan koleksi jika tidak ada jenis makanan yang dipilih
        }

        // Matriks keputusan
        $decisionMatrix = [];
        foreach ($makanan as $food) {
            $decisionMatrix[$food->id]['nama_makanan'] = $food->nama_makanan;
            foreach ($kriteria as $criterion) {
                $subKriteriaId = $food->{strtolower(str_replace(' ', '_', $criterion->nama))};
                $foodValue = $subkriteria->get($subKriteriaId);
                $decisionMatrix[$food->id][$criterion->nama] = $foodValue ? $foodValue->nilai : 0;
            }
        }

        // Normalisasi matriks keputusan
        $normalizedMatrix = [];
        foreach ($kriteria as $criterion) {
            // Perhitungan MAX dan MIN dipisah untuk setiap jenis makanan
            $subKriteriaValues = [];
            if ($jenisMakanan) {
                $makananFiltered = Makanan::where('jenis_makanan', $jenisMakanan)->get();
                foreach ($makananFiltered as $food) {
                    $subKriteriaId = $food->{strtolower(str_replace(' ', '_', $criterion->nama))};
                    $foodValue = $subkriteria->get($subKriteriaId);
                    if ($foodValue) {
                        $subKriteriaValues[] = $foodValue->nilai;
                    }
                }
            } else {
                foreach ($makanan as $food) {
                    $subKriteriaId = $food->{strtolower(str_replace(' ', '_', $criterion->nama))};
                    $foodValue = $subkriteria->get($subKriteriaId);
                    if ($foodValue) {
                        $subKriteriaValues[] = $foodValue->nilai;
                    }
                }
            }

            if (count($subKriteriaValues) > 0) {
                $max = max($subKriteriaValues);
                $min = min($subKriteriaValues);
            } else {
                $max = 1; // Default value if no subcriteria values found
                $min = 1; // Default value if no subcriteria values found
            }

            foreach ($makanan as $food) {
                $subKriteriaId = $food->{strtolower(str_replace(' ', '_', $criterion->nama))};
                $foodValue = $subkriteria->get($subKriteriaId);

                if ($foodValue) {
                    $foodValue = $foodValue->nilai;
                    if ($criterion->atribut == 'Benefit') {
                        $normalizedMatrix[$food->id][$criterion->nama] = $max != 0 ? $foodValue / $max : 0;
                    } else {
                        $normalizedMatrix[$food->id][$criterion->nama] = $foodValue != 0 ? $min / $foodValue : 0;
                    }
                } else {
                    $normalizedMatrix[$food->id][$criterion->nama] = 0;
                }
            }
        }

        // Hitung nilai preferensi untuk setiap makanan
        $preferences = [];
        foreach ($makanan as $food) {
            $preferences[$food->id] = 0;
            foreach ($kriteria as $criterion) {
                if (isset($normalizedMatrix[$food->id][$criterion->nama])) {
                    $preferences[$food->id] += $normalizedMatrix[$food->id][$criterion->nama] * $criterion->bobot_kriteria;
                }
            }
        }

        // Urutkan makanan berdasarkan nilai preferensi
        arsort($preferences);


        // Ambil nama makanan dan nilai preferensinya untuk ditampilkan
        $rankings = [];
        foreach ($preferences as $foodId => $preference) {
            $food = $makanan->find($foodId);
            $rankings[] = [
                'nama_makanan' => $food->nama_makanan,
                'nilai_preferensi' => $preference
            ];
        }

        return view('admin.perhitungansaw', compact('makanan', 'kriteria', 'subkriteria', 'rankings', 'normalizedMatrix', 'preferences', 'decisionMatrix', 'jenisMakanan'));
    }
}
