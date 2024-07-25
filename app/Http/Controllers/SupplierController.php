<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('supplier.index', compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $barang = Barang::all();
        return view('supplier.create', compact('barang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_supplier' => 'required|max:150',
            'alamat' => 'required|string',
            'no_hp' => 'required|numeric',
            'id_barang' => 'required|exists:barang,id_barang',
        ]);

        Supplier::create($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view('supplier.show', compact('supplier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {
        $barang = Barang::all();
        return view('supplier.update', compact('supplier', 'barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Supplier $supplier)
    {
        $request->validate([
            'nama_supplier' => 'required|max:150',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|numeric',
            'id_barang' => 'required|exists:barang,id_barang',
        ]);

        $supplier->update($request->all());
        return redirect()->route('supplier.index')->with('success', 'Supplier berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with('suces', 'Supplier berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan logika pencarian sesuai kebutuhan Anda
        $results = Supplier::where('nama_supplier', 'like', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('supplier.search_results', ['results' => $results]);
    }
}
