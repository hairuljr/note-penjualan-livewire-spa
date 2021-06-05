<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Pembelian;
use Livewire\Component;

class ShowPembelian extends Component
{
    public $pembelian;
    public $pembelianId;
    public $action;
    public $button;
    public $barangs;

    public function mount ()
    {
        if (!$this->pembelian && $this->pembelianId) {
            $this->pembelian = Pembelian::find($this->pembelianId);
        }
        $barang = explode('|', $this->pembelian->barang_id);
        $this->barangs = Barang::whereIn('id', $barang)->get();

        $this->button = create_button($this->action, "Pembelian");
    }

    public function render()
    {
        return view('livewire.show-pembelian');
    }
}
