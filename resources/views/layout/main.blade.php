<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- Favicon -->

    <link href="{{ url('assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
    <!-- Fonts -->
    <link href="{{ url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700') }}" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ url('assets/js/plugins/nucleo/css/nucleo.css') }}" rel="stylesheet" />
    <link href="{{ url('assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="{{ url('assets/css/argon-dashboard.css?v=1.1.2') }}" rel="stylesheet" />
</head>

<body class="">
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="{{ url('index.html') }}">
                <img src="{{ url('assets/img/brand/logo.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ url('assets/img/theme/team-1-800x800.jpg') }}">
                            </span>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="{{ url('index') }}">
                                <img src="./assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended"
                            placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- divider --}}
                <hr class="my-3">
                <h1 class="navbar-heading text-muted">Navigation</h1>
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item  active ">
                        <a class="nav-link  active " href="{{ url('dashboard') }}">
                            <i class="ni ni-tv-2 text-primary"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('stok') }}">
                            <i class="ni ni-bullet-list-67 text-red"></i> Stok Barang
                        </a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('customer') }}">
                            <i class="ni ni-single-02 text-red"></i> Customer
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('montir') }}">
                            <i class="ni ni-single-02 text-yellow"></i> Data Montir
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('pembayaran') }}">
                            <i class="ni ni-collection text-yellow"></i> Pembayaran
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('riwayat') }}">
                            <i class="ni ni-collection text-yellow"></i> Riwayat Servis
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="main-content">
        <!-- Navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                    href="{{ url('index') }}">Welcome back, {{ auth()->user()->name }}</a>

                <!-- Form -->
                <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                </form>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="{{ url('assets/img/theme/avatar.jpg') }}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="{{ url('examples/profile') }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>My profile</span>
                            </a>
                            <a href="{{ url('examples/profile') }}" class="dropdown-item">
                                <i class="ni ni-settings-gear-65"></i>
                                <span>Settings</span>
                            </a>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-responsive-nav-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                    class="dropdown-item">
                                    <i class="ni ni-button-power text-primary"></i> {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </form>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End Navbar -->
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
            @yield('content')
            <div class="container-fluid">
            </div>
        </div>
    </div>

    <!--   Core   -->
    <script src="./assets/js/plugins/jquery/dist/jquery.min.js"></script>
    <script src="./assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--   Optional JS   -->
    <script src="./assets/js/plugins/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
    <!--   Argon JS   -->
    <script src="./assets/js/argon-dashboard.min.js?v=1.1.2"></script>
    <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
    <script>
        window.TrackJS &&
            TrackJS.install({
                token: "ee6fab19c5a04ac1a32a645abde4613a",
                application: "argon-dashboard-free"
            });
    </script>
</body>

</html>
