<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Kasus Covid-19 Indonesia</title>
        <meta name="google-site-verification" content="bG5NoQv3C3luq4_TScDj2drpNSPgBD8E3JB4OmA1Gog" />
        <meta content="Corona Virus" name="description" />
        <meta content="Kasus Covid19 Indonesia" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <!-- DataTables -->
        <link href="{{asset('plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="{{asset('plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

        <!--Morris Chart CSS -->
        <link rel="stylesheet" href="../plugins/morris/morris.css')}}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="{{ asset('assets/js/tahun.js') }}"></script>

    </head>


    <body>

        <!-- Loader -->
        <div id="preloader"><div id="status"><div class="spinner"></div></div></div>

        <div class="header-bg">
            <!-- Navigation Bar-->
            <header id="topnav">
                <div class="topbar-main">
                    <div class="container-fluid">

                        <!-- Logo-->
                        <div class="d-block d-lg-none mr-5">
                            
                            <a href="index.html" class="logo">
                                <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="28" class="logo-small"> 
                            </a>

                        </div>
                        <!-- End Logo-->

                        <div class="menu-extras topbar-custom navbar p-0">

                            <ul class="list-inline flags-dropdown d-none d-lg-block mb-0">
                                <li class="list-inline-item text-white-50 mr-3">
                                    <!-- Menampilkan waktu -->
                                    <span class="font-13">Help : +6281357879215</span>
                                </li>
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle text-white-50 arrow-none waves-effect waves-light" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('assets/images/flags/indonesia-flags1.jpg')}}" alt="" class="flag-img">
                                        Indonesia <i class="mdi mdi-chevron-down"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-animated">
                                        <a href="#" class="dropdown-item"><img src="{{asset('assets/images/flags/french_flag.jpg')}}" alt="" class="flag-img"> French</a>
                                        <a href="#" class="dropdown-item"><img src="{{asset('assets/images/flags/germany_flag.jpg')}}" alt="" class="flag-img"> Germany</a>
                                        <a href="#" class="dropdown-item"><img src="{{asset('assets/images/flags/italy_flag.jpg')}}" alt="" class="flag-img"> Italy</a>
                                        <a href="#" class="dropdown-item"><img src="{{asset('assets/images/flags/spain_flag.jpg')}}" alt="" class="flag-img"> Spain</a>
                                    </div>
                                </li>
                            </ul>

                            <!-- Search input -->
                            <div class="search-wrap" id="search-wrap">
                                <div class="search-bar">
                                    <input class="search-input" type="search" placeholder="Search" />
                                    <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                        <i class="mdi mdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>

                            <ul class="list-inline ml-auto mb-0">
                                
                                <!-- notification-->

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link waves-effect toggle-search" href="#"  data-target="#search-wrap">
                                        <i class="mdi mdi-magnify noti-icon"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <i class="mdi mdi-bell-outline noti-icon"></i>
                                        <span class="badge badge-info badge-pill noti-icon-badge">1</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-arrow dropdown-menu-lg">
                                        <!-- item-->
                                        <div class="dropdown-item noti-title">
                                            <h5>Notification (1)</h5>
                                        </div>
                                        

                                        <!-- All-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-all">
                                            <a class="btn btn-primary" href="{{ url('instagram') }}"><i class="fa fa-instagram"></i> Instagram</a>
                                        </a>
                                        </a>

                                    </div>
                                </li>
                                <!-- User-->
                                <li class="list-inline-item dropdown notification-list">
                                    <a class="nav-link dropdown-toggle arrow-none waves-effect nav-user" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                        <img src="{{asset('assets/images/users/avatar-6.jpg')}}" alt="user" class="rounded-circle">
                                        <span class="d-none d-md-inline-block ml-1">Nanda Gunawan </span>
                                    </a>

                                </li>
                                <li class="menu-item list-inline-item">
                                    <!-- Mobile menu toggle-->
                                    <a class="navbar-toggle nav-link">
                                        <div class="lines">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </a>
                                    <!-- End mobile menu toggle-->
                                </li>

                            </ul>

                        </div>
                        <!-- end menu-extras -->

                        <div class="clearfix"></div>

                    </div> <!-- end container -->
                </div>
                <!-- end topbar-main -->

                <!-- MENU Start -->
                <div class="navbar-custom">
                    <div class="container-fluid">
                        <!-- Logo-->
                        <div class="d-none d-lg-block">
                            <!-- Text Logo
                            <a href="index.html" class="logo">
                                Foxia
                            </a>
                             -->
                            <!-- Image Logo -->
                             <a href="{{ url('/') }}" class="logo">
                                <!-- <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22" class="logo-small"> -->
                                <img src="{{asset('assets/images/logo.png')}}" alt="" height="20" class="logo-large">
                            </a>

                        </div>
                        <!-- End Logo-->
                        <div id="navigation">

                            <!-- Navigation Menu-->
                            <ul class="navigation-menu">

                                <li class="has-submenu">
                                    <a href="{{ url('/') }}"><i class="dripicons-meter"></i>Dashboard</a>
                                </li>

                            </ul>
                            <!-- End navigation menu -->
                        </div> <!-- end #navigation -->
                    </div> <!-- end container -->
                </div> <!-- end navbar-custom -->
            </header>
            <!-- End Navigation Bar-->

            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-4">
                                    <h4 class="page-title mb-0">Nanda Gunawan</h4>
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="#">Covid19</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <center><h3><script type='text/javascript'>
                                            <!--
                                            document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);
                                            //-->
                                        </script></h3>
                                        <span id="clock"></span></center>
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right">
                                        <span>Informasi terkini terkait virus conona <h2 class="badge badge-info">COVID-19</h2></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

            </div>
        </div>


        <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="mb-4">
                                    <div class="float-right text-right">
                                        <span class="badge badge-light text-info mt-2 mb-2"> - </span> 
                                        <p class="text-white-50">Cegah penularan virus</p>
                                    </div>
                                    
                                    <span><img src="{{asset('assets/images/global/positif.png')}}" alt="" class="flag-img" width="30%"></span>
                                </div>
                            </div>
                            <div class="ml-3 mr-3">
                                <div class="bg-white p-3 mini-stats-desc rounded">
                                    <h5 class="float-right mt-0">{{ number_format($global['confirmed']['value']) }}</h5>
                                    <h6 class="mt-0 mb-3">Total Positif</h6>
                                    <p class="text-muted mb-0">Orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="mb-4">
                                    <div class="float-right text-right">
                                        <span class="badge badge-light text-primary mt-2 mb-2"> - </span> 
                                        <p class="text-white-50">Jagalah kebersihan</p>
                                    </div>
                                    
                                    <span><img src="{{asset('assets/images/global/sembuh.png')}}" alt="" class="flag-img" width="30%"></span>
                                </div>
                            </div>
                            <div class="ml-3 mr-3">
                                <div class="bg-white p-3 mini-stats-desc rounded">
                                    <h5 class="float-right mt-0">{{ number_format($global['recovered']['value']) }}</h5>
                                    <h6 class="mt-0 mb-3">Total Sembuh</h6>
                                    <p class="text-muted mb-0">Orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="mb-4">
                                    <div class="float-right text-right">
                                        <span class="badge badge-light text-danger mt-2 mb-2"> - </span> 
                                        <p class="text-white-50">Jagan bersedih</p>
                                    </div>
                                    
                                    <span><img src="{{asset('assets/images/global/meninggal.png')}}" alt="" class="flag-img" width="30%"></span>
                                </div>
                            </div>
                            <div class="ml-3 mr-3">
                                <div class="bg-white p-3 mini-stats-desc rounded">
                                    <h5 class="float-right mt-0">{{ number_format($global['deaths']['value']) }}</h5>
                                    <h6 class="mt-0 mb-3">Total Meninggal</h6>
                                    <p class="text-muted mb-0">Orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card mini-stats">
                            <div class="p-3 mini-stats-content">
                                <div class="mb-4">
                                    <div class="float-right text-right">
                                        <span class="badge badge-light text-info mt-2 mb-2">Covid 19</span> 
                                        <p class="text-white-50">Indonesia</p>
                                    </div>
                                    <span><img src="{{asset('assets/images/flags/indonesia-flags1.jpg')}}" alt="" class="flag-img" width="30%"></span>
                                </div>
                            </div>
                            <div class="ml-3 mr-3">
                                <div class="bg-white p-3 mini-stats-desc rounded">
                                    <span class="float-right mt-0">{{ $indonesia['jumlahKasus'] }}</span>
                                    <h6 class="mt-0 mb-3">Positif</h6>
                                    <span class="float-right mt-0">{{ $indonesia['sembuh'] }}</span>
                                    <h6 class="mt-0 mb-3">Sembuh</h6>
                                    <span class="float-right mt-0">{{ $indonesia['meninggal'] }}</span>
                                    <h6 class="mt-0 mb-3">Meninggal</h6>
                                    <span class="float-right mt-0">{{$indonesia['perawatan']}}</span>
                                    <h6 class="mt-0 mb-3">Sedang Dirawat</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

        <div class="wrapper">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h4>

                                <table id="myTable2" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                    <thead>
                                    <tr>
                                        <th>Provinsi</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
               <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Data Kasus Coronavirus di Indonesia</h4>

                                <table id="myTable1" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                    <tr>
                                        <th>Provinsi</th>
                                        <th>Umur</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Wn</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Data Kasus Coronavirus DiDunia</h4>
                                <table id="myTable" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Negara</th>
                                        <th>Kota</th>
                                        <th>Positif</th>
                                        <th>Sembuh</th>
                                        <th>Meninggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->    
            </div> <!-- end container -->
        </div>

        <!-- Footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        © 2019 - 2020 Covid19 <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>

        <script src="{{asset('plugins/peity-chart/jquery.peity.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Responsive examples -->
        <script src="{{asset('plugins/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('assets/pages/datatables.init.js')}}"></script>

        <!--Morris Chart-->
        <script src="{{asset('plugins/morris/morris.min.js')}}"></script>
        <script src="{{asset('plugins/raphael/raphael-min.js')}}"></script>

        <script src="{{asset('assets/pages/dashboard.js')}}"></script>
        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/waktu.js') }}"></script>
        <script>
            $('#myTable').DataTable( {
                responsive: true,
                processing: true,
                serverside: true,
                ajax: "{{ route('get.all') }}",
                columns:[
                    {data:'country', name: 'country'},
                    {data:'city', name: 'city'},
                    {data:'confirmed', name: 'confirmed'},
                    {data:'recovered', name: 'recovered'},
                    {data:'deaths', name: 'deaths'},
                ]
            } );

            $('#myTable1').DataTable( {
                responsive: true,
                processing: true,
                serverside: true,
                ajax: "{{ route('get.perKasus') }}",
                columns:[
                    {data:'klaster', name: 'klaster'},
                    {data:'umur', name: 'umur'},
                    {data:'gender', name: 'gender'},
                    {data:'status', name: 'status'},
                    {data:'wn', name: 'wn'},
                ]
            });

            $('#myTable2').DataTable( {
                responsive: true,
                processing: true,
                serverside: true,
                ajax: "{{ route('get.provinsi') }}",
                columns:[
                    {data:'provinsi', name: 'provinsi'},
                    {data:'kasusPosi', name: 'kasusPosi'},
                    {data:'kasusSemb', name: 'kasusSemb'},
                    {data:'kasusMeni', name: 'kasusMeni'},
                    
                ]
            });
        </script>
    </body>
</html>