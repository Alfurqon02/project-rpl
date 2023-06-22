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
                    <a href="/dashboard" class="breadcrumb-item"><i class="ph-house"></i></a>
                    <a href="/dashboard" class="breadcrumb-item">Home</a>
                    <span class="breadcrumb-item active"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-primary text-white card-h-100" style="background-color: #f8f9fa; border-color: #343a40;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="card-title-text">Jumlah Pesanan</span>
                        </h5>
                        <h2 class="card-text">
                            <span class="card-text-content">
                                {{ $jumlahPesanan }}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-success text-white card-h-100" style="background-color: #343a40; border-color: #f8f9fa;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="card-title-text">Pemasukan</span>
                        </h5>
                        <h2 class="card-text">
                            <span class="card-text-content">
                                {{ $pemasukan }}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-info text-white card-h-100" style="background-color: #f8f9fa; border-color: #343a40;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="card-title-text">Jumlah Meja Terpesan</span>
                        </h5>
                        <h2 class="card-text">
                            <span class="card-text-content">
                                {{ $jumlahMejaTerpesan }}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-danger text-white card-h-100" style="background-color: #343a40; border-color: #f8f9fa;">
                    <div class="card-body">
                        <h5 class="card-title">
                            <span class="card-title-text">Jumlah Pesanan Belum Bayar</span>
                        </h5>
                        <h2 class="card-text">
                            <span class="card-text-content">
                                {{ $jumlahPesananBelumSelesai }}
                            </span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <div class="m-3">
                    <h1>Selamat Datang, Username</h1>
                </div>
            </div>            

            <h3 class="m-3">Timeline</h3>
            <div class="m-3" id='calendar'></div>
        </div>
    </div>
    <style>
        /* Teks pada card */
        .card .card-title {
            margin: 0;
            padding: 0;
            font-size: 20px;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .card .card-text {
            margin: 0;
            padding: 0;
            font-size: 30px;
            font-weight: bold;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Resposive untuk card */
        @media (max-width: 767px) {
            .card-h-100,
            .card-h-50,
            .card-h-75,
            .card-h-25 {
                height: auto !important;
            }
        }

        /* Resposive untuk teks pada card */
        @media (max-width: 575px) {
            .card .card-title {
                font-size: 16px;
            }

            .card .card-text {
                font-size: 24px;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                //timeFormat: 'H(:mm)',
                events: 
                [
                    @foreach ($pesanan as $event)
                    {
                        title : '{{ $event->nama_pemesan }}',
                        start : '{{ $event->tanggal_booking}}T{{ $event->jam_booking }}',
                    }    
                    @endforeach
                ],
                eventClick: function(info) {
                    window.location.href = info.event.url;
                }
            });
            calendar.render();
        });
    </script>
@endsection
