{{-- @extends('layouts.app')
@section('header')
    <div class="col-md-8">
        <div class="page-header-title">
            <h5 class="m-b-10">Prodi</h5>
        </div>
    </div>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="index.html"> <i class="fa fa-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">Prodi</a>
    </li>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Prodi</h5>
                <div class="card-header-right">
                    <ul class="list-unstyled card-option">
                        <li><i class="fa fa-chevron-left"></i></li>
                        <li><i class="fa fa-window-maximize full-card"></i></li>
                        <li><i class="fa fa-minus minimize-card"></i></li>
                        <li><i class="fa fa-refresh reload-card"></i></li>
                        <li><i class="fa fa-times close-card"></i></li>
                    </ul>
                </div>
            </div>
            <div class="card-block">
                <form>
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Prodi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Placeholder</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Type your title in Placeholder">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" placeholder="Password input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Read only</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="You can't change me" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Disable Input</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Disabled text" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Predefine
                            Input</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" value="Enter yout content after me">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection --}}
 <!-- Modal -->
 <div class="modal fade" id="prodiModal" tabindex="-1" aria-labelledby="prodiModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="prodiModalLabel">Tambah Prodi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('prodi.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="namaProdi" class="form-label">Nama Prodi</label>
                        <input type="text" class="form-control @error('nama_prodi') is-invalid @enderror" id="namaProdi" name="nama_prodi" required>
                        @error('nama_prodi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>