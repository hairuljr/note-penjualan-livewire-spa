<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use App\Models\Pembelian;
use Livewire\Component;

class CreatePembelian extends Component
{
    public $pembelian;
    public $pembelianId;
    public $action;
    public $button;
    public $barangs;

    protected function getRules()
    {
        $rules = ($this->action == "updatePembelian") ? [
            'pembelian.no_nota' => 'required|unique:pembelians,no_nota,' . $this->pembelianId,
            'pembelian.barang_id' => 'required'
        ] : [];

        return array_merge([
            'pembelian.price' => 'required|numeric|min:1',
            'pembelian.note' => 'required',
            'pembelian.no_nota' => 'required|unique:pembelians,no_nota'
        ], $rules);
    }

    public function createPembelian ()
    {
        $this->resetErrorBag();
        $this->validate();
        $pembeliannya = $this->pembelian;
        $barang['barang_id'] = implode('|', $pembeliannya['barang_id']);
        unset($pembeliannya['barang_id']);
        Pembelian::create(array_merge($pembeliannya, $barang));

        $this->emit('saved');
        $this->reset('pembelian');
    }

    public function updatePembelian ()
    {
        $this->resetErrorBag();
        $this->validate();
        $pembeliannya = $this->pembelian;
        $barang = implode('|', $pembeliannya['barang_id']);
        unset($pembeliannya['barang_id']);
        Pembelian::query()
            ->where('id', $this->pembelianId)
            ->update([
                "price" => $this->pembelian->price,
                "no_nota" => $this->pembelian->no_nota,
                "note" => $this->pembelian->note,
                "barang_id" => $barang,
            ]);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->pembelian && $this->pembelianId) {
            $this->pembelian = Pembelian::find($this->pembelianId);
        }
        $this->barangs = Barang::all();

        $this->button = create_button($this->action, "Pembelian");
    }

    public function render()
    {
        return view('livewire.create-pembelian');
    }
}
