<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function index_view ()
    {
        return view('pages.penjualan.penjualan-data', [
            'penjualan' => Penjualan::class
        ]);
    }
}
