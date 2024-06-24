<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class MakananController extends Controller
{
    public function makanan() {
        $data = Makanan::all();
        return view ('admin.data_makanan', compact('data'));
    }

    public function tambahmakanan() {
        return view('admin.tambah_data_makanan');
    }

    public function insertmakanan(Request $request) {
        Makanan::create($request->all());
        return redirect()->route('makanan');
    }

    public function tampilmakanan($id){
        $data = Makanan::find($id);
        return view('admin.edit_data_makanan', compact('data'));
    }

    public function editmakanan(Request $request, $id){
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
