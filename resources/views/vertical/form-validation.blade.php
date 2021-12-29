<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="{{asset(assets/images/favicon.ico')}}">

        <!-- App title -->
        <title>Uplon - Bootstrap 4 Responsive Admin Dashboard Template</title>

        <!-- Switchery css -->
        <link href="{{asset(plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

        <!-- Bootstrap CSS -->
        <link href="{{asset(assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- App CSS -->
        <link href="{{asset(assets/css/style.css')}}" rel="stylesheet" type="text/css" />

        <!-- Modernizr js -->
        <script src="{{asset(assets/js/modernizr.min.js')}}"></script>

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
                                        <img src="{{asset(assets/images/users/avatar-2.jpg')}}" alt="img" class="rounded-circle img-fluid">
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
                                        <img src="{{asset(assets/images/users/avatar-3.jpg')}}" alt="img" class="rounded-circle img-fluid">
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
                                        <img src="{{asset(assets/images/users/avatar-4.jpg')}}" alt="img" class="rounded-circle img-fluid">
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
                                <img src="{{asset(assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">
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
                                    <h4 class="page-title float-left">Form Validation</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">Uplon</a></li>
                                        <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Validation</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">

                                    <div class="row">
                                        <div class="col-lg-6">

                                            <h4 class="header-title m-t-0">Basic Form</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form action="#" data-parsley-validate novalidate>
                                                    <div class="form-group">
                                                        <label for="userName">User Name<span class="text-danger">*</span></label>
                                                        <input type="text" name="nick" parsley-trigger="change" required
                                                               placeholder="Enter user name" class="form-control" id="userName">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="emailAddress">Email address<span class="text-danger">*</span></label>
                                                        <input type="email" name="email" parsley-trigger="change" required
                                                               placeholder="Enter email" class="form-control" id="emailAddress">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pass1">Password<span class="text-danger">*</span></label>
                                                        <input id="pass1" type="password" placeholder="Password" required
                                                               class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="passWord2">Confirm Password <span class="text-danger">*</span></label>
                                                        <input data-parsley-equalto="#pass1" type="password" required
                                                               placeholder="Password" class="form-control" id="passWord2">
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input id="remember-1" type="checkbox">
                                                            <label for="remember-1"> Remember me </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">
                                            <h4 class="header-title m-t-0">Horizontal Form</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form role="form" data-parsley-validate novalidate>
                                                    <div class="form-group row">
                                                        <label for="inputEmail3" class="col-sm-4 form-control-label">Email<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input type="email" required parsley-type="email" class="form-control"
                                                                   id="inputEmail3" placeholder="Email">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass1" class="col-sm-4 form-control-label">Password<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input id="hori-pass1" type="password" placeholder="Password" required
                                                                   class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="hori-pass2" class="col-sm-4 form-control-label">Confirm Password
                                                            <span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input data-parsley-equalto="#hori-pass1" type="password" required
                                                                   placeholder="Password" class="form-control" id="hori-pass2">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <label for="webSite" class="col-sm-4 form-control-label">Web Site<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input type="url" required parsley-type="url" class="form-control"
                                                                   id="webSite" placeholder="URL">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <div class="checkbox">
                                                                <input id="remember-2" type="checkbox">
                                                                <label for="remember-2"> Remember me </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Register
                                                            </button>
                                                            <button type="reset"
                                                                    class="btn btn-secondary waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end row -->

                                    <div class="row m-t-50">
                                        <div class="col-lg-6 m-t-20">
                                            <h4 class="header-title m-t-0">Validation type</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form class="form-horizontal " action="#">
                                                    <div class="form-group">
                                                        <label>Required</label>
                                                        <input type="text" class="form-control" required
                                                               placeholder="Type something"/>
                                                    </div>


                                                    <div class="form-group">
                                                        <label>Equal To</label>
                                                        <div>
                                                            <input type="password" id="pass2" class="form-control" required
                                                                   placeholder="Password"/>
                                                        </div>
                                                        <div class="m-t-10">
                                                            <input type="password" class="form-control" required
                                                                   data-parsley-equalto="#pass2"
                                                                   placeholder="Re-Type Password"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>E-Mail</label>
                                                        <div>
                                                            <input type="email" class="form-control" required
                                                                   parsley-type="email" placeholder="Enter a valid e-mail"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>URL</label>
                                                        <div>
                                                            <input parsley-type="url" type="url" class="form-control"
                                                                   required placeholder="URL"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Digits</label>
                                                        <div>
                                                            <input data-parsley-type="digits" type="text"
                                                                   class="form-control" required
                                                                   placeholder="Enter only digits"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Number</label>
                                                        <div>
                                                            <input data-parsley-type="number" type="text"
                                                                   class="form-control" required
                                                                   placeholder="Enter only numbers"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Alphanumeric</label>
                                                        <div>
                                                            <input data-parsley-type="alphanum" type="text"
                                                                   class="form-control" required
                                                                   placeholder="Enter alphanumeric value"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Textarea</label>
                                                        <div>
                                                            <textarea required class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                        <div class="col-lg-6 m-t-20">
                                            <h4 class="header-title m-t-0">Range validation</h4>
                                            <p class="text-muted font-13 m-b-10">
                                                Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
                                            </p>

                                            <div class="p-20">
                                                <form action="#">

                                                    <div class="form-group">
                                                        <label>Min Length</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-minlength="6" placeholder="Min 6 chars."/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Max Length</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-maxlength="6" placeholder="Max 6 chars."/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Range Length</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-length="[5,10]"
                                                                   placeholder="Text between 5 - 10 chars length"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Min Value</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-min="6" placeholder="Min value is 6"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Max Value</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-max="6" placeholder="Max value is 6"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Range Value</label>
                                                        <div>
                                                            <input class="form-control" required type="text range" min="6"
                                                                   max="100" placeholder="Number between 6 - 100"/>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Regular Exp</label>
                                                        <div>
                                                            <input type="text" class="form-control" required
                                                                   data-parsley-pattern="#[A-Fa-f0-9]{6}"
                                                                   placeholder="Hex. Color"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Min check</label>
                                                        <div>
                                                            <div class="checkbox checkbox-custom">
                                                                <input id="checkbox1" type="checkbox"
                                                                       data-parsley-multiple="groups"
                                                                       data-parsley-mincheck="2">
                                                                <label for="checkbox1"> And this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-pink">
                                                                <input id="checkbox2" type="checkbox"
                                                                       data-parsley-multiple="groups"
                                                                       data-parsley-mincheck="2">
                                                                <label for="checkbox2"> Can't check this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-success">
                                                                <input id="checkbox3" type="checkbox"
                                                                       data-parsley-multiple="groups"
                                                                       data-parsley-mincheck="2" required>
                                                                <label for="checkbox3"> This too </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Max check</label>
                                                        <div>
                                                            <div class="checkbox checkbox-pink">
                                                                <input id="checkbox4" type="checkbox"
                                                                       data-parsley-multiple="group1">
                                                                <label for="checkbox4"> And this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-primary">
                                                                <input id="checkbox5" type="checkbox"
                                                                       data-parsley-multiple="group1">
                                                                <label for="checkbox5"> Can't check this </label>
                                                            </div>
                                                            <div class="checkbox checkbox-success">
                                                                <input id="checkbox6" type="checkbox"
                                                                       data-parsley-multiple="group1"
                                                                       data-parsley-maxcheck="1">
                                                                <label for="checkbox6"> This too </label>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group m-b-0">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>
                                    <!-- end row -->

                                </div>
                            </div><!-- end col-->

                        </div>
                        <!-- end row -->


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
        <script src="{{asset(assets/js/jquery.min.js')}}"></script>
        <script src="{{asset(assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset(assets/js/detect.js')}}"></script>
        <script src="{{asset(assets/js/fastclick.js')}}"></script>
        <script src="{{asset(assets/js/jquery.blockUI.js')}}"></script>
        <script src="{{asset(assets/js/waves.js')}}"></script>
        <script src="{{asset(assets/js/jquery.nicescroll.js')}}"></script>
        <script src="{{asset(assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset(assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{asset(plugins/switchery/switchery.min.js')}}"></script>

        <!-- Validation js (Parsleyjs) -->
        <script src="{{asset(plugins/parsleyjs/parsley.min.js')}}"></script>

        <!-- App js -->
        <script src="{{asset(assets/js/jquery.core.js')}}"></script>
        <script src="{{asset(assets/js/jquery.app.js')}}"></script>

        <script>
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>

    </body>
</html>