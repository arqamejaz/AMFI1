{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMFI | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
    <link rel="stylesheet" href="">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}" />
    <!-- Css style -->
    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
          <img class="animation__wobble" src="frontend/img/core-img/loader.gif" alt="AMFI logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark" style="background-color: #213CA7; border-bottom: 1px solid white;">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="mt-3 float-right">

                <p><strong>My Wallet Address:</strong> {{$walletAddress}}</p>
            </div>

        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #213CA7; border-right: 1px solid white;">
            <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="mt-2" style="display: flex; justify-content: center;">
            <img src="{{ url('frontend/img/core-img/dashboardlogo.webp') }}" alt="AMFI Logo" style="height:100px;">
            </a>

            <!-- Sidebar -->
            <div class="sidebar mt-0">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Main Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Seed Investment
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Presale
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Airdrop
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Stacking
                                    <span class="right badge badge-danger">Coming Soon</span>
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/') }}" class="nav-link">
                                <i class="nav-icon fas fa-copy"></i>
                                <p>
                                    Disconnect
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background: url(../frontend/img/bg-img/bg-main2.webp) no-repeat;">
            <!-- Content Header (Page header) -->
             <div class="content-header" style="background: url(../frontend/img/bg-img/bg-main2.webp) no-repeat;">
                <img src="{{ url('frontend/img/dashboard-banner.jpg') }}" style="width:100%; border-radius: 20px">
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content bg-img" style="background: url(../frontend/img/bg-img/bg-main2.webp) no-repeat;">
                <div class="col-sm-6">
                    <h1 class="pt-3">Dashboard</h1>
                </div>
                <div class="container-fluid pt-3">
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-theme2">
                                <div class="inner">

                                    <h6>Total Seed Purchased</h6>
                                    <h3>{{ $transactions->count() }}</h3>

                                    <h6>Seed Investment</h6>
                                    @php
                                        $inv =  $transactions->count() * 250
                                    @endphp
                                    <h3>${{ $inv }}</h3>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-theme2">
                                <div class="inner">
                                    <h6>AMFI Price</h6>
                                    <h3>$0.025</h3>

                                    <h6>Allocation</h6>
                                    <h3>{{ $transactions->count() * 10000 }} AMFI
                                    <button class="btn claim-btn ml-5">
                                        Claim!
                                        <span class="hover-text">After Presale Ends!</span>
                                    </buttons></h3>

                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-4 col-6">
                            <!-- small box -->
                            <div class="small-box bg-theme2">
                                <div class="inner">
                                    <h6>Projected Profit</h6>
                                    <h3>${{ $transactions->count() * 10000 * 0.06 }}</h3>

                                    <h6>Listing Price</h6>
                                    <h3>$0.06</h3>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-12 col-12">
                            <!-- small box -->
                            <div class="small-box bg-theme2">
                                <div class="inner">
                                    <h6>Transaction History</h6>
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            <th scope="col">Type</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Amount</th>
                                            <th scope="col">Currency</th>
                                            <th scope="col">AMFI</th>
                                            <th scope="col">Hash</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($transactions as $transaction)
                                          <tr>
                                            <th scope="row">Seed</th>
                                            <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                                            <td>{{ $transaction->amount }}</td>
                                            <td>{{ $transaction->currency }}</td>
                                            <td>{{ $transaction->allocated_tokens }}</td>
                                            <td>{{ $transaction->tx_hash }}</td>
                                        </tr>
                                            @empty
                                            <tr>
                                                <td colspan="5">No Transactions Found</td>
                                            </tr>
                                            @endforelse
                                        </tbody>
                                      </table>
                                </div>

                            </div>
                        </div>
                        <!-- ./col -->
                    </div>

                </div><!--/. container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="{{ asset('backend/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
    <script src="{{ asset('backend/plugins/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('backend/plugins/chart.js/Chart.min.js') }}"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('backend/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('backend/dist/js/pages/dashboard2.js') }}"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AMFI | Dashboard</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('backend/css/style.css') }}">

    <style>
        /* Custom Styles */
        .claim-btn {
  position: relative;
  display: inline-block;
  cursor: pointer;
  font-size: 14px;
  background-color: blue;
  color: white;
}
        .content-wrapper {
            overflow: auto; /* Allow scrolling */
            -webkit-overflow-scrolling: touch; /* Enable smooth touch scrolling */
        }

        ::-webkit-scrollbar {
            display: none; /* Hide the scrollbar */
        }

        /* For Firefox */
        .content-wrapper {
            scrollbar-width: none; /* Hide scrollbar in Firefox */
        }

        .small-box h3 {
            font-size: 1.5rem;
        }
        /* Mobile adjustments */

        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }

            .main-header .float-right {
                margin-top: 10px;
                font-size: 0.9rem;
            }

            .content-header img {
                border-radius: 10px;
                margin-bottom: 10px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            /* Sidebar collapsible for mobile */
            .sidebar {
                width: 100%;
                height: auto;
            }

            .sidebar nav ul {
                flex-direction: row;
                flex-wrap: wrap;
            }

            .nav-item {
                flex: 1 1 calc(50% - 10px);
                margin: 5px;
            }
        }
    </style>
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="frontend/img/core-img/loader.gif" alt="AMFI logo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-lg navbar-dark"
             style="background-color: #213CA7; border-bottom: 1px solid white;">
             <a style="color:white;" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            {{-- <a class="navbar-brand" href="#">Dashboard</a> --}}
            {{-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            {{-- <div class="collapse navbar-collapse" id="navbarNav"> --}}
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item">

                    </li>
                </ul>
                <div class="ml-auto">
                    <p><strong>My Wallet Address:</strong> {{$walletAddress}}</p>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4"
               style="background-color: #213CA7; border-right: 1px solid white;">
               <a href="{{ url('/') }}" class="mt-2" style="display: flex; justify-content: center;">
                <img src="{{ url('frontend/img/core-img/dashboardlogo.webp') }}" alt="AMFI Logo" style="height:100px;">
                </a>

            <div class="sidebar mt-0">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column">
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-home"></i>Main Dashboard</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-hand-holding-usd"></i>Seed Investment</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-chart-line"></i>Presale</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-list"></i>Airdrop</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"><i class="nav-icon fas fa-coins"></i>Stacking <span class="right badge badge-danger">Coming Soon</span></a></li>
                        <li class="nav-item"><a href="{{ url('/') }}" class="nav-link"><i class="nav-icon fas fa-sign-out-alt"></i>Disconnect</a></li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper -->
        <div class="content-wrapper" style="background: url(../frontend/img/bg-img/bg-main2.webp) repeat;">
            <div class="content-header">
                <img src="{{ url('frontend/img/dashboard-banner.jpg') }}" style="width:100%; border-radius: 20px;">
            </div>

            <section class="content">
                <div class="container-fluid">
                    <h1 class="pt-3">Dashboard</h1>

                    <div class="row">
                        <!-- Small Box -->
                        <div class="col-lg-4 col-md-6">
                            <div class="small-box bg-theme2">
                                <div class="inner">
                                    <h6>Total Seed Purchased</h6>
                                    <h3>{{ $transactions->count() }}</h3>
                                    <h6>Seed Investment</h6>
                                    <h3>${{ $transactions->count() * 250 }}</h3>
                                </div>
                                <div class="icon"><i class="ion ion-bag"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="small-box bg-theme2">
                                <div class="inner">
                                    <h6>AMFI Price</h6>
                                    <h3>$0.025</h3>
                                    <h6>Allocation</h6>
                                    <h3>{{ $transactions->count() * 10000 }} AMFI</h3>
                                    <button class="btn claim-btn ml-5">
                                        Claim!
                                        <span class="hover-text">After Presale Ends!</span>
                                    </buttons></h3>
                                </div>
                                <div class="icon"><i class="ion ion-bag"></i></div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="small-box bg-theme2">
                                <div class="inner">
                                    <h6>Projected Profit</h6>
                                    <h3>${{ $transactions->count() * 10000 * 0.06 }}</h3>
                                    <h6>Listing Price</h6>
                                    <h3>$0.06</h3>
                                </div>
                                <div class="icon"><i class="ion ion-stats-bars"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Type</th><th>Date</th><th>Amount</th><th>Currency</th><th>AMFI</th><th>Hash</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($transactions as $transaction)
                                <tr>
                                    <td>Seed</td>
                                    <td>{{ $transaction->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $transaction->amount }}</td>
                                    <td>{{ $transaction->currency }}</td>
                                    <td>{{ $transaction->allocated_tokens }}</td>
                                    <td>{{ $transaction->tx_hash }}</td>
                                </tr>
                                @empty
                                <tr><td colspan="6">No Transactions Found</td></tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    </div>

    <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/dist/js/adminlte.js') }}"></script>
</body>

</html>

