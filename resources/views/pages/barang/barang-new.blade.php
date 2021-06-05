<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Buat Barang Baru') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('barang') }}">Barang</a></div>
            <div class="breadcrumb-item"><a href="">Buat Barang Baru</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-barang action="createBarang" />
    </div>
</x-app-layout>
