@php
$links = [
    [
        "href" => "dashboard",
        "text" => "Dashboard",
        "is_multi" => false,
    ],
    [
        "href" => [
            [
                "section_text" => "Barang",
                "section_list" => [
                    ["href" => "barang", "text" => "Data Barang"],
                    ["href" => "barang.new", "text" => "Buat Barang"]
                ]
            ]
        ],
        "text" => "Barang",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Pembelian",
                "section_list" => [
                    ["href" => "pembelian", "text" => "Data Pembelian"],
                    ["href" => "pembelian.new", "text" => "Buat Pembelian"]
                ]
            ]
        ],
        "text" => "Pembelian",
        "is_multi" => true,
    ],
    [
        "href" => [
            [
                "section_text" => "Penjualan",
                "section_list" => [
                    ["href" => "penjualan", "text" => "Data Penjualan"],
                    ["href" => "penjualan.new", "text" => "Buat Penjualan"]
                ]
            ]
        ],
        "text" => "Penjualan",
        "is_multi" => true,
    ],
];
$navigation_links = array_to_object($links);
@endphp

<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">
                <img class="d-inline-block" width="32px" height="30.61px" src="{{ asset('vendor/logo.png') }}" alt="Logo KJM" style="width: 50px;">
            </a>
        </div>
        @foreach ($navigation_links as $link)
        <ul class="sidebar-menu">
            <li class="menu-header">{{ $link->text }}</li>
            @if (!$link->is_multi)
            <li class="{{ Request::routeIs($link->href) ? 'active' : '' }}">
                <a class="nav-link" href="{{ route($link->href) }}"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            @else
                @foreach ($link->href as $section)
                    @php
                    $routes = collect($section->section_list)->map(function ($child) {
                        return Request::routeIs($child->href);
                    })->toArray();
                    $is_active = in_array(true, $routes);
                    $icon = $section->section_text == 'Barang' ? 'cubes' : ($section->section_text == 'Pembelian' ? 'shopping-basket' : 'cash-register');
                    @endphp

                    <li class="dropdown {{ ($is_active) ? 'active' : '' }}">
                        <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-{{ $icon }}"></i> <span>{{ $section->section_text }}</span></a>
                        <ul class="dropdown-menu">
                            @foreach ($section->section_list as $child)
                                <li class="{{ Request::routeIs($child->href) ? 'active' : '' }}"><a class="nav-link" href="{{ route($child->href) }}">{{ $child->text }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            @endif
        </ul>
        @endforeach
    </aside>
</div>
