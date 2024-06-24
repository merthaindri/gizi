<?php

namespace App\Http\Controllers;

use App\Models\Makanan;
use Illuminate\Http\Request;

class UserMakananController extends Controller
{
    public function usermakanan() {
        $data = Makanan::all();
        return view('user.user_data_makanan', compact('data'));
    }
}
