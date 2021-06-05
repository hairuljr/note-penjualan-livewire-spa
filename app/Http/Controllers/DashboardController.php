<?php

namespace App\Http\Controllers;

use App\Models\{Barang, Penjualan};
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $total_price = Penjualan::select(DB::raw('SUM(price) as total_price'))->first();
        $total_jual = Penjualan::whereDate('updated_at',  Carbon::today())->select(DB::raw('COUNT(*) as total_jual'))->first();
        $total_nota = Penjualan::count();
        $total_barang = Barang::count();
        return view('dashboard', compact('total_price', 'total_jual', 'total_nota', 'total_barang'));
    }
}
