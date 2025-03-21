<x-app>
    <div class="card-header">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">Kategori Produk</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <a href="" data-toggle="modal" data-target="#tambah-kategori" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a>
                <!-- <a href="{{ url('pegawai/dinas/create') }}" class="btn btn-dark float-right"><i class="fas fa-plus"></i> Tambah Data</a> -->
                <table id="data-table" class="table table-bordered">
                    <thead class="bg-dark">
                        <th style="width: 1%;color: white;">No</th>
                        <th class="text-center" style="color: white;" width="230px">Nama Kategori</th>
                        <th class="text-center" style="color: white;" width="230px">Slug</th>
                        <th class="text-center" style="color: white;" width="230px">Status</th>
                        <th class="text-center" style="color: white;" width="120px">Aksi</th>
                    </thead>
                    <tbody>
                        @foreach ($list_kategori->sortByDesc('created_at')->values() as $kategori)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $kategori->judul }}</td>
                            <td class="text-center">{{ $kategori->slug }}</td>
                            @if ($kategori->status == 2)
                            <td class="text-center">
                                <label class="btn btn-warning">Draft</label>
                            </td>
                            @else
                            <td class="text-center">
                                <label class="btn btn-success">Publish</label>
                            </td>
                            @endif
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="#edit{{ $kategori->id }}" data-toggle="modal" class="btn btn-warning btn-interactive">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#hapus{{ $kategori->id }}" data-toggle="modal" class="btn btn-danger btn-interactive">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <!-- <x-template.button.edit-button url="admin/kategori-produk" id="{{ $kategori->id }}" /> -->
                                    <!-- <x-template.button.delete-button url="admin/kategori-produk" id="{{ $kategori->id }}" /> -->
                                </div>
                            </td>
                        </tr>

                        <x-template.modal.modal-delete id="hapus{{ $kategori->id }}"
                            action="{{ url('admin/kategori-produk', $kategori->id) }}" />

                        <x-template.modal.modaledit id="edit{{ $kategori->id }}"
                            action="{{ url('admin/kategori-produk', $kategori->id) }}">

                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Kategori Produk</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="" class="control-label">Nama Kategori</label>
                                        <input type="text" id="name" name="judul" class="form-control" value="{{ $kategori->judul }}">
                                        @error('judul')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">Status</label>
                                        <select class="form-control default-select" name="status" id="status">
                                            @if ($kategori->status == 2)
                                            <option value="2">Draft</option>
                                            <option value="1">Publish</option>
                                            @else
                                            <option value="1">Publish</option>
                                            <option value="2">Draft</option>
                                            @endif
                                        </select>
                                        @error('status')
                                        <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                        @enderror
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger btn-interactive" data-dismiss="modal">Tutup</button>
                                    <button class="btn btn-success btn-interactive">Simpan</button>
                                </div>
                            </div>
                        </x-template.modal.modaledit>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Kategori -->
    <div class="modal fade" id="tambah-kategori">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori Produk</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('admin/kategori-produk') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">NAMA KATEGORI</label>
                                    <input type="text" id="judul" name="judul" class="form-control" required>
                                    @error('judul')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label">STATUS</label>
                                    <select class="form-control default-select" name="status" id="status" required>
                                        <option value="">...</option>
                                        <option value="1">Publish</option>
                                        <option value="2">Draft</option>
                                    </select>
                                    @error('status')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p style="font-size: 12px">
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger btn-interactive" data-dismiss="modal">Tutup</button>
                                <button class="btn btn-success btn-interactive">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- End Modal Tambah Kategori -->
</x-app>