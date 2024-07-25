<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customer = Customer::all();
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jk' => 'required|in:L,P'
        ]);

        Customer::create($request->all());
        return redirect()->route('customer.index')->with('success', 'Customer Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customer.update', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'nama_customer' => 'required|string|max:150',
            'alamat' => 'required|string',
            'jk' => 'required|in:L,P'
        ]);

        $customer->update($request->all());
        return redirect()->route('customer.index')-> with('success', 'Customer Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customer.index')->with('suces', 'Customer Berhasil Dihapus');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        // Lakukan logika pencarian sesuai kebutuhan Anda
        $results = Customer::where('nama_customer', 'like', '%' . $query . '%')->get();

        // Kembalikan hasil pencarian ke view
        return view('customer.search_results', ['results' => $results]);
    }
}
