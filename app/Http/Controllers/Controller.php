<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\detailPeminjaman;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(){
        return view('admin.dashboardadmin',[
            'totalPinjam' => detailPeminjaman::where('status','=','PINJAM')->orderBy('id', 'DESC')->count(),
            'totalBooking' => detailPeminjaman::where('status','=','BOOKING')->orderBy('id', 'DESC')->count()
        ]);
    }

    public function dashboard(){
        return view('admin/dashboard');
    }
}
