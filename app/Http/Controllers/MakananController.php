<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function makanan(Request $request) {
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
            'Karbohidrat', 'Masakan Protein Hewani dan Nabati' , 'Sayur'
        ];

        return view('admin.data_makanan', compact('data', 'jenisMakanan', 'jenisMakananOptions'));
    }
    

    public function tambahmakanan() {
        $subKriterias = SubKriteria::all();
        return view('admin.tambah_data_makanan', compact('subKriterias'));
    }

    public function insertmakanan(Request $request) {
        $request->validate([
            'jenis_makanan' => 'required|string|max:255',
            'nama_makanan' => 'required|string|max:255',
            'natrium' => 'required|exists:sub_kriterias,id',
            'kalium' => 'required|exists:sub_kriterias,id',
            'protein' => 'required|exists:sub_kriterias,id',
            'indeks_glikemik' => 'required|exists:sub_kriterias,id',
            'cara_pengolahan' => 'required|exists:sub_kriterias,id',
        ]);

        Makanan::create($request->all());
        return redirect()->route('makanan');
    }

    public function tampilmakanan($id){
        $data = Makanan::find($id);
        $subKriterias = SubKriteria::all();
        return view('admin.edit_data_makanan', compact('data', 'subKriterias'));
    }

    public function editmakanan(Request $request, $id){
        $request->validate([
            'jenis_makanan' => 'required|string|max:255',
            'nama_makanan' => 'required|string|max:255',
            'natrium' => 'required|exists:sub_kriterias,id',
            'kalium' => 'required|exists:sub_kriterias,id',
            'protein' => 'required|exists:sub_kriterias,id',
            'indeks_glikemik' => 'required|exists:sub_kriterias,id',
            'cara_pengolahan' => 'required|exists:sub_kriterias,id',
        ]);
        $data = Makanan::find($id);
        $data->update($request->all());
        return redirect()->route('makanan');
}

    public function hapusmakanan($id){
        $data = Makanan::find($id);
        $data->delete();
        return redirect()->route('makanan');
    }
}
