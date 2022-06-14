<?php

namespace App\Http\Controllers;

use App\Models\dataBarang;
use App\Models\detailBarang;
use App\Models\detailPeminjaman;
use Illuminate\Routing\Controller as BaseController;

class BarangDipinjamController extends BaseController
{

    public function index(){
        return view('admin.datapeminjam',[
            'detailPinjaman'=>detailPeminjaman::where('status','=','PINJAM')->orderBy('id', 'DESC')->get()
        ]);
    }
}
