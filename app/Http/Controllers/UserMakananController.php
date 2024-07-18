<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class UserMakananController extends Controller
{
    public function usermakanan(Request $request) {
        $jenisMakanan = $request->input('jenis_makanan');

        // Ambil data makanan sesuai dengan jenis makanan yang dipilih
        if ($jenisMakanan) {
            $data = Makanan::with(['natriumInfo', 'kaliumInfo', 'proteinInfo', 'indeksGlikemik', 'caraPengolahan'])
                ->where('jenis_makanan', $jenisMakanan)
                ->get();
        } else {
            $data = Makanan::with(['natriumInfo', 'kaliumInfo', 'proteinInfo', 'indeksGlikemik', 'caraPengolahan'])->get();
        }

        // Daftar jenis makanan untuk dropdown filter
        $jenisMakananOptions = [
            'Karbohidrat', 'Masakan Protein Hewani dan Nabati', 'Sayur'
        ];

        return view('user.user_data_makanan', compact('data', 'jenisMakanan', 'jenisMakananOptions'));
    }
}
