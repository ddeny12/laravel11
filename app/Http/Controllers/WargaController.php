<?php

namespace App\Http\Controllers;

use App\Models\Warga;
use Illuminate\Http\Request;

class WargaController extends Controller
{
    public function index(){
        $warga = Warga::all();
        return view('warga.index', compact('warga'));
    }
}
