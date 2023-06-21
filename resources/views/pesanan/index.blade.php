@extends('dashboard.layouts.main')

@section('container')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Home - <span class="fw-normal">Pesanan</span>
                </h4>
            </div>
        </div>
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="/dashboard" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="/dashboard" class="breadcrumb-item">Home</a>
                    <a href="{{ route('pesanan.index') }}" class="breadcrumb-item">Pesanan</a>
                    <span class="breadcrumb-item active"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card">
            {{-- <div class="card-header">
                <div class="m-3">
                    <h1>Selamat Datang, Username</h1>
                </div>
            </div> --}}
            <div class="card-body">
                <h5 class="mb-0" style="font-size: 200%">Riwayat Pesanan</h5>
                <hr>
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <a href="{{ route('pesanan.create') }}" class="btn btn-primary "><i class="ph ph-list-plus me-2"></i>Tambah
                    Pesanan</a>
                <table class="table datatable-basic" style="bPaginate: false;">
                    <thead>
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>No. Handphone</th>
                            <th>Total Pembayaran</th>
                            <th>Jam Booking</th>
                            <th>Tanggal Pesanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $p)
                            <tr>
                                <td>{{ $p->nama_pemesan }}</td>
                                <td>{{ $p->no_hp_pemesan }}</td>
                                <td>{{ $p->total_pembayaran }}</td>
                                <td>{{ $p->jam_booking }}</td>
                                <td>{{ $p->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <button type="button" class="btn btn-outline-success btn-icon"
                                        data-id="{{ $p->id }}" onclick="" data-bs-toggle="modal"
                                        data-bs-target="#showDetail"><i class="ph-eye"></i></button>
                                    <a href="{{ route('pesanan.edit', $p->id) }}" class="btn btn-outline-warning btn-icon"><i class="ph-pencil"></i></a>
                                    <button type="button" class="btn btn-outline-danger btn-icon"
                                        data-id="{{ $p->id }}" onclick="" data-bs-toggle="modal"
                                        data-bs-target="#confirmDelete"><i class="ph-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

    {{-- Modal Delete --}}
    <div id="confirmDelete" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <form action="" method="POST" id="form-delete">
                    @method('DELETE')
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p>Apakah Anda Yakin Ingin Menghapus Pesanan Ini?</p>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- End Modal Delete --}}

    {{-- Modal Detail --}}
    <div id="showDetail" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <tr>
                            <th>Nama Pemesan</th>
                            <td id="nama_pemesan"></td>
                        </tr>
                        <tr>
                            <th>No. Handphone</th>
                            <td id="no_hp_pemesan"></td>
                        </tr>
                        <tr>
                            <th>Area</th>
                            <td id="nama_area"></td>
                        </tr>
                        <div id="menu-loop">
                            <tr>
                                <th>Menu</th>
                                <td id="menu"></td>
                            </tr>
                        </div>
                        <tr>
                            <th>Meja</th>
                            <td id="kode_meja"></td>
                        </tr>
                        <tr>
                            <th>Total Pembayaran</th>
                            <td id="total_pembayaran"></td>
                        </tr>
                        <tr>
                            <th>Status Pesanan</th>
                            <td id="status_pesanan"></td>
                        </tr>
                        <tr>
                            <th>Jam Booking</th>
                            <td id="jam_booking"></td>
                        </tr>
                        <tr>
                            <th>Tanggal Pesanan</th>
                            <td id="tanggal_pesanan"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Delete
        $('#confirmDelete').on('show.bs.modal', function(e) {
            var id_pesanan = $(e.relatedTarget).data('id');
            console.log(id_pesanan);
            $(e.currentTarget).find('#form-delete').attr('action', 'pesanan/' + id_pesanan);
        })
        // End Delete

        // Detail
        $('#showDetail').on('show.bs.modal', function(e) {
            var id_pesanan = $(e.relatedTarget).data('id');
            const url = '{{ url("api/pesanan") }}' + '/' + id_pesanan;

            $.get(url, function(response) {
                response = JSON.parse(response)
                for (let i=0;i<response.length;i++){
                    var nama_pemesan = response[i].nama_pemesan;
                    var no_hp_pemesan = response[i].no_hp_pemesan;
                    var menu = response[i].menu;
                    var nama_area = response[i].nama_area;
                    var kode_meja = response[i].kode_meja;
                    var total_pembayaran = response[i].total_pembayaran;
                    var status_pesanan = response[i].status_pesanan;
                    var jam_booking = response[i].jam_booking;
                    var tanggal_pesanan = new Date(response[i].tanggal_pesanan).toLocaleDateString('en-US');
                    console.log(response[i])
                    // $(e.currentTarget).find('td#nama').text(nama).attr('class', 'w-75');
                    $(e.currentTarget).find('td#nama_pemesan').text(nama_pemesan);
                    $(e.currentTarget).find('td#no_hp_pemesan').text(no_hp_pemesan);
                    if ($(e.currentTarget).find('td#nama_area').text() == ""){
                        $(e.currentTarget).find('td#nama_area').text(nama_area);
                    } else {
                        var lastArea = $(e.currentTarget).find('td#nama_area').text().split(', ')
                        lastArea = lastArea[lastArea.length - 1]
                        if (lastArea != nama_area){
                            $(e.currentTarget).find('td#nama_area').text(lastArea + ', ' + nama_area)
                        }
                    }
                    if ($(e.currentTarget).find('td#menu').text() == ""){
                        $(e.currentTarget).find('td#menu').text(menu);
                    } else {
                        var lastMenu = $(e.currentTarget).find('td#menu').text().split(', ')
                        lastMenu = lastMenu[lastMenu.length - 1]
                        if (lastMenu != menu){
                            $(e.currentTarget).find('td#menu').text(lastMenu + ', ' + menu)
                        }
                    }
                    if ($(e.currentTarget).find('td#kode_meja').text() == ""){
                        $(e.currentTarget).find('td#kode_meja').text(kode_meja);
                    } else {
                        var lastMeja = $(e.currentTarget).find('td#kode_meja').text().split(', ')
                        lastMeja = lastMeja[lastMeja.length - 1]
                        if (lastMeja != kode_meja){
                            $(e.currentTarget).find('td#kode_meja').text(lastMeja + ', ' + kode_meja)
                        }
                    }
                    $(e.currentTarget).find('td#total_pembayaran').text(total_pembayaran);
                    $(e.currentTarget).find('td#status_pesanan').text(status_pesanan);
                    $(e.currentTarget).find('td#jam_booking').text(jam_booking);
                    $(e.currentTarget).find('td#tanggal_pesanan').text(tanggal_pesanan);
            }

            });
        });

        $('#showDetail').on('hide.bs.modal', function (e) {
            $(e.currentTarget).find('td#nama_pemesan').text("");
            $(e.currentTarget).find('td#no_hp_pemesan').text("");
            $(e.currentTarget).find('td#nama_area').text("");
            $(e.currentTarget).find('td#menu').text("");
            $(e.currentTarget).find('td#kode_meja').text("");
            $(e.currentTarget).find('td#total_pembayaran').text("");
            $(e.currentTarget).find('td#status_pesanan').text("");
            $(e.currentTarget).find('td#jam_booking').text("");
            $(e.currentTarget).find('td#tanggal_pesanan').text("");
        });
    </script>
@endsection
