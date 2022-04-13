<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Client Dashboard - Maxedge UK</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="/dashboard/assets/images/favicon.ico">
    <!-- Bootstrap -->
    <link href="/dashboard/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- simplebar -->
    <link href="/dashboard/assets/css/simplebar.css" rel="stylesheet" type="text/css" />

    <!-- Icons -->
    <link href="/dashboard/assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link href="/dashboard/assets/css/tabler-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css" rel="stylesheet">
    <!-- Css -->
    <link href="/dashboard/assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />

</head>

<body>
    <!-- Loader -->
    <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
    <!-- Loader -->

    <div class="page-wrapper landrick-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper sidebar-{{auth()->user()->type == 'super' ? 'dark' : 'light'}}">
            <div class="sidebar-content" data-simplebar style="height: calc(100% - 60px);">
                <div class="sidebar-brand">
                    <a href="/admin">
                        <img src="/assets/images/logo.png" height="50" class="logo-light-mode" alt="">
                        <img src="/assets/images/logo.png" height="50" class="logo-dark-mode" alt="">
                        <span class="sidebar-colored">
                            <img src="/assets/images/logo.png" height="50" alt="">
                        </span>
                    </a>
                </div>

                <ul class="sidebar-menu">
                    <li><a href="/admin"><i class="ti ti-home me-2"></i>Dashboard</a></li>

                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-diamond me-2"></i>Projects</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="/client/projects">All</a></li>
                            </ul>
                        </div>
                    </li>


                    <li class="sidebar-dropdown">
                        <a href="javascript:void(0)"><i class="ti ti-brand-gravatar me-2"></i>App</a>
                        <div class="sidebar-submenu">
                            <ul>
                                <li><a href="/client/about">About</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <!-- sidebar-menu  -->
            </div>

        </nav>
        <!-- sidebar-wrapper  -->

        <!-- Start Page Content -->
        <main class="page-content bg-light">
            <div class="top-header">
                <div class="header-bar d-flex justify-content-between border-bottom">
                    <div class="d-flex align-items-center">
                        <a href="#" class="logo-icon me-3">
                            <img src="/assets/images/logo.png" height="30" class="small" alt="">
                            <span class="big">
                                <img src="/assets/images/logo.png" height="24" class="logo-light-mode" alt="">
                                <img src="/assets/images/logo.png" height="24" class="logo-dark-mode" alt="">
                            </span>
                        </a>
                        <a id="close-sidebar" class="btn btn-icon btn-soft-light" href="javascript:void(0)">
                            <i class="ti ti-menu-2"></i>
                        </a>
                        <div class="search-bar p-0 d-none d-md-block ms-2">
                            <div id="search" class="menu-search mb-0">
                                <form role="search" method="get" id="searchform" class="searchform">
                                    <div>
                                        <input type="text" class="form-control border rounded" name="s" id="s" placeholder="Search Keywords...">
                                        <input type="submit" id="searchsubmit" value="Search">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <ul class="list-unstyled mb-0">
                        <li class="list-inline-item mb-0">
                            <a href="javascript:void(0)" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                <div class="btn btn-icon btn-soft-light"><i class="ti ti-settings"></i></div>
                            </a>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <!-- <button type="button" class="btn btn-icon btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-bell"></i></button>
                                <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span> -->

                                <div class="dropdown-menu dd-menu bg-white shadow rounded border-0 mt-3 p-0" data-simplebar style="height: 320px; width: 290px;">
                                    <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                                        <h6 class="mb-0 text-dark">Notifications</h6>
                                        <span class="badge bg-soft-danger rounded-pill">3</span>
                                    </div>
                                    <div class="p-3">
                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-shopping-cart"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title">Order Complete</h6>
                                                    <small class="text-muted">15 min ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="/dashboard/assets/images/client/04.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt="">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">Message</span> from Luis</h6>
                                                    <small class="text-muted">1 hour ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-currency-dollar"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">One Refund Request</span></h6>
                                                    <small class="text-muted">2 hour ago</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon text-center rounded-circle me-2">
                                                    <i class="ti ti-truck-delivery"></i>
                                                </div>
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title">Deliverd your Order</h6>
                                                    <small class="text-muted">Yesterday</small>
                                                </div>
                                            </div>
                                        </a>

                                        <a href="#!" class="dropdown-item features feature-primary key-feature p-0 mt-3">
                                            <div class="d-flex align-items-center">
                                                <img src="/dashboard/assets/images/client/15.jpg" class="avatar avatar-md-sm rounded-circle border shadow me-2" alt="">
                                                <div class="flex-1">
                                                    <h6 class="mb-0 text-dark title"><span class="fw-bold">Cally</span> started following you</h6>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="list-inline-item mb-0 ms-1">
                            <div class="dropdown dropdown-primary">
                                <button type="button" class="btn btn-soft-light dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @if (auth()->user()->photo == '')
                                    <img src="{{auth()->user()->photo == '' ? '/dashboard/assets/images/client/05.jpg' : env('APP_CDN').'/'.auth()->user()->photo}}" class="avatar avatar-ex-small rounded" alt="">
                                    @else
                                    <img src="{{env('APP_CDN')}}/{{auth()->user()->photo}}" class="avatar avatar-ex-small rounded" alt="">
                                    @endif
                                </button>
                                <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3" style="min-width: 200px;">
                                    <a class="dropdown-item d-flex align-items-center text-dark pb-3" href="#?">
                                        @if (auth()->user()->photo == '')
                                        <img src="{{auth()->user()->photo == '' ? '/dashboard/assets/images/client/05.jpg' : env('APP_CDN').'/'.auth()->user()->photo}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        @else
                                        <img src="{{env('APP_CDN')}}/{{auth()->user()->photo}}" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                        @endif
                                        <div class="flex-1 ms-2">
                                            <span class="d-block">{{auth()->user()->first_name}}</span>
                                            <small class="text-muted">{{auth()->user()->type}}</small>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-dark" href="/client"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Dashboard</a>
                                    <a class="dropdown-item text-dark" href="/client/profile"><span class="mb-0 d-inline-block me-1"><i class="ti ti-home"></i></span> Profile</a>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button class="dropdown-item text-dark" type="submit"><span class="mb-0 d-inline-block me-1"><i class="ti ti-lock"></i></span> Logout</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            @yield("mainSection")

            <!-- Footer Start -->
            <footer class="bg-white shadow py-3">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col">
                            <div class="text-sm-start text-center">
                                <p class="mb-0 text-muted">© <script>
                                        document.write(new Date().getFullYear())
                                    </script> Maxedge UK Ltd.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
                <!--end container-->
            </footer>
            <!--end footer-->
            <!-- End -->
        </main>
        <!--End page-content" -->
    </div>
    <!-- page-wrapper -->


    <!-- javascript -->
    <script src="/dashboard/assets/js/bootstrap.bundle.min.js"></script>
    <!-- simplebar -->
    <script src="/dashboard/assets/js/simplebar.min.js"></script>
    <!-- Icons -->
    <script src="/dashboard/assets/js/feather.min.js"></script>
    <!-- Chart -->
    <script src="/dashboard/assets/js/apexcharts.min.js"></script>
    <!-- Main Js -->
    <script src="/dashboard/assets/js/plugins.init.js"></script>
    <script src="/dashboard/assets/js/app.js"></script>

</body>

</html>