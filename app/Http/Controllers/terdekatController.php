<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class terdekatController extends Controller
{
    public function index()
    {
        // Ambil data dari model jika diperlukan
        return view('terdekat_view');
    }
}
