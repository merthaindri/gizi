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

    public function tampilkriteria($id){
        $data = Kriteria::find($id);
        return view('admin.edit_data_kriteria', compact('data'));
    }

    public function editkriteria(Request $request, $id){
        try {
            $data = Kriteria::find($id);
            $data->update($request->all());
            return redirect()->route('kriteria')->with('success', 'Data Kriteria berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data kriteria.');
        }
    }

    public function hapuskriteria($id){
        try {
            $data = Kriteria::find($id);
            $data->delete();
            return redirect()->route('kriteria')->with('success', 'Data Kriteria berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data kriteria.');
        }
    }
}
