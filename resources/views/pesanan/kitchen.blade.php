@extends('dashboard.layouts.main')
@section('title')
DNA Coffe | Kitchen Display
@endsection

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
                    <a href="" class="breadcrumb-item">Tampilan Kitchen</a>
                    <span class="breadcrumb-item active"></span>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="card">
            <div class="card-body">
                <h5 class="mb-0" style="font-size: 200%">Pesanan</h5>
                <hr>
                <table class="table datatable-basic" style="bPaginate: false;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pemesan</th>
                            <th>Jam Booking</th>
                            <th>Menu</th>
                            <th>Tanggal Pesanan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $p)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $p->nama_pemesan }}</td>
                                <td>{{ $p->jam_booking }}</td>
                                <td>
                                    <table class="table">
                                        @foreach ($p->menu()->get() as $menu)
                                            <tr>
                                                <td> {{ $menu->nama }} (x{{ $menu->pivot->jumlah_menu }})</td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </td>

                                <td>{{ strftime('%A, %e %B %Y', strtotime($p->tanggal_booking)) }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
