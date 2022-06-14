<?php

namespace App\Http\Controllers;

use App\Models\detailPeminjaman;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class BarangDibookingController extends BaseController
{

    public function index(){
        return view('admin.notifmasukadmin',[
            'detailPeminjaman'=>detailPeminjaman::where('status','=','BOOKING')->orderBy('id', 'DESC')->get()
        ]);
    }

    public function tolakBarangPost(Request $request){
        $dataPeminjamanTarget = detailPeminjaman::find($request->idDetailPeminjaman);

        $dataPeminjamanTarget->status ="TOLAK";

        $dataPeminjamanTarget->save();

        return redirect()->route('BarangDibooking');
    }

    public function terimaBarangPost(Request $request){
        $dataPeminjamanTarget = detailPeminjaman::find($request->idDetailPeminjaman);

        $dataPeminjamanTarget->status ="PINJAM";

        $dataPeminjamanTarget->save();

        return redirect()->route('BarangDibooking');
    }
}
