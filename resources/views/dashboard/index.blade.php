@extends('dashboard.layouts.main')

@section('container')
    <div class="page-header page-header-light shadow">
        <div class="page-header-content d-lg-flex">
            <div class="d-flex">
                <h4 class="page-title mb-0">
                    Home - <span class="fw-normal">Dashboard</span>
                </h4>
            </div>
        </div>
        <div class="page-header-content d-lg-flex border-top">
            <div class="d-flex">
                <div class="breadcrumb py-2">
                    <a href="/" class="breadcrumb-item"><i class="ph-house"></i></a>
                    {{-- <a href="/" class="breadcrumb-item">Home</a> --}}
                    <span class="breadcrumb-item active"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <div class="m-3">
                    <h1>Selamat Datang, Username</h1>
                </div>
            </div>
            <div class="card-body"></div>
        </div>
    </div>
@endsection
