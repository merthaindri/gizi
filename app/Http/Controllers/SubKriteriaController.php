<?php

namespace App\Http\Controllers;

use App\Models\SubKriteria;
use Illuminate\Http\Request;

class SubKriteriaController extends Controller
{
    public function subkriteria(){

        $data = SubKriteria::all();
        return view('admin.data_subkriteria', compact('data'));
    }

    public function tambahsubkriteria() {
        return view('admin.tambah_data_subkriteria');
    }

    public function insertsubkriteria(Request $request) {
        try {
            SubKriteria::create($request->all());
            return redirect()->route('subkriteria')->with('success', 'Data Sub Kriteria berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menambahkan data sub kriteria.');
        }
    }

    public function tampilsubkriteria($id){
        $data = SubKriteria::find($id);
        return view('admin.edit_data_subkriteria', compact('data'));
    }

    public function editsubkriteria(Request $request, $id){
        try {
            $data = SubKriteria::find($id);
            $data->update($request->all());
            return redirect()->route('subkriteria')->with('success', 'Data Sub Kriteria berhasil diperbarui!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat memperbarui data sub kriteria.');
        }
    }

    public function hapussubkriteria($id){
        try {
            $data = SubKriteria::find($id);
            $data->delete();
            return redirect()->route('subkriteria')->with('success', 'Data Sub Kriteria berhasil dihapus!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menghapus data sub kriteria.');
        }
    }
}
