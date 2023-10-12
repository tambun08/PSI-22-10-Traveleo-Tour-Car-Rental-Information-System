<?php

namespace App\Http\Controllers\Dashboard\Persetujuan;
// namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\AssignSupir;
use App\Models\Pesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersetujuanController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'Persetujuan';
        $datas = AssignSupir::where('supir_id', Auth::user()->id)->get();
        return view('dashboard.persetujuan.index', $data, compact('datas'));
    }

   /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
   
    public function edit(AssignSupir $persetujuan)
    {
        return view('dashboard.persetujuan.edit', compact('persetujuan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssignSupir $persetujuan)
    {
        $request->validate([
            'status' => 'required',
        ]);

        $persetujuan->status = $request->status;
        if($request->keterangan){
            $persetujuan->keterangan = $request->keterangan;
        }
        $pesanan = Pesanan::where('id', $persetujuan->pesanan_id)->first();
        if($request->status == 'diterima oleh sopir'){
            $persetujuan->keterangan = null;
            $pesanan->supir_id = Auth::user()->id;
            $pesanan->update();
        }elseif($request->status == 'ditolak oleh sopir'){
            $pesanan->supir_id = null;
            $pesanan->update();
        }
        $persetujuan->update();
        return redirect()->back()->with('success', 'Data berhasil dikonfirmasi');
    }
}
