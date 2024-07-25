<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pegawai.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_pegawai' => 'required|max:150',
            'alamat' => 'required|string',
            'jk' => 'required|in:L,P',
            'jabatan' => 'required|in:teknisi,admin,spv',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        Pegawai::create($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Pegawai Berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pegawai $pegawai)
    {
        return view('pegawai.show', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.update', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama_pegawai' => 'required|max:150',
            'alamat' => 'required|string',
            'jk' => 'required|in:L,P',
            'jabatan' => 'required|in:teknisi,admin,spv',
            'status' => 'required|in:aktif,tidak_aktif',
        ]);

        $pegawai->update($request->all());
        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('pegawai.index')->with('suces', 'Pegawai berhasil dihapus.');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan logika pencarian sesuai kebutuhan Anda
        $results = Pegawai::where('nama_pegawai', 'like', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('pegawai.search_results', ['results' => $results]);
    }
}
