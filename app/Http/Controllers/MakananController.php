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
}
