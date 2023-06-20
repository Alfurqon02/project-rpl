<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- CSS Files --}}
    <link href="{{ asset('assets/fonts/inter/inter.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/icons/phosphor/styles.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/ltr/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/js/bs-fileinput/css/fileinput.min.css') }}" media="all" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('assets/css/dselect.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/bootstrap-toggle.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/booking-seat.css') }}" rel="stylesheet" type="text/css">
    {{-- JS Files --}}
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/demo/demo_configurator.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/ui/moment/moment.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/pickers/datepicker.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/pickers/daterangepicker.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/picker_date.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/tables/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/demo/pages/form_multiselect.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/forms/selects/bootstrap_multiselect.js') }}"></script>
    {{-- <script type="text/javascript" src="{{ asset('assets/js/vendor/tables/datatables/extensions/scroller.min.js') }}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/datatables_basic.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/datatables_api.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/uploaders/fileinput/fileinput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/uploaders/uploader_bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/vendor/uploaders/fileinput/plugins/sortable.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/js/dselect.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/bootstrap-toggle.min.js') }}"></script>

    <title>DNA Coffe | Dashboard</title>
</head>

<body>
    @include('dashboard.layouts.header')
    <div class="page-content">
        @include('dashboard.layouts.sidebar')
        <div class="content-wrapper">
            <div class="content-inner">
                @yield('container')
                <div class="navbar navbar-sm navbar-footer border-top">
                    <div class="container-fluid">
                        <span>&copy; 2023 <a href="#">KELOMPOK 4 RPL</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
