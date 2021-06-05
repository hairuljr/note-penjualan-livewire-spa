<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Pembelian') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('pembelian') }}">Pembelian</a></div>
            <div class="breadcrumb-item"><a href="">Edit Pembelian</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-pembelian action="updatePembelian" :pembelianId="request()->pembelianId" />
    </div>
</x-app-layout>
