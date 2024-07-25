<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Keluhan;
use App\Models\Kendaraan;
use App\Models\Pegawai;
use Illuminate\Http\Request;

class KeluhanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $keluhan = Keluhan::all();
        return view('keluhan.index', compact('keluhan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kendaraan = Kendaraan::all();
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('keluhan.create', compact('kendaraan', 'customer', 'pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|size:10|exists:kendaraan,no_pol',
            'id_customer' => 'required|exists:customer,id_customer',
            'id_pegawai' => 'required|exists:pegawai,id_pegawai'
        ]);

        Keluhan::create([
            'nama_keluhan' => $request->nama_keluhan,
            'ongkos' => $request->ongkos,
            'no_pol' => $request->no_pol,
            'id_customer' => $request->id_customer,
            'id_pegawai' => $request->id_pegawai,
        ]);

        return redirect()->route('keluhan.index')->with('success', 'Keluhan Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Keluhan $keluhan)
    {
        return view('keluhan.show', compact('keluhan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Keluhan $keluhan)
    {
        $customer = Customer::all();
        $pegawai = Pegawai::all();
        return view('keluhan.update', compact('keluhan', 'customer', 'pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Keluhan $keluhan)
    {
        $request->validate([
            'nama_keluhan' => 'required|string',
            'ongkos' => 'required|integer',
            'no_pol' => 'required|string|size:10|exists:kendaraan,no_pol',
            'id_customer' => 'required|exists:customer,id_customer',
            'id_pegawai' => 'required|exists:pegawai,id_pegawai'
        ]);

        $keluhan->update($request->all());
        return redirect()->route('keluhan.index')->with('success', 'Keluhan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Keluhan $keluhan)
    {
        $keluhan->delete();
        return redirect()->route('keluhan.index')->with('suces', 'Keluhan berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan logika pencarian sesuai kebutuhan Anda
        $results = Keluhan::where('nama_keluhan', 'like', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('keluhan.search_results', ['results' => $results]);
    }
}
