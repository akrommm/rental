<x-app>
    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">Detail Produk
    </h5>
    <hr>
    <x-template.button.back-button url="admin/manajemen-produk" />
    <div class="card shadow-lg" style="margin: auto; border-radius: 10px;">
        <!-- Bagian Gambar Banner -->
        <div class="card-img-top text-center">
            <img
                src="{{ url($produk->gambar) }}"
                alt="Banner Event"
                class="img-fluid rounded"
                style="max-height: 300px; object-fit: cover; width: 100%;">
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <h6 class="text-dark font-weight-bold">Nama Produk</h6>
                    <p>{{ $produk->nama }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-dark font-weight-bold">Tipe</h6>
                    <p>{{ $produk->tipe }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-dark font-weight-bold">Harga Perjam</h6>
                    <p>Rp. {{ number_format($produk->harga_perjam, 0, ',', '.') }}</p>
                </div>

                <div class="col-md-6">
                    <h6 class="text-dark font-weight-bold">Harga Perhari</h6>
                    <p>Rp. {{ number_format($produk->harga_perhari, 0, ',', '.') }}</p>
                </div>
                <div class="col-md-6">
                    <h6 class="text-dark font-weight-bold">Status</h6>
                    <p>
                        @if ($produk->status == 'Maintenance')
                        <label class="btn btn-warning">{{$produk->status}}</label>
                        @endif

                        @if ($produk->status == 'Tersedia')
                        <label class="btn btn-success">{{$produk->status}}</label>
                        @endif

                        @if ($produk->status == 'Disewa')
                        <label class="btn btn-danger">{{$produk->status}}</label>
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app>