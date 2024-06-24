<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class UserKriteriaController extends Controller
{
    public function userkriteria() {
        $data = Kriteria::all();
        return view('user.user_data_kriteria', compact('data'));
    }
}
