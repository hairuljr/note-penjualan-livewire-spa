<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;

class PembelianController extends Controller
{
    public function index_view ()
    {
        return view('pages.pembelian.pembelian-data', [
            'pembelian' => Pembelian::class
        ]);
    }
}
