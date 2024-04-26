<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {      
        $data['buku'] = \App\Models\Buku::limit(3)
        ->paginate(3);
        $data['judul'] = 'Data Buku';   
        $data['deskripsi'] = 'Berikut adalah data-data Buku : ';
        return view('buku_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['buku'] = new \App\Models\Buku();
        $data['route'] = 'buku.store';
        $data['method'] = 'post';
        $data['tombol'] = 'Simpan';
        $data['judul'] = 'Tambah Data';
        return view('buku_form', $data);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasiData = $request->validate([
            'judul' => 'required|unique:bukus,judul',
            'deskripsi' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun' => 'required'
        ]);
        $buku = new \App\Models\Buku();
        $buku->fill($validasiData);
        $buku->save();

        flash('Data Berhasil Disimpan');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
