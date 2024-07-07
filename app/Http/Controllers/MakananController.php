<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use App\Models\SubKriteria;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function makanan() {
        $data = Makanan::with(['natriumInfo', 'kaliumInfo', 'proteinInfo', 'indeksGlikemik', 'caraPengolahan'])->get();
     
        return view('admin.data_makanan', compact('data'));
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
