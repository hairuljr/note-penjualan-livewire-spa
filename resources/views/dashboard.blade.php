<x-app-layout>
    <x-slot name="header_content">
        <h1>Dashboard</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
        </div>
    </x-slot>

    <div class="overflow-hidden shadow-xl sm:rounded-lg">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-dollar-sign"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Penjualan</h4>
                  </div>
                  <div class="card-body">
                    <p class="text-bold" style="font-weight: 700; font-size: 18px;">
                      @rupiah($total_price->total_price)
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-cash-register"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Nota</h4>
                  </div>
                  <div class="card-body">
                    {{ $total_nota }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-coins"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Barang</h4>
                  </div>
                  <div class="card-body">
                    {{ $total_barang }}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-funnel-dollar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Jual /hari</h4>
                  </div>
                  <div class="card-body">
                    {{ $total_jual->total_jual }}
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</x-app-layout>
