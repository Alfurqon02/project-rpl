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
                    <a href="/dashboard" class="breadcrumb-item">Tambah Menu</a>
                    <span class="breadcrumb-item active"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Tambah Pesanan</h6>
            </div>

            <div class="card-body">
                <form action="{{ route('menu.store', $p) }}" method="POST">
                    @method('POST')
                    @csrf

                    <div class="mb-3">
                        @foreach ($kategori as $k)
                            <h5>{{ $k->nama }}</h5>
                            @foreach ($k->menu as $m)
                                <div class="form-check mb-2 d-flex justify-content-between">
                                    <div>
                                        <input type="hidden" name="menu_pesanan[]" value="{{ $m->id }}"/>
                                        {{-- <input type="checkbox" class="form-check-input" name="menu_pesanan[]"
                                            value="{{ $m->id }}"> --}}
                                        <label class="form-check-label" for="menu_pesanan">{{ $m->nama }}</label>
                                    </div>
                                    <div class="input-group" style="width:10%">
                                        <button type="button" class="btn btn-light btn-icon"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                            <i class="ph-minus ph-sm"></i>
                                        </button>
                                        <input class="form-control form-control-number text-center" min="0"
                                            type="number" name="jumlah_menu[]" value="0">
                                        <button type="button" class="btn btn-light btn-icon"
                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                            <i class="ph-plus ph-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        @endforeach
                    </div>

                    <div class="d-flex justify-content-end align-items-center">
                        <button type="reset" class="btn btn-light">Cancel</button>
                        <button type="submit" class="btn btn-primary ms-3">Submit <i
                                class="ph-paper-plane-tilt ms-2"></i></button>
                    </div>
            </div>
            </form>
        </div>
    </div>
@endsection
