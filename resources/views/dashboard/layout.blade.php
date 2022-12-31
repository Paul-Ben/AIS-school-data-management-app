<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Alven International School Dashboard</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/adminwrap-lite/" />
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/assets/styles/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('assets/styles/style.css')}}" rel="stylesheet">
    <!-- page css -->
    <link href="{{ asset('assets/styles/icon-page.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/styles/font-awsome.min.css')}}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

    <!-- You can change the theme colors from here -->
    <link href="{{ asset('assets/styles/default.css')}}" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header card-no-border fix-sidebar">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{'dashboard'}}">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('/images/user.jpeg')}}" width="50" height="50"   alt="AIS" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="{{ asset('/images/user.jpeg')}}" alt="Dashboard" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="" alt="MS" class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="" class="light-logo" alt="MS" /></span>
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                                href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item hidden-xs-down search-box"> <a
                                class="nav-link hidden-sm-down waves-effect waves-dark" href="javascript:void(0)"><i
                                    class="fa fa-search"></i></a>
                            <form class="app-search">
                                <input type="text" class="form-control" placeholder="Search & enter"> <a
                                    class="srh-btn"><i class="fa fa-times"></i></a> </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href=""
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="{{ asset('/images/user.jpeg')}}" alt="user" class="" />
                                <span class="hidden-md-down">{{ Auth::user()->name }} &nbsp;</span> </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a href="{{route('logout')}}">Logout</a> 
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="{{url('/dashboard')}}" aria-expanded="false"><i
                                    class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="" aria-expanded="true"><i
                                    class="fa fa-user-circle-o"></i><span class="hide-menu">Students</span></a>
                                    <ul>
                                        <li><a href="{{ route('students.create') }}">Add Student</a></li>
                                        <li><a href="{{ route('search') }}">Search Student</a></li>
                                        <li><a href="{{ route('search-class') }}"> Class Students</a></li>
                                        <li><a href="{{ route('view-students') }}">View All Students</a></li>
                                        <li><a href="{{url('/students')}}" > Students Registered</a></li>
                                    </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i
                            class="fa fa-smile-o"></i><span class="hide-menu">Payments</span></a>
                            <ul>
                               
                                <li><a href="{{ route('payments.create') }}">Add Student payment</a></li>
                                <li><a href="{{url('/payments')}}">Search payment</a></li>
                                <li><a href="{{route('class_payments_index')}}">View class payments</a></li>
                                <li><a href="{{route('all_payments')}}">View all payments</a></li>
                                
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('/results')}}" aria-expanded="false"><i
                            class="fa fa-table"></i><span class="hide-menu">Results</span></a>
                            <ul>
                                <li><a href="{{url('/results')}}">Submit Result</a></li>
                                <li><a href="{{route('result-view')}}">View Result</a></li>
                                <li><a href="{{route('search-class-result')}}">Class Result</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="" aria-expanded="false"><i
                            class="fa fa-book"></i><span class="hide-menu">Subjects</span></a>
                            <ul>
                                <li><a href="{{route('subjects.create')}}">Add Subject</a></li>
                                <li><a href="{{route('subjects.index')}}">View Subject</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{url('/fees')}}" aria-expanded="false"><i
                                    class="fa fa-money"></i><span class="hide-menu">Fees</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="{{route('register_user')}}" aria-expanded="false"><i
                                    class="fa fa-globe"></i><span class="hide-menu">Register User</span></a>
                        </li>             
                    </ul>
                    <div class="text-center mt-4">
                        <a href=" {{'dashboard'}}"
                            class="btn waves-effect waves-light btn-info hidden-md-down text-white"> aism.com</a>
                    </div>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h3 class="text-themecolor">Alven International School MS</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Moto:</a></li>
                            <li class="breadcrumb-item active">Knowledge and Determination</li>
                        </ol>
                    </div>
                    
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2022 AISMS by Zx3 Tech</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('assets/styles/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{('assets/styles/bootstrap.bundle.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{('assets/styles/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{('assets/styles/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{('assets/styles/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{('assets/styles/custom.min.js')}}"></script>
</body>

</html>