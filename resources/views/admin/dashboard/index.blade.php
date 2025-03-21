<x-app>
    <h5 class="m-0 font-weight-bold text-dark" style="font-size: 25px">
        Halo, {{ auth()->user()->nama }}
    </h5>
    <hr>
    <p class="mt-0 text-dark" style="font-size: 16px">
        Berikut ini adalah ringkasan informasi yang ada di A-Labs - Rental.
    </p>

    <div class="row">
        <div class="col-md-4">
            <div class="card shadow-xl border-left-primary animated-card mb-4" style="margin: auto; border-radius: 10px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-primary font-weight-bold">Total Produk</h6>
                        <h4 class="font-weight-bold">{{ $totalProduk }}</h4>
                    </div>
                    <i class="bi bi-grid-fill text-primary" style="font-size: 40px;"></i>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow-xl border-left-success animated-card" style="margin: auto; border-radius: 10px;">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-success font-weight-bold">Total Kategori</h6>
                        <h4 class="font-weight-bold">{{ $totalKategori }}</h4>
                    </div>
                    <i class="bi bi-calendar-check-fill text-success" style="font-size: 40px;"></i>
                </div>
            </div>
        </div>
    </div>

    <style>
        .animated-card {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .animated-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

</x-app>