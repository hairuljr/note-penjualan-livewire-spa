<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Edit Barang') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('barang') }}">Barang</a></div>
            <div class="breadcrumb-item"><a href="">Edit Barang</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:create-barang action="updateBarang" :barangId="request()->barangId" />
    </div>
</x-app-layout>
