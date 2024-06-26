<?php

namespace App\Http\Controllers;

use App\Models\Rekomendasi;
use Illuminate\Http\Request;

class UserRekomendasiController extends Controller
{
    public function rekomendasi() {

        return view('user.rekomendasi');
    }
}
