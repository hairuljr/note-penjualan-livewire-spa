<div>
    <x-data-table :data="$data" :model="$penjualans">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    No.
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('no_nota')" role="button" href="#">
                    No. Nota
                    @include('components.sort-icon', ['field' => 'no_nota'])
                </a></th>
                <th><a wire:click.prevent="sortBy('price')" role="button" href="#">
                    Total Belanja
                    @include('components.sort-icon', ['field' => 'price'])
                </a></th>
                <th><a wire:click.prevent="sortBy('created_at')" role="button" href="#">
                    Tanggal Dibuat
                    @include('components.sort-icon', ['field' => 'created_at'])
                </a></th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @php
                $no = 1;
            @endphp
            @foreach ($penjualans as $penjualan)
                <tr x-data="window.__controller.dataTableController({{ $penjualan->id }})">
                    <td>{{ $no++ }}</td>
                    <td>{{ $penjualan->no_nota }}</td>
                    <td>{{ $penjualan->price }}</td>
                    <td>{{ $penjualan->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/penjualan/edit/{{ $penjualan->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" href="/penjualan/show/{{ $penjualan->id }}" class="mr-3"><i class="fa fa-16px fa-eye text-orange-600"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-400"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
