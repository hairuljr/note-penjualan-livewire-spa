<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Penjualan;
use Livewire\Component;

class CreatePenjualan extends Component
{
    public $penjualan;
    public $penjualanId;
    public $action;
    public $button;
    public $barangs;

    protected function getRules()
    {
        $rules = ($this->action == "updatePenjualan") ? [
            'penjualan.no_nota' => 'required|unique:penjualans,no_nota,' . $this->penjualanId,
            'penjualan.barang_id' => 'required'
        ] : [];

        return array_merge([
            'penjualan.note' => 'required',
            'penjualan.price' => 'required|numeric|min:1',
            'penjualan.no_nota' => 'required|unique:penjualans,no_nota'
        ], $rules);
    }

    public function createPenjualan ()
    {
        $this->resetErrorBag();
        $this->validate();
        $penjualannya = $this->penjualan;
        $barang['barang_id'] = implode('|', $penjualannya['barang_id']);
        unset($penjualannya['barang_id']);
        Penjualan::create(array_merge($penjualannya, $barang));

        $this->emit('saved');
        $this->reset('penjualan');
    }

    public function updatePenjualan ()
    {
        $this->resetErrorBag();
        $this->validate();
        $penjualannya = $this->penjualan;
        $barang = implode('|', $penjualannya['barang_id']);
        unset($penjualannya['barang_id']);
        Penjualan::query()
            ->where('id', $this->penjualanId)
            ->update([
                "price" => $this->penjualan->price,
                "no_nota" => $this->penjualan->no_nota,
                "note" => $this->penjualan->note,
                "barang_id" => $barang,
            ]);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->penjualan && $this->penjualanId) {
            $this->penjualan = Penjualan::find($this->penjualanId);
        }
        $this->barangs = Barang::all();

        $this->button = create_button($this->action, "Penjualan");
    }

    public function render()
    {
        return view('livewire.create-penjualan');
    }
}
