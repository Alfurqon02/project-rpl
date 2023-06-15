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
                    <a href="/dashboard" class="breadcrumb-item">Pesanan</a>
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
                <button class="btn btn-primary mt-3"><i class="ph ph-list-plus me-2"></i>Buat Pesanan</button>
                <table class="table datatable-basic" style="bPaginate: false;">
                    <thead>
                        <tr>
                            <th>Nama Pemesan</th>
                            <th>Total Pembayaran</th>
                            <th>Status Pesanan</th>
                            <th>Status Pembayaran</th>
                            <th>Meja</th>
                            <th>Area</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pesanan as $p)
                            <tr>
                                <td>{{ $p->nama_pemesan }}</td>
                                <td>{{ $p->total_pembayaran }}</td>
                                <td>{{ $p->status_pesanan }}</td>
                                <td>{{ $p->status_pembayaran }}</td>
                                <td>
                                    @foreach ($p->meja as $meja)
                                        {{ $meja->kode }}
                                    @endforeach
                                </td>
                                <td></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
