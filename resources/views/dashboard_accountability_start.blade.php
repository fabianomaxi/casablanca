<!doctype html>
<html lang="pt_br">

<head>
        
        <meta charset="utf-8" />
        <title>ERP Casablanca Online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('/')}}/assets-novo/images/favicon.ico">

        <!-- plugin css -->
        <link href="{{URL::to('/')}}/assets-novo/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

        <!-- Layout Js -->
        <script src="{{URL::to('/')}}/assets-novo/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{URL::to('/')}}/assets-novo/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::to('/')}}/assets-novo/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::to('/')}}/assets-novo/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



    </head>

    <body data-sidebar="colored">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            
            @include('header');

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">
                 <!-- LOGO -->
                 <div class="navbar-brand-box">
                    <a href="/accountability" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-sm-dark.png" alt="logo-sm-dark" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-dark.png" alt="logo-dark" height="22">
                        </span>
                    </a>

                    <a href="/accountability" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-sm-light.png" alt="logo-sm-light" >
                        </span>
                        <span class="logo-lg">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-light.png" alt="logo-light" >
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                    <i class="ri-menu-2-line align-middle"></i>
                </button>

                @include('novo-painel/sidebar')
                

            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                    <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center" style="cursor: pointer;" onclick="javascript:window.location='/new-accountability'">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-primary" d="M10,6V5h4V6h2V5a2.00229,2.00229,0,0,0-2-2H10A2.00229,2.00229,0,0,0,8,5V6Z"></path><path class="uim-quaternary" d="M9 15a.99974.99974 0 0 1-1-1V12a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 9 15zM15 15a.99974.99974 0 0 1-1-1V12a1 1 0 0 1 2 0v2A.99974.99974 0 0 1 15 15z"></path><path class="uim-tertiary" d="M20,6H4A2,2,0,0,0,2,8v3a2,2,0,0,0,2,2H8V12a1,1,0,0,1,2,0v1h4V12a1,1,0,0,1,2,0v1h4a2,2,0,0,0,2-2V8A2,2,0,0,0,20,6Z"></path><path class="uim-primary" d="M20,13H16v1a1,1,0,0,1-2,0V13H10v1a1,1,0,0,1-2,0V13H4a2,2,0,0,1-2-2v8a2,2,0,0,0,2,2H20a2,2,0,0,0,2-2V11A2,2,0,0,1,20,13Z"></path></svg></span>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Nova Solicitação</p>
                                                <p class="text-muted mb-0 text-truncate">Cadastre seu Pedido</p>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start" style="display: none;">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center" style="cursor: pointer;" onclick="javascript:window.location='/my-accountability'">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <span class="uim-svg" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="1em"><path class="uim-quaternary" d="M12,14.19531a1.00211,1.00211,0,0,1-.5-.13379l-9-5.19726a1.00032,1.00032,0,0,1,0-1.73242l9-5.19336a1.00435,1.00435,0,0,1,1,0l9,5.19336a1.00032,1.00032,0,0,1,0,1.73242l-9,5.19726A1.00211,1.00211,0,0,1,12,14.19531Z"></path><path class="uim-tertiary" d="M21.5,11.13184,19.53589,9.99847,12.5,14.06152a1.0012,1.0012,0,0,1-1,0L4.46411,9.99847,2.5,11.13184a1.00032,1.00032,0,0,0,0,1.73242l9,5.19726a1.0012,1.0012,0,0,0,1,0l9-5.19726a1.00032,1.00032,0,0,0,0-1.73242Z"></path><path class="uim-primary" d="M21.5,15.13184l-1.96411-1.13337L12.5,18.06152a1.0012,1.0012,0,0,1-1,0L4.46411,13.99847,2.5,15.13184a1.00032,1.00032,0,0,0,0,1.73242l9,5.19726a1.0012,1.0012,0,0,0,1,0l9-5.19726a1.00032,1.00032,0,0,0,0-1.73242Z"></path></svg></span>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Minhas Solicitações</p>
                                                <p class="text-muted mb-0 text-truncate">Cadastre seu Pedido</p>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start" style="display: none;">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            

                            
                        </div>

                        

                    
                    

<!--
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-briefcase"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Earnings</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">34,123.20 <span class="text-muted font-size-16">USD</span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-success text-success font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-top-right"></i> 2.8% Increase</span> vs last month</p>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-layer-group"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Orders</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">63,234 <span class="text-muted font-size-16">NOU</span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-danger text-danger font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-bottom-left"></i> 7.8% Loss</span> vs last month</p>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-scenery"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Today Visitor</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">425,34 <span class="text-muted font-size-16">NOU</span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-success text-success font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-top-right"></i> 4.6% Growth</span> vs last month</p>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-md flex-shrink-0">
                                                <span class="avatar-title bg-subtle-primary text-primary rounded fs-2">
                                                    <i class="uim uim-airplay"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1 overflow-hidden ms-4">
                                                <p class="text-muted text-truncate font-size-15 mb-2"> Total Expense</p>
                                                <h3 class="fs-4 flex-grow-1 mb-3">26,482.46 <span class="text-muted font-size-16">USD</span></h3>
                                                <p class="text-muted mb-0 text-truncate"><span class="badge bg-subtle-success text-success font-size-12 fw-normal me-1"><i class="mdi mdi-arrow-top-right"></i> 23% Increase</span> vs last month</p>
                                            </div>
                                            <div class="flex-shrink-0 align-self-start">
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-icon border rounded-circle" href="#"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ri-more-2-fill text-muted font-size-16"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Yearly</a>
                                                        <a class="dropdown-item" href="#">Monthly</a>
                                                        <a class="dropdown-item" href="#">Weekly</a>
                                                        <a class="dropdown-item" href="#">Today</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex pb-0">
                                        <h4 class="card-title mb-0 flex-grow-1">Audiences Metrics</h4>
                                        <div>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                ALL
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                1M
                                            </button>
                                            <button type="button" class="btn btn-soft-secondary btn-sm">
                                                6M
                                            </button>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                1Y
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-xl-8 audiences-border">
                                                <div id="column-chart" class="apex-charts"></div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div id="donut-chart" class="apex-charts"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header border-0 align-items-center d-flex pb-1">
                                        <h4 class="card-title mb-0 flex-grow-1">Live Users By Country</h4>
                                        <div>
                                            <button type="button" class="btn btn-soft-primary btn-sm">
                                                Export Report
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div id="world-map-markers" style="height: 346px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       -->

                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
               
                @include('novo-painel/footer')
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{URL::to('/')}}/assets-novo/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{URL::to('/')}}/assets-novo/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="{{URL::to('/')}}/assets-novo/css/bootstrap-dark.min.css" data-appStyle="{{URL::to('/')}}/assets-novo/css/app-dark.min.html">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{URL::to('/')}}/assets-novo/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="layout-3">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input class="form-check-input theme-choice" type="checkbox" id="rtl-mode-switch" data-appStyle="{{URL::to('/')}}/assets-novo/css/app-rtl.min.css">
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>

            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{URL::to('/')}}/assets-novo/libs/jquery/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/simplebar/simplebar.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="{{URL::to('/')}}/assets-novo/release/v2.0.1/script/monochrome/bundle.js"></script>


        <!-- Vector map-->
        <script src="{{URL::to('/')}}/assets-novo/libs/jsvectormap/js/jsvectormap.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/jsvectormap/maps/world-merc.js"></script>

        <script src="{{URL::to('/')}}/assets-novo/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="{{URL::to('/')}}/assets-novo/js/app.js"></script>
    </body>


</html>