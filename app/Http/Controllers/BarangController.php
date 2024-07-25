<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barang = Barang::all();
        return view('barang.index', compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_barang',
            'nama_barang' => 'required|max:150',
            'merek' => 'required|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|max:10'
        ]);

        Barang::create($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Barang $barang)
    {
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barang $barang)
    {
        return view('barang.update', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'id_barang',
            'nama_barang' => 'required|max:150',
            'merek' => 'required|max:100',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
            'satuan' => 'required|max:10'
        ]);

        $barang->update($request->all());
        return redirect()->route('barang.index')->with('success', 'Barang berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barang $barang)
    {
        $barang->delete();
        return redirect()->route('barang.index')->with('suces', 'Barang berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan logika pencarian sesuai kebutuhan Anda
        $results = Barang::where('nama_barang', 'like', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('barang.search_results', ['results' => $results]);
    }
}
