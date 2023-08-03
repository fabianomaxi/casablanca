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
        <link href="{{URL::to('/assets-novo/css')}}/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::to('/assets-novo/css')}}/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::to('/assets-novo/css')}}/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



    </head>

    <body data-sidebar="colored">
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            
            @include('header')

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

                <div class="dropdown px-3 sidebar-user sidebar-user-info">
                    <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                    <img src="{{URL::to('/')}}/assets-novo/images/users/avatar-2.jpg" class="img-fluid header-profile-user rounded-circle" alt="">
                            </div>

                            <div class="flex-grow-1 ms-2 text-start">
                                <span class="ms-1 fw-medium user-name-text">Steven Deese</span>
                            </div>

                            <div class="flex-shrink-0 text-end">
                                <i class="mdi mdi-dots-vertical font-size-16"></i>
                            </div>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <!-- item-->
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="pages-faq.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                        <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    </div>
                </div>

            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        
                        
                        

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Cadastro de Módulos</h5><br>
                                        <form action="/modulesSave" method="post" id="frmCadastro">
                           <input type="hidden" name="id" id="id" value="{{@$data->id_module}}">
                                @csrf
                              <div class="form-row">
                                 <div class="col">
                                 <label for="email">Nome</label>
                                    <input type="text" value="{{@$data->name}}" class="form-control" required placeholder="Nome" name="name">
                                 </div>
                                 <div class="col">
                                 <label for="email">Rota</label>
                                    <input type="text" value="{{@$data->slug}}" class="form-control"  placeholder="Rota" name="slug" >
                                 </div>
                              </div>
                              <br>

                            <div class="form-row">
                              <div class="col">
                              <label for="email">Status</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="status">
                                    <option value="">Status</option>
                                    <option value="1" {{(@$data->status == 1) ? 'selected' : ''}}>Ativo</option>
                                    <option value="0" {{(@$data->status == 0) ? 'selected' : ''}}>Inativo</option>
                                 </select>
                             </div>
                             <div class="col">
                             <label for="email">Menu Pai</label>
                                <select class="form-control" id="main_module" name="main_module">
                                    <option value="">Menu Pai</option>
                                    @if ( ! empty($modules_main) )
                                       @foreach( $modules_main as $module_main )
                                          <option value="{{$module_main->id_module}}" {{(@$data->main_module == $module_main->id_module) ? 'selected' : ''}}>
                                             {{$module_main->name}}
                                          </option>
                                       @endforeach
                                    @endif
                                 </select>
                             </div>

                             <div class="col">
                             <label for="email">Módulo do Sistema</label>
                                <select class="form-control" id="module_departament" name="module_departament">
                                    <option value="">Módulo do Sistema</option>
                                    @if ( ! empty($moduleDepartament) )
                                       @foreach( $moduleDepartament as $moduleDep )
                                          <option value="{{$moduleDep->id_module_departament}}" {{(@$data->module_departament == $moduleDep->id_module_departament) ? 'selected' : ''}}>
                                             {{$moduleDep->name}}
                                          </option>
                                       @endforeach
                                    @endif
                                 </select>
                             </div>

                            </div>

                            <div class="form-row" style="padding-top: 10px;">
                              <div class="col">
                                <button type="button" onclick="javascript:$('#frmCadastro').submit()" class="btn btn-primary">Gravar Dados</button>
                                <a href="/modules">
                                 <button type="button" class="btn btn-primary">Voltar</button>   
                                 </a>
                              </div>

                              <div>
                                 
                              </div>

                            </div>
                           </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                       
                        <!-- end row -->
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                
                @include('footer')
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

       

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

        <!-- bs custom file input plugin -->
        <script src="{{URL::to('/')}}/assets-novo/libs/bs-custom-file-input/bs-custom-file-input.min.js"></script>

        <script src="{{URL::to('/')}}/assets-novo/js/pages/form-element.init.js"></script>

        <script src="{{URL::to('/')}}/assets-novo/js/app.js"></script>

    </body>

</html>
