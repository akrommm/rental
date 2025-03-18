<x-app>
    <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">Manajemen Produk</h5>
    <hr>
    <div class="card shadow-lg" style="margin: auto; border-radius: 10px;">
        <div class="card-body">
            <div class="table-responsive">
                <a href="" data-toggle="modal" data-target="#tambah-produk" class="btn btn-dark float-right ml-2"><i class="fas fa-plus"></i> Tambah Data</a>
                <table id="data-table" class="table table-bordered">
                    <thead class="bg-dark">
                        <tr>
                            <th class="text-center" style="width: 1%; color: white;">No</th>
                            <th class="text-center" style="color: white;" width="230px">Nama</th>
                            <th class="text-center" style="color: white;" width="230px">Tipe</th>
                            <th class="text-center" style="color: white;" width="230px">Status</th>
                            <th class="text-center" style="color: white;" width="120px">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produk as $p)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $p->nama }}</td>
                            <td class="text-center">{{ $p->tipe }}</td>
                            <td class="text-center">
                                @if ($p->status == 'Maintenance')
                                <label class="btn btn-warning">{{$p->status}}</label>
                                @endif

                                @if ($p->status == 'Tersedia')
                                <label class="btn btn-success">{{$p->status}}</label>
                                @endif

                                @if ($p->status == 'Disewa')
                                <label class="btn btn-danger">{{$p->status}}</label>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <x-template.button.info-button url="admin/manajemen-produk" id="{{ $p->id }}" />
                                    <a href="#edit{{ $p->id }}" data-toggle="modal" class="btn btn-warning btn-interactive">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="#hapus{{ $p->id }}" data-toggle="modal" class="btn btn-danger btn-interactive">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>

                        <x-template.modal.modal-delete id="hapus{{ $p->id }}"
                            action="{{ url('admin/manajemen-produk', $p->id) }}" />

                        <x-template.modal.modaledit id="edit{{ $p->id }}"
                            action="{{ url('admin/manajemen-produk', $p->id) }}">

                            <div class="modal-content modal-lg">
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit Data Produk</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="control-label">Nama Produk</label>
                                                <input type="text" id="nama" name="nama" class="form-control" value="{{ $p->nama }}">
                                                @error('nama')
                                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="control-label">Tipe</label>
                                                <select class="form-control" name="tipe" id="tipe">
                                                    <option value="{{ $p->tipe }}">{{ $p->tipe }}</option>
                                                    <option value="PlayStation">PlayStation</option>
                                                    <option value="Xbox">Xbox</option>
                                                    <option value="Nintendo Switch">Nintendo Switch</option>
                                                    <option value="Retro Console">Retro Console</option>
                                                </select>
                                                @error('tipe')
                                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="control-label">Harga Perjam</label>
                                                <input type="number" id="harga_perjam" name="harga_perjam" class="form-control" value="{{ $p->harga_perjam }}">
                                                @error('harga_perjam')
                                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="control-label">Harga Perhari</label>
                                                <input type="number" id="harga_perhari" name="harga_perhari" class="form-control" value="{{ $p->harga_perhari }}">
                                                @error('harga_perhari')
                                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="control-label">Status</label>
                                                <select class="form-control" name="status" id="status">
                                                    <option value="{{ $p->status }}">{{ $p->status }}</option>
                                                    <option value="Tersedia">Tersedia</option>
                                                    <option value="Disewa">Disewa</option>
                                                    <option value="Maintenance">Maintenance</option>
                                                </select>
                                                @error('status')
                                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="nama" class="control-label">Gambar</label>
                                                <input type="file" id="gambar" name="gambar" class="form-control" placeholder="Rp. 200.000" value="{{ $p->gambar }}">
                                                @error('gambar')
                                                <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-danger btn-interactive"
                                        data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-primary btn-interactive">Simpan</button>
                                </div>
                            </div>
                        </x-template.modal.modaledit>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Produk -->
    <div class="modal fade" id="tambah-produk">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Produk</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Nama Produk</label>
                                    <input type="text" id="nama" name="nama" class="form-control" placeholder="John Doe" required>
                                    @error('nama')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Tipe</label>
                                    <select class="form-control" name="tipe" id="tipe" required>
                                        <option value="">Pilih Tipe</option>
                                        <option value="PlayStation">PlayStation</option>
                                        <option value="Xbox">Xbox</option>
                                        <option value="Nintendo Switch">Nintendo Switch</option>
                                        <option value="Retro Console">Retro Console</option>
                                    </select>
                                    @error('tipe')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Harga Perjam</label>
                                    <input type="number" id="harga_perjam" name="harga_perjam" class="form-control" placeholder="Rp. 200.000" required>
                                    @error('harga_perjam')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Harga Perhari</label>
                                    <input type="number" id="harga_perhari" name="harga_perhari" class="form-control" placeholder="Rp. 200.000" required>
                                    @error('harga_perhari')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Status</label>
                                    <select class="form-control" name="status" id="status" required>
                                        <option value="">Pilih Status</option>
                                        <option value="Tersedia">Tersedia</option>
                                        <option value="Disewa">Disewa</option>
                                        <option value="Maintenance">Maintenance</option>
                                    </select>
                                    @error('status')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nama" class="control-label">Gambar</label>
                                    <input type="file" id="gambar" name="gambar" class="form-control" placeholder="Rp. 200.000" required>
                                    @error('gambar')
                                    <p class="text-danger" style="font-size: 12px">* {{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger btn-interactive"
                                    data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary btn-interactive">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app>