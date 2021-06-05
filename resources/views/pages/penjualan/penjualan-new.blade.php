<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Penjualan Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('penjualan') }}">Penjualan</a></div>
            <div class="breadcrumb-item"><a href="">Buat Penjualan Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-penjualan action="createPenjualan" />
    </div>
</x-app-layout>
