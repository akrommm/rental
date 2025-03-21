<x-base>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-12 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                    <h1>Selamat Datang di A-Labs Rental</h1>
                    <h2> Solusi Terbaik untuk Sewa PlayStation & Alat Gaming!</h2>
                    <div class="d-flex justify-content-center ">
                        <a href="#about" class="btn-get-started scrollto">Mulai</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main">
        <!-- ======= Tentang Kami ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title"><br><br><br>
                    <h2>Tentang Kami</h2>
                </div>
                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            <strong>A-Labs Rental</strong> adalah tempat terbaik untuk menyewa PlayStation, gaming PC, dan berbagai alat gaming lainnya. Nikmati pengalaman bermain terbaik dengan harga terjangkau dan layanan berkualitas.
                        </p>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0"><br><br><br><br></div>
                </div>
            </div>
        </section>

        <!-- ======= Kenapa Memilih Kami? ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content">
                            <h3>Kenapa Memilih A-Labs Rental?</h3>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#accordion-list-1">
                                        <span>01</span> Harga Terjangkau
                                        <i class="bx bx-chevron-down icon-show"></i>
                                        <i class="bx bx-chevron-up icon-close"></i>
                                    </a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Sewa PlayStation dan alat gaming dengan harga terbaik dan berbagai paket menarik.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Koleksi Lengkap <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Tersedia PlayStation 4, PlayStation 5, VR Set, dan Gaming PC untuk pengalaman terbaik.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Booking Mudah <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Cek ketersediaan dan booking secara instan melalui sistem kami.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("{{ url('/') }}/style/assets/img/game.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>
            </div>
        </section>

        <!-- ======= Call to Action ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Cek Ketersediaan & Booking Sekarang!</h3>
                        <p> Pilih perangkat gaming favoritmu, cek jadwal, dan langsung main!</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="{{ url('rental') }}">Booking Sekarang</a>
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
                                <span class="badge bg-dark">{{ $item->kategori->judul }}</span>
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


        <!-- ======= Kontak Kami ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Kontak Kami</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p>Jl. Contoh No. 123, Kota XYZ</p>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3168.2675111660286!2d-122.08385138469183!3d37.386051979832874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb24b5f5b9f01%3A0x409aa58f6d6d0b09!2sGoogleplex!5e0!3m2!1sen!2sus!4v1629487774143!5m2!1sen!2sus" width="100%" height="250" style="border-radius:3px;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="info-box">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Kami</h3>
                            <p>support@alabsrental.com</p>
                        </div>
                        <div class="info-box">
                            <i class="bx bx-phone-call"></i>
                            <h3>Hubungi Kami</h3>
                            <p>+62 8953-1241-776</p>
                            <a href="https://wa.me/6289531231716?text=Halo%20Admin,%20saya%20tertarik%20menyewa%20alat%20gaming!" target="_blank" class="btn btn-success mt-3 btn-interactive">Chat via WhatsApp</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
                    <p><strong>Tipe:</strong> {{ $item->kategori->judul }}</p>
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