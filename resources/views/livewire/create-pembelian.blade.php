<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4">
        <x-slot name="title">
            {{ __('Pembelian') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat data pembelian baru') }}
        </x-slot>

        <x-slot name="form">
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="no_nota" value="{{ __('Nota') }}" />
                <small>No. Nota</small>
                <x-jet-input id="no_nota" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="pembelian.no_nota" />
                <x-jet-input-error for="pembelian.no_nota" class="mt-2" />
            </div>
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="price" value="{{ __('Total Belanja') }}" />
                <small>Total Belanja</small>
                <x-jet-input id="price" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="pembelian.price" />
                <x-jet-input-error for="pembelian.price" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="note" value="{{ __('Keterangan') }}" />
                <small>Keterangan</small>
                <x-jet-input id="note" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="pembelian.note" />
                <x-jet-input-error for="pembelian.note" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="pembelian" value="{{ __('Barang') }}" />
                <small>Pilih Barang</small>
                <select id="pembelian" multiple class="mt-1 block w-full form-control form-input rounded-md shadow-sm" wire:model.defer="pembelian.barang_id" />
                    @foreach ($barangs as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                <x-jet-input-error for="pembelian.barang_id" class="mt-2" />
            </div>
        </x-slot>
        

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
