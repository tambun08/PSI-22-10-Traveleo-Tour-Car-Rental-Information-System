<?php

namespace App\Http\Controllers\Dashboard\Pesansupir;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PesansupirController extends Controller
{
    public function index()
    {
        $data = User::where('role', 3)->paginate(10);
        return view('dashboard.pesansupir.index', compact('data'));
    }
   
}
