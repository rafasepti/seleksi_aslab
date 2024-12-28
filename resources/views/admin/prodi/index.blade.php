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
                <h5>Tabel Data Prodi</h5>
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
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Prodi
                                </th>
                                <th class="text-secondary opacity-7">
                                    {{-- <a href="{{ route('prodi.create') }}" class="btn btn-primary btn-sm btn-md">Tambah</a> --}}
                                    <button class="btn btn-primary btn-sm btn-md" data-bs-toggle="modal"
                                        data-bs-target="#prodiModal">Tambah</button>
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

    @include('admin.prodi.create')
    @include('admin.prodi.update')
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ url('prodi/datatable') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'nama_prodi',
                        name: 'nama_prodi'
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const updateModal = document.getElementById('updateModal');
            updateModal.addEventListener('show.bs.modal', function(event) {
                const button = event.relatedTarget; // Tombol yang diklik untuk membuka modal
                const namaProdi = button.getAttribute('data-nama_prodi'); // Ambil data-nama_prodi
                const formAction = button.getAttribute('data-url'); // Ambil data-url

                // Masukkan nilai ke dalam input dan form action
                const inputNamaProdi = updateModal.querySelector('#namaProdi');
                inputNamaProdi.value = namaProdi;

                const form = updateModal.querySelector('form');
                form.action = formAction;
            });
        });
    </script>
@endsection
