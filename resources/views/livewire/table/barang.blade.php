<div>
    <x-data-table :data="$data" :model="$barangs">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                    No.
                    @include('components.sort-icon', ['field' => 'id'])
                </a></th>
                <th><a wire:click.prevent="sortBy('code')" role="button" href="#">
                    Kode Barang
                    @include('components.sort-icon', ['field' => 'code'])
                </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                    Nama Barang
                    @include('components.sort-icon', ['field' => 'name'])
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
            @foreach ($barangs as $barang)
                <tr x-data="window.__controller.dataTableController({{ $barang->id }})">
                    <td>{{ $no++ }}</td>
                    <td>{{ $barang->code }}</td>
                    <td>{{ $barang->name }}</td>
                    <td>{{ $barang->created_at->format('d M Y H:i') }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        <a role="button" href="/barang/edit/{{ $barang->id }}" class="mr-3"><i class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="fa fa-16px fa-trash text-red-500"></i></a>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
