<?php

namespace App\Http\Controllers\Dashboard\Penggajian;

use App\Http\Controllers\Controller;

use App\Models\Pesanan;
use Illuminate\Http\Request;

class PenggajianController extends Controller
{
    public function index()
    {
        return view('dashboard.Penggajian.index');
    }
}
