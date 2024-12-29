@extends('layouts.app')
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
        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h5>Tabel Data Dosen</h5>
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
                <div class="table-responsive">
                    <table class="table align-items-center mb-0 yajra-datatable">
                        <thead>
                            <tr>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    No.
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NIDN</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jabatan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prodi</th>
                                <th class="text-secondary opacity-7">
                                    <a href="{{ route('dosen.create') }}" class="btn btn-primary btn-sm btn-md">Tambah</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('dosen/datatable') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nidn',
                        name: 'nidn'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'hak_akses',
                        name: 'hak_akses'
                    },
                    {
                        data: 'prodi',
                        name: 'prodi'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: true,
                        searchable: true,
                        className: 'align-middle text-center'
                    },
                ]
            });

        });
    </script>
@endsection
