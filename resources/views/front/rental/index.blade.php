<x-base>
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-md-10" data-aos="fade-up" data-aos-delay="200">
                    <h1>Rental Gaming</h1>
                    <p class="lead text-muted">Tempat terbaik untuk menyewa perangkat gaming dengan harga terjangkau dan kualitas terbaik.</p>
                </div>
            </div>
        </div>
    </section>
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Daftar Rental Gaming</h2>
            </div>
            <div class="row justify-content-center">
                @if($produk->isEmpty())
                <div class="col-12">
                    <p class="text-center">Belum ada produk tersedia.</p>
                </div>
                @else
                @foreach($produk as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="product-card" data-bs-toggle="modal" data-bs-target="#modalDetail{{ $item->id }}">
                        <div class="image-container">
                            <img src="{{ url($item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid rounded">
                        </div>
                        <hr>
                        <div class="badge-container mb-3">
                            <span class="badge bg-dark">{{ $item->tipe }}</span>
                        </div>
                        <h4 class="mt-2 product-title">
                            <a class="text-decoration-none" style="cursor: pointer;">{{ Str::limit($item->nama, 40, '...') }}</a>
                        </h4>
                        <div class="product-pricing">
                            <p class="text-muted">
                                <strong>Harga:</strong>
                                Rp {{ number_format($item->harga_perjam, 0, ',', '.') }} / Jam<br>
                                Rp {{ number_format($item->harga_perhari, 0, ',', '.') }} / Hari
                            </p>
                        </div>
                        <div class="product-status">
                            @if($item->status == 'Maintenance')
                            <span class="status-badge maintenance">Maintenance</span>
                            @elseif($item->status == 'Tersedia')
                            <span class="status-badge available">Tersedia</span>
                            @else
                            <span class="status-badge rented">Disewa</span>
                            @endif
                        </div>
                    </div>
                </div>


                @endforeach
                @endif
            </div>
        </div>
    </section>
    @foreach($produk as $item)
    <!-- Modal Detail Produk -->
    <div class="modal fade" id="modalDetail{{ $item->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $item->id }}" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalLabel{{ $item->id }}">{{ $item->nama }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="{{ url($item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid rounded" style="max-height: 200px; object-fit: cover;">
                    </div>
                    <hr>
                    <p><strong>Tipe:</strong> {{ $item->tipe }}</p>
                    <p class="text-muted">{{ Str::limit($item->deskripsi, 150, '...') }}</p>
                    <p class="fw-bold">Harga:</p>
                    <ul class="list-unstyled">
                        <li>💰 Rp {{ number_format($item->harga_perjam, 0, ',', '.') }} / Jam</li>
                        <li>💰 Rp {{ number_format($item->harga_perhari, 0, ',', '.') }} / Hari</li>
                    </ul>
                    <p><strong>Status:</strong>
                        @if($item->status == 'Maintenance')
                        <span class="badge bg-warning text-dark">Maintenance</span>
                        @elseif($item->status == 'Tersedia')
                        <span class="badge bg-success">Tersedia</span>
                        @else
                        <span class="badge bg-danger">Disewa</span>
                        @endif
                    </p>
                </div>
                <div class="modal-footer justify-content-between">
                    @if($item->status == 'Tersedia')
                    <a href="https://wa.me/6289531231716?text=Halo%20Admin,%20saya%20ingin%20menyewa%20{{ urlencode($item->nama) }}.%20Apakah%20tersedia?"
                        target="_blank" class="btn btn-success w-100">
                        Sewa Sekarang
                    </a>
                    @else
                    <button class="btn btn-secondary w-100" disabled>Tidak Tersedia</button>
                    @endif
                    <button type="button" class="btn btn-danger w-100" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <style>
        /* Styling Product Card */

        .product-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            padding: 20px;
            text-align: center;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
        }

        /* Gambar Produk */
        .image-container img {
            width: 100%;
            height: 180px;
            border-radius: 10px;
            object-fit: cover;
        }

        /* Nama Produk */
        .product-title a {
            color: #333;
            text-decoration: none;
            font-size: 1.2rem;
            font-weight: bold;
        }

        .product-title a:hover {
            color: rgb(69, 69, 69);
        }

        /* Status Produk */
        .product-status {
            margin-top: 10px;
        }

        .status-badge {
            display: inline-block;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
            text-transform: uppercase;
        }

        /* Warna status */
        .status-badge.maintenance {
            background-color: #ffcc00;
            color: #000;
        }

        .status-badge.available {
            background-color: #28a745;
            color: #fff;
        }

        .status-badge.rented {
            background-color: #dc3545;
            color: #fff;
        }

        /* Tombol Sewa */
        .btn {
            font-size: 0.9rem;
            padding: 8px 12px;
            border-radius: 5px;
        }

        /* Custom Pagination - Hijau */
        .pagination-container .pagination {
            justify-content: center;
            /* Menjaga pagination tetap di tengah */
        }

        .pagination-container .page-item {
            border-radius: 5px;
            margin: 0 5px;
            /* Jarak antar item */
        }

        .pagination-container .page-link {
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #f8f9fa;
            color: rgb(79, 79, 79);
            /* Hijau */
            border: 1px solid #ddd;
        }

        .pagination-container .page-link:hover {
            background-color: rgb(79, 79, 79);
            /* Hijau */
            color: #fff;
        }

        /* Ganti warna tombol aktif pagination */
        .pagination-container .page-item.active .page-link {
            background-color: rgb(78, 78, 78);
            /* Hijau */
            border-color: rgb(78, 78, 78);
            /* Hijau */
            color: #fff;
            /* Putih */
        }

        .pagination-container .page-item.active .page-link:hover {
            background-color: rgb(78, 78, 78);
            /* Hijau sedikit lebih gelap */
            border-color: rgb(78, 78, 78);
            /* Hijau sedikit lebih gelap */
        }
    </style>
</x-base>