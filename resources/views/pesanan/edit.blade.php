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
                    <a href="/dashboard" class="breadcrumb-item">Buat Pesanan</a>
                    <span class="breadcrumb-item active"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Ubah Pesanan</h6>
            </div>

            <div class="card-body">
                <form action="{{ route('pesanan.update', $p->id) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Pemesan</label>
                        <input type="text"
                            class="form-control @error('nama_pemesan')
                            is-invalid
                        @enderror"
                            placeholder="Nama Pemesan" name="nama_pemesan"
                            value="{{ old('nama_pemesan', $p->nama_pemesan) }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Hp Pemesan</label>
                        <input type="text"
                            class="form-control @error('nama_pemesan')
                        is-invalid
                    @enderror"
                            placeholder="Nama Pemesan" name="no_hp_pemesan"
                            value="{{ old('no_hp_pemesan', $p->no_hp_pemesan) }}">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Total Pembayaran</label>
                        <input type="number"
                            class="form-control @error('nama_pemesan')
                        is-invalid
                    @enderror"
                            placeholder="Total Pembayaran" name="total_pembayaran"
                            value="{{ old('total_pembayaran', $p->total_pembayaran) }}">
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Jam Booking</label>
                        <input type="time"
                            class="form-control @error('nama_pemesan')
                        is-invalid
                    @enderror"
                            name="jam_booking" value="{{ old('jam_booking', $p->jam_booking) }}">
                    </div>

                    {{-- <div class="mb-3">
                        <label class="col-form-label">Menu</label>
                        <div class="col">
                            <select class="form-control multiselect" multiple="multiple" name="menu_pesanan[]">
                                @foreach ($kategori as $k)
                                    <optgroup label="{{ $k->nama }}">
                                        @foreach ($k->menu as $m)
                                                <option value="{{ $m->id }}">{{ $m->nama }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div> --}}

                    <div class="mb-3">
                        <label class="col-form-label">Meja</label>
                        <div class="col">
                            <select class="form-control multiselect" multiple="multiple" name="meja_pesanan[]">
                                @foreach ($area as $a)
                                    <optgroup label="{{ $a->nama }}">
                                        @foreach ($a->meja as $m)
                                                <option value="{{ $m->id }}">{{ $m->kode }}</option>
                                        @endforeach
                                    </optgroup>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    {{-- <div class="mb-3"><button type="button" class="btn btn-light" data-bs-toggle="modal"
                            data-bs-target="#exampleModalToggle">Pilih Meja</button>
                    </div> --}}

                    <div class="mb-3">
                        <label class="form-label">Status Pembayaran</label>
                        <div class="wmin-lg-200 mb-3 mb-lg-0">
                            <select class="form-select" name="status_pembayaran">
                                @if (old('status_pembayaran', $p->status_pembayaran) == 0)
                                    <option value="0" selected>Belum Bayar</option>
                                    <option value="1">Sudah Bayar</option>
                                @elseif (old('status_pembayaran', $p->status_pembayaran) == 1)
                                    <option value="0">Belum Bayar</option>
                                    <option value="1" selected>Sudah Bayar</option>
                                @else
                                    <option value="0">Belum Bayar</option>
                                    <option value="1">Sudah Bayar</option>
                                @endif
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Pesanan</label>
                        <div class="wmin-lg-200 mb-3 mb-lg-0">
                            <select class="form-select" name="status_pesanan">
                                @foreach ($status_pesanan as $sp)
                                    @if (old('status_pesanan', $p->status_pesanan) == $sp->id)
                                        <option value="{{ $sp->id }}" selected>{{ $sp->nama }}</option>
                                    @else
                                        <option value="{{ $sp->id }}">{{ $sp->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
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
