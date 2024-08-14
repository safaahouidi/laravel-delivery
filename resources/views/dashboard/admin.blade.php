<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="multiCollapseabout" data-toggle="collapse"
                    data-target="#multiCollapseabout" aria-expanded="true" aria-controls="multiCollapseabout">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>About Page</span>
                </a>
                <div id="multiCollapseabout" class="collapse multi-collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">About page:</h6>
                        <a class="collapse-item" href="{{route('about-Admin')}}">About</a>
                        <a class="collapse-item" href="{{route('ourteam-Admin')}}">Our team</a>
                        <a class="collapse-item" href="{{route('aboutview-Admin')}}">Show database About</a>
                        <a class="collapse-item" href="{{route('ourteamview-Admin')}}">Show database Ourteam</a>


                        <div class="collapse-divider"></div>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="multiCollapseservice" data-toggle="collapse"
                    data-target="#multiCollapseservice" aria-expanded="true" aria-controls="multiCollapseservice">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Service Page</span>
                </a>
                <div id="multiCollapseservice" class="collapse multi-collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Service page:</h6>
                        <a class="collapse-item" href="{{route('service-Admin')}}">Our services</a>
                        <a class="collapse-item" href="{{route('serviceview-Admin')}}">Show database our services</a>

                        <div class="collapse-divider"></div>
                    </div>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="multiCollapsecontact" data-toggle="collapse"
                    data-target="#multiCollapsecontact" aria-expanded="true" aria-controls="multiCollapsecontact">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>contact Page</span>
                </a>
                <div id="multiCollapsecontact" class="collapse multi-collapse" aria-labelledby="headingPages"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">contact page:</h6>
                        {{-- <a class="collapse-item" href="{{route('contact-Admin')}}">Our contacts</a> --}}
                        <a class="collapse-item" href="{{route('contactview-Admin')}}">Show database our contacts</a>

                        <div class="collapse-divider"></div>
                    </div>

                </div>
            </li>

            <!-- Divider -->
            {{--
            <hr class="sidebar-divider"> --}}

            <!-- Heading -->
            <!-- Nav Item - Charts -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components,
                    and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to
                    Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <div id="main" class="primary">

            <h2 class="text-primary ml-5 mt-5 text-center">Welcome to Delivery project dashboard</h2>
            <img src="{{url('/welcome.jpg')}}" alt="" class="mt-5">
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>