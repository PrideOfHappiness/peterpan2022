<?php

namespace App\Http\Controllers;

use App\Models\dataBarang;
use App\Models\detailPeminjaman;
use App\Models\peminjaman;
use Illuminate\Http\Request;

class BarangTersediaController extends Controller
{
    //
    public function index(){
        return view('dosen.databarangdosen',[
            'dataBarang'=>dataBarang::where('status','=','TERSEDIA')->get()
        ]);
    }

    public function pinjamPost(Request $request){
        $request->validate([
            'id_peminjam'=>'required',
            'id_barang'=>'required',
            'tgl_pinjam'=>'required',
            'tgl_selesai'=>'required',
            'tgl_booking'=>'required',
            'total_stok_dipinjam'=>'required'
        ]);

        $barangDipinjam = dataBarang::where('id','=',$request['id_barang'])->get()[0];
        if ($barangDipinjam->stok < $request['total_stok_dipinjam']) {
            return redirect()->route('barangTersedia');
        }else{
            $requestPeminjaman = [];
            $requestPeminjaman['tgl_pinjam'] = $request['tgl_pinjam'];
            $requestPeminjaman['tgl_selesai'] = $request['tgl_selesai'];
            $requestPeminjaman['tgl_booking'] = $request['tgl_booking'];
            $requestPeminjaman['id_user'] = $request['id_peminjam'];

            peminjaman::create($requestPeminjaman);


            $dataPeminjamanRecord =  peminjaman::latest()->first();

            $requestDetailPeminjaman = [];
            $requestDetailPeminjaman['id_peminjam'] = $dataPeminjamanRecord->id;
            $requestDetailPeminjaman['id_barang'] = $request['id_barang'];
            $requestDetailPeminjaman['status'] = "BOOKING";


            detailPeminjaman::create($requestDetailPeminjaman);

            $barangDipinjam->stok = $barangDipinjam->stok-$request['total_stok_dipinjam'];
            $barangDipinjam->save();
            
            return redirect()->route('barangTersedia');
        }
    }
}
