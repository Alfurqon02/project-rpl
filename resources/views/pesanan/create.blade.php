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
                <h6 class="mb-0">Tambah Pesanan</h6>
            </div>

            <div class="card-body">
                <form action="{{ route('pesanan.store') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" placeholder="Nama Pemesan" name="nama_pemesan">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">No Hp Pemesan</label>
                        <input type="text" class="form-control" placeholder="Nama Pemesan" name="no_hp_pemesan">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Total Pembayaran</label>
                        <input type="number" class="form-control" placeholder="Total Pembayaran" name="total_pembayaran">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Tanggal Booking</label>
                        <input type="date" class="form-control" name="tanggal_booking">
                    </div>

                    <div class="mb-2">
                        <label class="form-label">Jam Booking</label>
                        <input type="time" class="form-control" name="jam_booking">
                    </div>

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
                                <option value="0">Belum Bayar</option>
                                <option value="1">Sudah Bayar</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Status Pesanan</label>
                        <div class="wmin-lg-200 mb-3 mb-lg-0">
                            <select class="form-select" name="status_pesanan">
                                @foreach ($status_pesanan as $sp)
                                <option value="{{ $sp->id }}">{{ $sp->nama }}</option>
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

{{-- <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <div></div>
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Pilih Meja (Lantai 1)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <ul class="showcase">
                        <li>
                            <div class="seat"></div>
                            <small>Available</small>
                        </li>
                        <li>
                            <div class="seat selected"></div>
                            <small>Selected</small>
                        </li>
                        <li>
                            <div class="seat occupied"></div>
                            <small>Occupied</small>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="movie-container">
                    </div>
                    <div class="container" id="movie">
                        <div class="row-container">
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Lantai 2</button>
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                    data-bs-toggle="modal">Save</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2"
    tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Pilih Meja (Lantai 2)</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <ul class="showcase">
                        <li>
                            <div class="seat"></div>
                            <small>Available</small>
                        </li>
                        <li>
                            <div class="seat selected"></div>
                            <small>Selected</small>
                        </li>
                        <li>
                            <div class="seat occupied"></div>
                            <small>Occupied</small>
                        </li>
                    </ul>
                </div>
                <div>
                    <div class="movie-container">
                    </div>
                    <div class="container" id="movie">
                        <div class="row-container">
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                            </div>
                            <div class="row">
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat occupied"></div>
                                <div class="seat"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Lantai 1</button>
                <button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                    data-bs-toggle="modal">Save</button>
            </div>
        </div>
    </div>
</div> --}}

{{-- <script>
    const seats = document.querySelectorAll(".row .seat:not(.occupied)");
    const seatContainer = document.querySelector(".row-container");
    const count = document.getElementById("count");
    const total = document.getElementById("total");
    const movieSelect = document.getElementById("movie");

    // Another Approach

    // seats.forEach(function(seat) {
    //   seat.addEventListener("click", function(e) {
    //     seat.classList.add("selected");
    //     const selectedSeats = document.querySelectorAll(".container .selected");
    //     selectedSeathLength = selectedSeats.length;
    //     count.textContent = selectedSeathLength;
    //     let ticketPrice = +movieSelect.value;
    //     total.textContent = ticketPrice * selectedSeathLength;
    //   });
    // });

    // localStorage.clear();

    populateUI();

    let ticketPrice = +movieSelect.value;

    // Save selected movie index and price
    function setMovieData(movieIndex, moviePrice) {
        localStorage.setItem("selectedMovieIndex", movieIndex);
        localStorage.setItem("selectedMoviePrice", moviePrice);
    }

    function updateSelectedCount() {
        const selectedSeats = document.querySelectorAll(".container .selected");

        seatsIndex = [...selectedSeats].map(function(seat) {
            return [...seats].indexOf(seat);
        });

        localStorage.setItem("selectedSeats", JSON.stringify(seatsIndex));

        let selectedSeatsCount = selectedSeats.length;
        count.textContent = selectedSeatsCount;
        total.textContent = selectedSeatsCount * ticketPrice;
    }

    // Get data from localstorage and populate
    function populateUI() {
        const selectedSeats = JSON.parse(localStorage.getItem("selectedSeats"));

        if (selectedSeats !== null && selectedSeats.length > 0) {
            seats.forEach(function(seat, index) {
                if (selectedSeats.indexOf(index) > -1) {
                    seat.classList.add("selected");
                }
            });
        }

        const selectedMovieIndex = localStorage.getItem("selectedMovieIndex");

        if (selectedMovieIndex !== null) {
            movieSelect.selectedIndex = selectedMovieIndex;
        }
    }

    // Movie select event

    movieSelect.addEventListener("change", function(e) {
        ticketPrice = +movieSelect.value;
        setMovieData(e.target.selectedIndex, e.target.value);
        updateSelectedCount();
    });

    // Adding selected class to only non-occupied seats on 'click'

    seatContainer.addEventListener("click", function(e) {
        if (
            e.target.classList.contains("seat") &&
            !e.target.classList.contains("occupied")
        ) {
            e.target.classList.toggle("selected");
            updateSelectedCount();
        }
    });

    // Initial count and total rendering
    updateSelectedCount();
</script> --}}
