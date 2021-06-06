<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Penjualan') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data penjualan baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="no_nota" value="{{ __('Nota') }}" />
                <small>No. Nota</small>
                <x-jet-input id="no_nota" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="penjualan.no_nota" />
                <x-jet-input-error for="penjualan.no_nota" class="mt-2" />
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="price" value="{{ __('Total Belanja') }}" />
                <small>Total Belanja</small>
                <x-jet-input id="price" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="penjualan.price" />
                <x-jet-input-error for="penjualan.price" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="note" value="{{ __('Keterangan') }}" />
                <small>Keterangan</small>
                <x-jet-input id="note" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="penjualan.note" />
                <x-jet-input-error for="penjualan.note" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="penjualan" value="{{ __('Barang') }}" />
                <small>Pilih Barang</small>
                <select id="penjualan" multiple class="mt-1 block w-full form-control form-input rounded-md shadow-sm" wire:model.defer="penjualan.barang_id" />
                    @foreach ($barangs as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="penjualan.barang_id" class="mt-2" />
            </div>
        </x-slot>
        

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>
            <x-back-button route="penjualan"></x-back-button>
            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
