@extends('layouts.app')
@section('header')
    <div class="col-md-8">
        <div class="page-header-title">
            <h5 class="m-b-10">Dosen</h5>
        </div>
    </div>
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="index.html"> <i class="fa fa-home"></i> </a>
    </li>
    <li class="breadcrumb-item"><a href="#!">Dosen</a>
    </li>
@endsection
@section('content')
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <h5>Tambah Data Dosen</h5>
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
                <form method="POST" action="{{ route('dosen.index') }}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">NIDN</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nidn" name="nidn">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <select name="prodi" class="form-control">
                                <option value="">Pilih Prodi</option>
                                @foreach ($prodi as $p)
                                    <option value="{{ $p->id }}">{{ $p->nama_prodi }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Jabatan</label>
                        <div class="col-sm-10">
                            <select name="hak_akses" class="form-control">
                                <option value="">Pilih Jabatan</option>
                                <option>Dosen</option>
                                <option>Kaprodi</option>
                                <option>Kaprodi</option>
                            </select>
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
@endsection