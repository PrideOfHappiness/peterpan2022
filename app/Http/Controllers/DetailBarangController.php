<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataBarang;

class DetailBarangController extends Controller
{
    public function index(){
        return view('admin.databarangadmin',[
            'dataBarang'=>dataBarang::all()
        ]);
    }
}
