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

            
            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                          <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{URL::to('/')}}/assets-novo/images/logo-dark.png" alt="logo-sm-dark" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{URL::to('/')}}/assets-novo/images/logo-sm-dark.png" alt="logo-dark" height="25">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{URL::to('/')}}/assets-novo/images/logo-light.png" alt="logo-sm-light" height="24">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{URL::to('/')}}/assets-novo/images/logo-sm-light.png" alt="logo-light" height="25">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn" id="vertical-menu-btn">
                            <i class="ri-menu-2-line align-middle"></i>
                        </button>
            
                      <!-- start page title -->
                      <div class="page-title-box align-self-center d-none d-md-block">
                        <h4 class="page-title mb-0">Listagem</h4>
                      </div>
                      <!-- end page title -->
                    </div>

                    <div class="d-flex">

                         <!-- App Search-->
                         <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="ri-search-line"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-search-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="mb-3 m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ...">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="ri-search-line"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-sm-inline-block">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="" src="{{URL::to('/')}}/assets-novo/images/flags/us.jpg" alt="Header Language" height="16">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{URL::to('/')}}/assets-novo/images/flags/spain.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Spanish</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{URL::to('/')}}/assets-novo/images/flags/germany.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">German</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{URL::to('/')}}/assets-novo/images/flags/italy.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Italian</span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{URL::to('/')}}/assets-novo/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ri-apps-2-line"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                                <div class="px-lg-2">
                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets-novo/images/brands/github.png" alt="Github">
                                                <span>GitHub</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets-novo/images/brands/bitbucket.png" alt="bitbucket">
                                                <span>Bitbucket</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets-novo/images/brands/dribbble.png" alt="dribbble">
                                                <span>Dribbble</span>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row g-0">
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets-novo/images/brands/dropbox.png" alt="dropbox">
                                                <span>Dropbox</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets-novo/images/brands/mail_chimp.png" alt="mail_chimp">
                                                <span>Mail Chimp</span>
                                            </a>
                                        </div>
                                        <div class="col">
                                            <a class="dropdown-icon-item" href="#">
                                                <img src="{{URL::to('/')}}/assets-novo/images/brands/slack.png" alt="slack">
                                                <span>Slack</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="ri-fullscreen-line"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                  data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ri-notification-3-line"></i>
                                <span class="noti-dot"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                    <i class="ri-shopping-cart-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{URL::to('/')}}/assets-novo/images/users/avatar-3.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It will seem like simplified English.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="avatar-xs me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-16">
                                                    <i class="ri-checkbox-circle-line"></i>
                                                </span>
                                            </div>
                                            <div class="flex-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">If several languages coalesce the grammar</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 3 min ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <img src="{{URL::to('/')}}/assets-novo/images/users/avatar-4.jpg"
                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="flex-1">
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                    <p class="mb-0"><i class="mdi mdi-clock-outline"></i> 1 hours ago</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="ri-settings-2-line"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                 <!-- LOGO -->
                 <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-sm-dark.png" alt="logo-sm-dark" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-dark.png" alt="logo-dark" height="22">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-sm-light.png" alt="logo-sm-light" height="24">
                        </span>
                        <span class="logo-lg">
                            <img src="{{URL::to('/')}}/assets-novo/images/logo-light.png" alt="logo-light" height="22">
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
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Listagem de Equipamentos</h4>
                                        <p class="card-title-desc">
                                            Confira abaixo a lista de equipamentos existentes na Casablanca Online.
                                        </p>
        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th>Nome do Equipamentos</th>
                                                    <th>Serie</th>
                                                    <th>Fabricantes</th>
                                                    <th>Usuário</th>
                                                    <th>Etiquetas</th>
                                                    <th>Ações</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach( $data as $d )


                                                    <tr>
                                                    <td contenteditable="true">{{$d->name}}</td>
                                                    <td contenteditable="true">{{$d->serie}}</td>
                                                    <td contenteditable="true">{{@$manufacturer[$d->id_manufacturer]}}</td>
                                                    <td contenteditable="true">{{$d->user->name}}</td>
                                                    <td contenteditable="true">{{@$labels[$d->id_labels]}}</td>

                                                    <td>
                                                        <span class="table-remove"><button type="button" onclick="javascript:window.location='/products/{{$d->id_products}}'"
                                                            class="btn btn-primary btn-rounded waves-effect waves-light">Editar</button></span>

                                                            <span class="table-remove"><button type="button"
                                                                class="btn btn-danger btn-rounded waves-effect waves-light" onclick="javascript:del( {{$d->id_products}} )">Deletar</button></span>

                                                                <span class="table-remove"><button type="button" onclick="botaoMovimentacao({{$d->id_products}})"
                                                                class="btn btn-info btn-rounded waves-effect waves-light">Movimentações</button></span>

                                                    </td>
                                                    </tr>

                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Tocly.
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                
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

        <script src="{{URL::to('/')}}/assets-novo/js/app.js"></script>

    </body>

</html>
