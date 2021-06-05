<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Detail Pembelian') }}</h1>

        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('pembelian') }}">Pembelian</a></div>
            <div class="breadcrumb-item"><a href="">Detail Pembelian</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:show-pembelian action="" :pembelianId="request()->pembelianId" />
    </div>
</x-app-layout>
