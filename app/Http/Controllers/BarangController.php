<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dataBarang;

class BarangController extends Controller
{
    public static function formTambah(){
        return view('admin.databarangadmin');
    }

    /*public function index() {
        $posts = dataBarang::latest()->get();
        return view('admin.databarangadmin', compact('posts'));
    }*/

    public function add() {
        $this->validate($request, [
            'nama_barang' => 'required|string|max:155',
            'stok' => 'required',
            'status' => 'required',
            'kode_kategori' => 'required'
        ]);

        $post = dataBarang::create([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'status' => $request->status,
            'kode_kategori' => $request->kode_kategori
        ]);

        if ($post) {
            return redirect()
                ->route('admin.databarangadmin')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
             }
        }

    public function edit(){
        $this->validate($request, [
            'nama_barang' => 'required|string|max:155',
            'stok' => 'required',
            'status' => 'required',
            'kode_kategori' => 'required'
        ]);

        $post = dataBarang::FindOrFail($id);

        $post = dataBarang::update([
            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'status' => $request->status,
            'kode_kategori' => $request->kode_kategori
        ]);

        if ($post) {
            return redirect()
                ->route('admin.databarangadmin')
                ->with([
                    'success' => 'New post has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
             }
        }

    public function delete(){
        $post = dataBarang::findOrFail($id);
        $post->delete();

        if ($post) {
            return redirect()
                ->route('admin.databarangadmin')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('admin.databarangadmin')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
             }
        }
    }

