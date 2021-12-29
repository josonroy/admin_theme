<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Uplon - Bootstrap 4 Responsive Admin Dashboard Template</title>

        <!-- Switchery css -->
        <link href="{{asset('plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{asset('assets/js/modernizr.min.js')}}"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="{{route('index')}}" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Uplon</span></a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">
                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-notifications-none noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5><small><span class="badge badge-danger">7</span>Notification</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success"><i class="icon-bubble"></i></div>
                                    <p class="notify-details">Robert S. Taylor commented on Admin<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info"><i class="icon-user"></i></div>
                                    <p class="notify-details">New user registered.<small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger"><i class="icon-like"></i></div>
                                    <p class="notify-details">Carlos Crouch liked <b>Admin</b><small class="text-muted">1min ago</small></p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle arrow-none waves-light waves-effect" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <i class="zmdi zmdi-email noti-icon"></i>
                                <span class="noti-icon-badge"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-lg" aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title bg-success">
                                    <h5><small><span class="badge badge-danger">7</span>Messages</small></h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="{{asset('assets/images/users/avatar-2.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="{{asset('assets/images/users/avatar-3.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Carlos Crouch</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-faded">
                                        <img src="{{asset('assets/images/users/avatar-4.jpg')}}" alt="img" class="rounded-circle img-fluid">
                                    </div>
                                    <p class="notify-details">
                                        <b>Robert Taylor</b>
                                        <span>New tasks needs to be done</span>
                                        <small class="text-muted">1min ago</small>
                                    </p>
                                </a>

                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item notify-all">
                                    View All
                                </a>

                            </div>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link waves-effect waves-light right-bar-toggle" href="javascript:void(0);">
                                <i class="zmdi zmdi-format-subject noti-icon"></i>
                            </a>
                        </li>

                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! John</small> </h5>
                                </div>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-account-circle"></i> <span>Profile</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-settings"></i> <span>Settings</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-lock-open"></i> <span>Lock Screen</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="zmdi zmdi-power"></i> <span>Logout</span>
                                </a>

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li class="hidden-mobile app-search">
                            <form role="search" class="">
                                <input type="text" placeholder="Search..." class="form-control">
                                <a href=""><i class="fa fa-search"></i></a>
                            </form>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="text-muted menu-title">Navigation</li>

                            <li class="has_sub">
                                <a href="{{route('index')}}" class="waves-effect"><span class="badge badge-pill badge-primary float-right">1</span><i class="zmdi zmdi-view-dashboard"></i><span> Dashboard </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-underlined"></i> <span> User Interface </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('ui-buttons')}}">Buttons</a></li>
                                    <li><a href="{{route('ui-cards')}}">Cards</a></li>
                                    <li><a href="{{route('ui-dropdowns')}}">Dropdowns</a></li>
                                    <li><a href="{{route('ui-checkbox-radio')}}">Checkboxs-Radios</a></li>
                                    <li><a href="{{route('ui-navs')}}">Navs</a></li>
                                    <li><a href="{{route('ui-progress')}}">Progress</a></li>
                                    <li><a href="{{route('ui-modals')}}">Modals</a></li>
                                    <li><a href="{{route('ui-notification')}}">Notification</a></li>
                                    <li><a href="{{route('ui-alerts')}}">Alerts</a></li>
                                    <li><a href="{{route('ui-carousel')}}">Carousel</a></li>
                                    <li><a href="{{route('ui-bootstrap')}}">Bootstrap UI</a></li>
                                    <li><a href="{{route('ui-typography')}}">Typography</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-album"></i> <span> Components </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('components-grid')}}">Grid</a></li>
                                    <li><a href="{{route('components-range-sliders')}}">Range sliders</a></li>
                                    <li><a href="{{route('components-sweet-alert')}}">Sweet Alerts</a></li>
                                    <li><a href="{{route('components-ratings')}}">Ratings</a></li>
                                    <li><a href="{{route('components-treeview')}}">Treeview</a></li>
                                    <li><a href="{{route('components-tour')}}">Tour</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="{{route('calendar')}}" class="waves-effect"><i class="zmdi zmdi-calendar"></i><span> Calendar </span> </a>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-widgets"></i> <span> Widgets </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('widgets-tiles')}}">Tile Box</a></li>
                                    <li><a href="{{route('widgets-charts')}}">Chart Widgets</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-fire"></i> <span> Icons </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('icons-materialdesign')}}">Material Design</a></li>
                                    <li><a href="{{route('icons-ionicons')}}">Ion Icons</a></li>
                                    <li><a href="{{route('icons-fontawesome')}}">Font awesome</a></li>
                                    <li><a href="{{route('icons-themify')}}">Themify Icons</a></li>
                                    <li><a href="{{route('icons-simple-line')}}">Simple line Icons</a></li>
                                    <li><a href="{{route('icons-weather')}}">Weather Icons</a></li>
                                    <li><a href="{{route('icons-pe7')}}">PE7 Icons</a></li>
                                    <li><a href="{{route('icons-typicons')}}">Typicons</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="badge badge-pill badge-warning float-right">8</span><i class="zmdi zmdi-collection-text"></i><span> Forms </span> </a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('form-elements')}}">General Elements</a></li>
                                    <li><a href="{{route('form-advanced')}}">Advanced Form</a></li>
                                    <li><a href="{{route('form-validation')}}">Form Validation</a></li>
                                    <li><a href="{{route('form-pickers')}}">Form Pickers</a></li>
                                    <li><a href="{{route('form-wizard')}}">Form Wizard</a></li>
                                    <li><a href="{{route('form-mask')}}">Form Masks</a></li>
                                    <li><a href="{{route('form-uploads')}}">Multiple File Upload</a></li>
                                    <li><a href="{{route('form-xeditable')}}">X-editable</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-format-list-bulleted"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('tables-basic')}}">Basic Tables</a></li>
                                    <li><a href="{{route('tables-datatable')}}">Data Table</a></li>
                                    <li><a href="{{route('tables-responsive')}}">Responsive Table</a></li>
                                    <li><a href="{{route('tables-tablesaw')}}">Tablesaw</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-chart"></i><span> Charts </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('chart-flot')}}">Flot Chart</a></li>
                                    <li><a href="{{route('chart-morris')}}">Morris Chart</a></li>
                                    <li><a href="{{route('chart-chartjs')}}">Chartjs</a></li>
                                    <li><a href="{{route('chart-peity')}}">Peity Charts</a></li>
                                    <li><a href="{{route('chart-chartist')}}">Chartist Charts</a></li>
                                    <li><a href="{{route('chart-c3')}}">C3 Charts</a></li>
                                    <li><a href="{{route('chart-sparkline')}}">Sparkline charts</a></li>
                                    <li><a href="{{route('chart-knob')}}">Jquery Knob</a></li>
                                </ul>
                            </li>

                            <li class="text-muted menu-title">More</li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><span class="badge badge-success badge-pill float-right">13</span><i class="zmdi zmdi-collection-item"></i><span> Pages </span></a>
                                <ul class="list-unstyled">
                                    <li><a href="{{route('pages-starter')}}">Starter Page</a></li>
                                    <li><a href="{{route('pages-login')}}">Login</a></li>
                                    <li><a href="{{route('pages-register')}}">Register</a></li>
                                    <li><a href="{{route('pages-recoverpw')}}">Recover Password</a></li>
                                    <li><a href="{{route('pages-lock-screen')}}">Lock Screen</a></li>
                                    <li><a href="{{route('pages-404')}}">Error 404</a></li>
                                    <li><a href="{{route('pages-500')}}">Error 500</a></li>
                                    <li><a href="{{route('pages-timeline')}}">Timeline</a></li>
                                    <li><a href="{{route('pages-invoice')}}">Invoice</a></li>
                                    <li><a href="{{route('pages-pricing')}}">Pricing</a></li>
                                    <li><a href="{{route('pages-gallery')}}">Gallery</a></li>
                                    <li><a href="{{route('pages-maintenance')}}">Maintenance</a></li>
                                    <li><a href="{{route('pages-comingsoon')}}">Coming Soon</a></li>
                                </ul>
                            </li>

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="zmdi zmdi-blur-linear"></i><span>Multi Level </span> <span class="menu-arrow"></span></a>
                                <ul>
                                    <li class="has_sub">
                                        <a href="javascript:void(0);" class="waves-effect"><span>Menu Level 1.1</span>  <span class="menu-arrow"></span>    </a>
                                        <ul>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                            <li><a href="javascript:void(0);"><span>Menu Item</span></a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);"><span>Menu Level 1.2</span></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->
            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">Simple line Icons</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">Icons</a></li>
                                        <li class="breadcrumb-item active">Simple line Icons</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-box">
                                    <div class="">
                                        <div class="icon-list-demo">
                                            <div class="row">

                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-user"></i>icon-user
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-people"></i>icon-people

                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-user-female"></i>
                                                        icon-user-female
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-user-follow"></i>
                                                        icon-user-follow
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-user-following"></i>
                                                        icon-user-following
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-user-unfollow"></i>
                                                        icon-user-unfollow
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-login"></i>
                                                        icon-login
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-logout"></i>
                                                        icon-logout
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-emotsmile"></i>
                                                        icon-emotsmile
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-phone"></i>
                                                        icon-phone
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-call-end"></i>
                                                        icon-call-end
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-call-in"></i>
                                                        icon-call-in
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-call-out"></i>
                                                        icon-call-out
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-map"></i>
                                                        icon-map
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-location-pin"></i>
                                                        icon-location-pin
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-direction"></i>
                                                        icon-direction
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-directions"></i>
                                                        icon-directions
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-compass"></i>
                                                        icon-compass
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-layers"></i>
                                                        icon-layers
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-menu"></i>
                                                        icon-menu
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-list"></i>
                                                        icon-list
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-options-vertical"></i>
                                                        icon-options-vertical
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-options"></i>
                                                        icon-options
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-down"></i>
                                                        icon-arrow-down
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-left"></i>
                                                        icon-arrow-left
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-right"></i>
                                                        icon-arrow-right
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-up"></i>
                                                        icon-arrow-up
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-up-circle"></i>
                                                        icon-arrow-up-circle
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-left-circle"></i>
                                                        icon-arrow-left-circle
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-right-circle"></i>
                                                        icon-arrow-right-circle
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-arrow-down-circle"></i>
                                                        icon-arrow-down-circle
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-check"></i>
                                                        icon-check
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-clock"></i>
                                                        icon-clock
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-plus"></i>
                                                        icon-plus
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-close"></i>
                                                        icon-close
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-trophy"></i>
                                                        icon-trophy
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-screen-smartphone"></i>
                                                        icon-screen-smartphone
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-screen-desktop"></i>
                                                        icon-screen-desktop
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-plane"></i>
                                                        icon-plane
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-notebook"></i>
                                                        icon-notebook
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-mustache"></i>
                                                        icon-mustache
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-mouse"></i>
                                                        icon-mouse
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-magnet"></i>
                                                        icon-magnet
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-energy"></i>
                                                        icon-energy
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-disc"></i>
                                                        icon-disc
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-cursor"></i>
                                                        icon-cursor
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-cursor-move"></i>
                                                        icon-cursor-move
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-crop"></i>
                                                        icon-crop
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-chemistry"></i>
                                                        icon-chemistry
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-speedometer"></i>
                                                        icon-speedometer
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-shield"></i>
                                                        icon-shield
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-screen-tablet"></i>
                                                        icon-screen-tablet
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-magic-wand"></i>
                                                        icon-magic-wand
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-hourglass"></i>
                                                        icon-hourglass
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-graduation"></i>
                                                        icon-graduation
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-ghost"></i>
                                                        icon-ghost
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-game-controller"></i>
                                                        icon-game-controller
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-fire"></i>
                                                        icon-fire
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-eyeglass"></i>
                                                        icon-eyeglass
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-envelope-open"></i>
                                                        icon-envelope-open
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-bell"></i>
                                                        icon-bell
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-badge"></i>
                                                        icon-badge
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-anchor"></i>
                                                        icon-anchor
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-wallet"></i>
                                                        icon-wallet
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-vector"></i>
                                                        icon-vector
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-speech"></i>
                                                        icon-speech
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-puzzle"></i>
                                                        icon-puzzle
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-printer"></i>
                                                        icon-printer
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-present"></i>
                                                        icon-present
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-playlist"></i>
                                                        icon-playlist
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-pin"></i>
                                                        icon-pin
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-picture"></i>
                                                        icon-picture
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-handbag"></i>
                                                        icon-handbag
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-globe-alt"></i>
                                                        icon-globe-alt
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-globe"></i>
                                                        icon-globe
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-folder-alt"></i>
                                                        icon-folder-alt
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-folder"></i>
                                                        icon-folder
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-film"></i>
                                                        icon-film
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-feed"></i>
                                                        icon-feed
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-drop"></i>
                                                        icon-drop
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-drawar"></i>
                                                        icon-drawar
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-docs"></i>
                                                        icon-docs
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-doc"></i>
                                                        icon-doc
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-diamond"></i>
                                                        icon-diamond
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-cup"></i>
                                                        icon-cup
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-calculator"></i>
                                                        icon-calculator
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-bubbles"></i>
                                                        icon-bubbles
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-briefcase"></i>
                                                        icon-briefcase
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-book-open"></i>
                                                        icon-book-open
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-basket-loaded"></i>
                                                        icon-basket-loaded
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-basket"></i>
                                                        icon-basket
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-bag"></i>
                                                        icon-bag
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-action-undo"></i>
                                                        icon-action-undo
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-action-redo"></i>
                                                        icon-action-redo
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-wrench"></i>
                                                        icon-wrench
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-umbrella"></i>
                                                        icon-umbrella
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-trash"></i>
                                                        icon-trash
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-tag"></i>
                                                        icon-tag
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-support"></i>
                                                        .icon-support
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-frame"></i>
                                                        icon-frame
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-size-fullscreen"></i>
                                                        icon-size-fullscreen
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-size-actual"></i>
                                                        icon-size-actual
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-shuffle"></i>
                                                        icon-shuffle
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-share-alt"></i>
                                                        icon-share-alt
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-share"></i>
                                                        icon-share
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-rocket"></i>
                                                        icon-rocket
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-question"></i>
                                                        icon-question
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-pie-chart"></i>
                                                        icon-pie-chart
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-pencil"></i>
                                                        icon-pencil
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-note"></i>
                                                        icon-note
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-loop"></i>
                                                        icon-loop
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-home"></i>
                                                        icon-home
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-grid"></i>
                                                        icon-grid
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-graph"></i>
                                                        icon-graph
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-microphone"></i>
                                                        icon-microphone
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-music-tone-alt"></i>
                                                        icon-music-tone-alt
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-music-tone"></i>
                                                        icon-music-tone
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-earphones-alt"></i>
                                                        icon-earphones-alt
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-earphones"></i>
                                                        icon-earphones
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-equalizer"></i>
                                                        icon-equalizer
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-like"></i>
                                                        icon-like
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-dislike"></i>
                                                        icon-dislike
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-control-start"></i>
                                                        icon-control-start
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-control-rewind"></i>
                                                        icon-control-rewind
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-control-play"></i>
                                                        icon-control-play
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-control-pause"></i>
                                                        icon-control-pause
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-control-forward"></i>
                                                        icon-control-forward
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-control-end"></i>
                                                        icon-control-end
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-volume-1"></i>
                                                        icon-volume-1
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-volume-2"></i>
                                                        icon-volume-2
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-volume-off"></i>
                                                        icon-volume-off
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-calender"></i>
                                                        icon-calender
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-bulb"></i>
                                                        icon-bulb
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-chart"></i>
                                                        icon-chart
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-ban"></i>
                                                        icon-ban
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-bubble"></i>
                                                        icon-bubble
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-camrecorder"></i>
                                                        icon-camrecorder
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-camera"></i>
                                                        icon-camera
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-cloud-download"></i>
                                                        icon-cloud-download
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-cloud-upload"></i>
                                                        icon-cloud-upload
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-eye"></i>
                                                        icon-eye
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-flag"></i>
                                                        icon-flag
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-heart"></i>
                                                        icon-heart
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-info"></i>
                                                        icon-info
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-key"></i>
                                                        icon-key
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-link"></i>
                                                        icon-link
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-lock"></i>
                                                        icon-lock
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-lock-open"></i>
                                                        icon-lock-open
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-magnifier"></i>
                                                        icon-magnifier
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-magnifier-add"></i>
                                                        icon-magnifier-add
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-magnifier-remove"></i>
                                                        icon-magnifier-remove
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-paper-clip"></i>
                                                        icon-paper-clip
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-paper-plane"></i>
                                                        icon-paper-plane
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-power"></i>
                                                        icon-power
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-refresh"></i>
                                                        icon-refresh
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-reload"></i>
                                                        icon-reload
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-settings"></i>
                                                        icon-settings
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-star"></i>
                                                        icon-star
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-symble-female"></i>
                                                        icon-symble-female
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-symbol-male"></i>
                                                        icon-symbol-male
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-target"></i>
                                                        icon-target
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-credit-card"></i>
                                                        icon-credit-card
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-paypal"></i>
                                                        icon-paypal
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-tumblr"></i>
                                                        icon-social-tumblr
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-twitter"></i>
                                                        icon-social-twitter
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-facebook"></i>
                                                        icon-social-facebook
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-instagram"></i>
                                                        icon-social-instagram
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-linkedin"></i>
                                                        icon-social-linkedin
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-pintarest"></i>
                                                        icon-social-pintarest
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-github"></i>
                                                        icon-social-github
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-gplus"></i>
                                                        icon-social-gplus
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-reddit"></i>
                                                        icon-social-reddit
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-skype"></i>
                                                        icon-social-skype
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-dribbble"></i>
                                                        icon-social-dribbble
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-behance"></i>
                                                        icon-social-behance
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-foursqare"></i>
                                                        icon-social-foursqare
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-soundcloud"></i>
                                                        icon-social-soundcloud
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-spotify"></i>
                                                        icon-social-spotify
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-stumbleupon"></i>
                                                        icon-social-stumbleupon
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-youtube"></i>
                                                        icon-social-youtube
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-md-4 col-xl-3">
                                                    <div class="preview">
                                                        <i class="icon-social-dropbox"></i>
                                                        icon-social-dropbox
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- col-->
                        </div> <!-- End row -->

                    </div> <!-- container -->

                </div> <!-- content -->



            </div>
            <!-- End content-page -->


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="nicescroll">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a href="#home-2"  class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg')}}"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="messages-2">

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-10">
                                <div class="col-8">
                                    <h5 class="m-0">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#1bb99a" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- end nicescroll -->
            </div>
            <!-- /Right-bar -->

            <footer class="footer">
                2016 - 2019 © Uplon.
            </footer>


        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/detect.js')}}"></script>
        <script src="{{asset('assets/js/fastclick.js')}}"></script>
        <script src="{{asset('assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset('assets/js/waves.js')}}"></script>
        <script src="{{asset('assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset('assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset('plugins/switchery/switchery.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js')}}"></script>
        <script src="{{asset('assets/js/jquery.app.js')}}"></script>

    </body>
</html>