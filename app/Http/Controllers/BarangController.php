<?php

namespace App\Http\Controllers;

use App\Models\Barang;

class BarangController extends Controller
{
    public function index_view ()
    {
        return view('pages.barang.barang-data', [
            'barang' => Barang::class
        ]);
    }
}
