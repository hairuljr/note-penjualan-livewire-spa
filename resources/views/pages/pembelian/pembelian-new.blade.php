<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Pembelian Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('pembelian') }}">Pembelian</a></div>
            <div class="breadcrumb-item"><a href="">Buat Pembelian Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-pembelian action="createPembelian" />
    </div>
</x-app-layout>
