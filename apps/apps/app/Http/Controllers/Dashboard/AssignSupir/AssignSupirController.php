<?php

namespace App\Http\Controllers\Dashboard\AssignSupir;
// namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AssignSupir;
use App\Models\User;
use Illuminate\Http\Request;

class AssignSupirController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_assign($booking)
    {
        $data['title'] = 'Assign Supir';
        $supir = User::where('role_name', 'Supir')->get();
        return view('dashboard.assignSupir.create', $data, compact('supir','booking'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_assign(Request $request, $booking)
    {
        $request->validate([
            'supir_id' => 'required',
        ]);

        $assignSupir = new AssignSupir;
        $assignSupir->supir_id = $request->supir_id;
        $assignSupir->pesanan_id = $booking;
        $assignSupir->status = 'menunggu konfirmasi supir';
        $assignSupir->save();
        return redirect()->route('booking.index');
    }
   
    public function detail_assign(Request $request, $booking)
    {
        $assignSupir = AssignSupir::where('pesanan_id',$booking)->paginate(10);
        return view('dashboard.assignSupir.detail', compact('assignSupir'));
    }

}
