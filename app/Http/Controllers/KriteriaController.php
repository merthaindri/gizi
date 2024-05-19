<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    public function kriteria() {

        $data = Kriteria::all();
        return view('admin.data_kriteria', compact('data'));
    }

    public function tambahkriteria() {
        return view('admin.tambah_data_kriteria');
    }

    public function insertkriteria(Request $request) {
        Kriteria::create($request->all());
        return redirect()->route('kriteria');
    }

    public function tampilkriteria($id){
        $data = Kriteria::find($id);
        return view('admin.edit_data_kriteria', compact('data'));
    }

    public function editkriteria(Request $request, $id){
        $data = Kriteria::find($id);
        $data->update($request->all());
        return redirect()->route('kriteria');
    }

    public function hapuskriteria($id){
        $data = Kriteria::find($id);
        $data->delete();
        return redirect()->route('kriteria');
    }
}
