<?php

namespace App\Http\Controllers\Dashboard\Pekerjaan;

use App\Http\Controllers\Controller;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    public function index()
    {
        return view('dashboard.pekerjaan.index');
    }
}
