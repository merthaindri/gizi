<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class PerhitunganSAWController extends Controller
{
    public function perhitungansaw() {

        return view('admin.perhitungansaw');
    }
}
