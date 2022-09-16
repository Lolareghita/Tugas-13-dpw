<?php

namespace App\Http\Controllers;
use App\Models\kategori;

class KategoriController extends Controller {
    function index(){
        $data['list_kategori'] = Kategori::all();
        return view('kategori.index', $data);
    }
    function create(){
        return view('kategori.create');
    }
    function store(){
        $kategori = new Kategori();
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('admin/kategori')->with('success', 'Data Berhasil Ditambahkan');
    }
    function show(Kategori $kategori){
        $data['kategori'] = $kategori;
        return view('kategori.show', $data);
    }
    function edit(Kategori $kategori){
        $data['kategori'] = $kategori;
        return view('kategori.edit', $data);
    }
    function update(Kategori $kategori){
        $kategori->nama_kategori = request('nama_kategori');
        $kategori->save();

        return redirect('/kategori')->with('success', 'Data Berhasil Diedit');
    }
    function destroy(kategori $kategori){
        $kategori->delete();

        return redirect('/kategori')->with('danger', 'Data Berhasil Dihapus');

    }

    function filter(){
        $nama = request('nama');
        $data['list_kategori'] = kategori::where('nama', $nama )->get();
        $data['nama'] = $nama;
        return view('kategori.index', $data);
    }
    
}