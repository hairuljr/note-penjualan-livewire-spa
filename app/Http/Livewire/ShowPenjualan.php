<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Penjualan;
use Livewire\Component;

class ShowPenjualan extends Component
{
    public $penjualan;
    public $penjualanId;
    public $action;
    public $button;
    public $barangs;

    public function mount ()
    {
        if (!$this->penjualan && $this->penjualanId) {
            $this->penjualan = Penjualan::find($this->penjualanId);
        }
        $barang = explode('|', $this->penjualan->barang_id);
        $this->barangs = Barang::whereIn('id', $barang)->get();

        $this->button = create_button($this->action, "Penjualan");
    }

    public function render()
    {
        return view('livewire.show-penjualan');
    }
}
