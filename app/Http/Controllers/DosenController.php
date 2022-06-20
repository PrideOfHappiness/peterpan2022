<?php

namespace App\Http\Controllers;

use App\Models\dataBarang;
use App\Models\detailPeminjaman;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class DosenController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view('dosen.dashboard',[
            'totalBarangTersedia' => dataBarang::where('status','=','TERSEDIA')->count()
        ]);
    }
}
