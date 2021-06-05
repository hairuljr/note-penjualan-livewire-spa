<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
    <div class="card">
        <div class="card-header">
          <h4>No. Nota: <code>{{ $pembelian->no_nota }}</code></h4>
        </div>
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Kode Barang</th>
                <th scope="col">Nama Barang</th>
              </tr>
            </thead>
            <tbody>
                @php
                    $no =1;
                @endphp
              @foreach ($barangs as $item)
                <tr>
                    <th scope="row">{{ $no++.'.' }}</th>
                    <td>{{ $item->code }}</td>
                    <td>{{ $item->name }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <div class="card-footer">
          <a href="{{ route('pembelian') }}" class="-ml- btn btn-primary shadow-none">
            <span class="fas fa-arrow-left"></span> Kembali
          </a>
        </div>
      </div>
</div>
