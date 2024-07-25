<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('kendaraan.index', compact('kendaraan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kendaraan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan',
            'no_mesin' => 'required|string|max:15|unique:kendaraan',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki',
            'warna' => 'required|in:putih,hitam,hijau,biru,Merah',
        ]);

        Kendaraan::create($request->all());
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        return view('kendaraan.show', compact('kendaraan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.update', compact('kendaraan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kendaraan $kendaraan)
    {
        $request->validate([
            'no_pol' => 'required|string|max:10|unique:kendaraan,no_pol,' . $kendaraan->no_pol . ',no_pol',
            'no_mesin' => 'required|string|max:15|unique:kendaraan,no_mesin,' . $kendaraan->no_mesin . ',no_mesin',
            'merek' => 'required|in:honda,yamaha,suzuki,kawasaki',
            'warna' => 'required|in:putih,hitam,hijau,biru,merah',
        ]);

        $kendaraan->update($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kendaraan $kendaraan)
    {
        $kendaraan->delete();
        return redirect()->route('kendaraan.index')
            ->with('suces', 'Kendaraan berhasil dihapus.');
    }
}
