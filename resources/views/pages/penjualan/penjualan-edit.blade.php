<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Penjualan') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('penjualan') }}">Penjualan</a></div>
            <div class="breadcrumb-item"><a href="">Edit Penjualan</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-penjualan action="updatePenjualan" :penjualanId="request()->penjualanId" />
    </div>
</x-app-layout>
