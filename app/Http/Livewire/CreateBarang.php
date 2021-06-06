<?php

namespace App\Http\Livewire;

use App\Models\Barang;
use Livewire\Component;

class CreateBarang extends Component
{
    public $barang;
    public $barangId;
    public $action;
    public $button;

    protected function getRules()
    {
        $rules = ($this->action == "updateBarang") ? [
            'barang.code' => 'required|unique:barangs,code,' . $this->barangId
        ] : [];

        return array_merge([
            'barang.price' => 'required|numeric|min:1',
            'barang.name' => 'required|min:3',
            'barang.code' => 'required|unique:barangs,code'
        ], $rules);
    }

    public function createBarang ()
    {
        $this->resetErrorBag();
        $this->validate();

        Barang::create($this->barang);

        $this->emit('saved');
        $this->reset('barang');
    }

    public function updateBarang ()
    {
        $this->resetErrorBag();
        $this->validate();

        Barang::query()
            ->where('id', $this->barangId)
            ->update([
                "name" => $this->barang->name,
                "code" => $this->barang->code,
                "price" => $this->barang->price,
            ]);

        $this->emit('saved');
    }

    public function mount ()
    {
        if (!$this->barang && $this->barangId) {
            $this->barang = Barang::find($this->barangId);
        }

        $this->button = create_button($this->action, "Barang");
    }

    public function render()
    {
        return view('livewire.create-barang');
    }
}
