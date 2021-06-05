<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data Penjualan') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Penjualan</a></div>
            <div class="breadcrumb-item"><a href="{{ route('penjualan') }}">Data Penjualan</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="penjualan" :model="$penjualan" />
    </div>
</x-app-layout>
