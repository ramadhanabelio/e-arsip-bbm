<!DOCTYPE html>
<html lang="en">
<!-- [Head] start -->

<head>
    <title>E-Arsip BBM - Bank Riau Kepri Syariah Pekanbaru</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Aplikasi Penjualan Udang Pepai Berbasis Web Dengan Keamanan Hash Password Menggunakan Algoritma Bcrypt">
    <meta name="keywords" content="Bcrypt, Udang Pepai, Penjualan Online, Desa Prapat Tunggal">
    <meta name="author" content="Aryan Saputra">
    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/x-icon">
    <!-- data tables css -->
    <link rel="stylesheet" href="{{ asset('css/plugins/dataTables.bootstrap5.min.css') }}">
    <!-- [Google Font] Family -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap"
        id="main-font-link">
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('fonts/tabler-icons.min.css') }}">
    <!-- [Feather Icons] https://feathericons.com -->
    <link rel="stylesheet" href="{{ asset('fonts/feather.css') }}">
    <!-- [Font Awesome Icons] https://fontawesome.com/icons -->
    <link rel="stylesheet" href="{{ asset('fonts/fontawesome.css') }}">
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('fonts/material.css') }}">
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="main-style-link">
    <link rel="stylesheet" href="{{ asset('css/style-preset.css') }}">
</head>

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="" class="b-brand text-warning">
                    <img src="{{ asset('images/brand.png') }}" class="img-fluid logo-lg" alt="logo" width="20%">
                </a>
            </div>
            <div class="navbar-content">
                @php
                    $role = Auth::user()->role ?? null;
                @endphp
                <ul class="pc-navbar">

                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Menu</label>
                        <i class="ti ti-list"></i>
                    </li>

                    <li class="pc-item">
                        <a href="{{ route('kendaraan.index') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-truck-delivery"></i></span>
                            <span class="pc-mtext">Kelola Kendaraan</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('divisi.index') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-line"></i></span>
                            <span class="pc-mtext">Kelola Divisi</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('transaksi.index') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-file-text"></i></span>
                            <span class="pc-mtext">Transaksi BBM</span>
                        </a>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('pengadaan.index') }}" class="pc-link">
                            <span class="pc-micon"><i class="ti ti-clipboard-list"></i></span>
                            <span class="pc-mtext">Register Pekerjaan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end --> <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <!-- ======= Menu collapse Icon ===== -->
                    <li class="pc-h-item pc-sidebar-collapse">
                        <a href="#" class="pc-head-link ms-0" id="sidebar-hide">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="pc-h-item pc-sidebar-popup">
                        <a href="#" class="pc-head-link ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown"
                            href="#" role="button" aria-haspopup="false" data-bs-auto-close="outside"
                            aria-expanded="false">
                            <img src="{{ asset('images/user/avatar-2.jpg') }}" alt="user-image" class="user-avtar">
                            <span>{{ Auth::user()->name ?? 'Anonymous' }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <div class="d-flex mb-1">
                                    <div class="flex-shrink-0">
                                        <img src="{{ asset('images/user/avatar-2.jpg') }}" alt="user-image"
                                            class="user-avtar wid-35">
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <h6 class="mb-1">{{ Auth::user()->name ?? 'Anonymous' }}</h6>
                                        <span>{{ Auth::user()->email ?? 'Anonymous' }}</span>
                                    </div>
                                </div>
                            </div>
                            <ul class="nav drp-tabs nav-fill nav-tabs" id="mydrpTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="drp-t1" data-bs-toggle="tab"
                                        data-bs-target="#drp-tab-1" type="button" role="tab"
                                        aria-controls="drp-tab-1" aria-selected="true"><i class="ti ti-user"></i>
                                        Profile</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="mysrpTabContent">
                                <div class="tab-pane fade show active" id="drp-tab-1" role="tabpanel"
                                    aria-labelledby="drp-t1" tabindex="0">
                                    {{-- <a href="#!" class="dropdown-item">
                                        <i class="ti ti-edit-circle"></i>
                                        <span>Edit Profile</span>
                                    </a>
                                    <a href="#!" class="dropdown-item">
                                        <i class="ti ti-user"></i>
                                        <span>View Profile</span>
                                    </a> --}}
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="ti ti-power text-danger"></i>
                                            <span class="text-danger">Keluar</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">

                            <div class="page-header-title">
                                <h3 class="m-b-10">
                                    @php
                                        $routeName = Route::currentRouteName();
                                        $title = $routeName ? explode('.', $routeName)[0] : 'dashboard';
                                    @endphp

                                    {{ ucfirst($title) }}
                                </h3>
                            </div>

                            <br>

                            <ul class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard') }}">Dashboard</a>
                                </li>

                                @if (Route::currentRouteName() !== 'dashboard')
                                    <li class="breadcrumb-item active">
                                        @php
                                            $routeName = Route::currentRouteName();
                                            $segment = explode('.', $routeName)[0];
                                        @endphp

                                        {{ ucfirst($segment) }}
                                    </li>
                                @endif
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->

    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col-sm my-1">
                    <p class="m-0">E-Arsip BBM - Bank Riau Kepri Syariah Pekanbaru</p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="">Copyright © 2026 <a href="#"
                                    class="text-warning fw-bold">Famela Okta Vianda</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#simpletable').DataTable();

            $('#order-table').DataTable({
                order: [
                    [3, 'desc']
                ]
            });

            $('#multi-colum-dt').DataTable({
                columnDefs: [{
                        targets: [0],
                        orderData: [0, 1]
                    },
                    {
                        targets: [1],
                        orderData: [1, 0]
                    },
                    {
                        targets: [4],
                        orderData: [4, 0]
                    }
                ]
            });

            $('#complex-dt').DataTable();
            $('#DOM-dt').DataTable({
                dom: '<"top"i>rt<"bottom"flp><"clear">'
            });
            $('#alt-pg-dt').DataTable({
                pagingType: 'full_numbers'
            });

            $('#scr-vrt-dt').DataTable({
                scrollY: '200px',
                scrollCollapse: true,
                paging: false
            });

            $('#scr-vtr-dynamic').DataTable({
                scrollY: '50vh',
                scrollCollapse: true,
                paging: false
            });

            $('#lang-dt').DataTable({
                language: {
                    decimal: ',',
                    thousands: '.'
                }
            });
        });
    </script>
    <!-- [Page Specific JS] start -->
    <script src="{{ asset('js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
    <!-- Required Js -->
    <script src="{{ asset('js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fonts/custom-font.js') }}"></script>
    <script src="{{ asset('js/pcoded.js') }}"></script>
    <script src="{{ asset('js/plugins/feather.min.js') }}"></script>
    <script>
        layout_change('light');
    </script>
    <script>
        change_box_container('false');
    </script>
    <script>
        layout_rtl_change('false');
    </script>
    <script>
        preset_change("preset-1");
    </script>
    <script>
        font_change("Public-Sans");
    </script>
</body>
<!-- [Body] end -->

</html>
