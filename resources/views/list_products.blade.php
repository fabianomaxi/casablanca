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
                                    <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Sistema ERP</h4>
                                        <p class="card-title-desc">Gestão de Equipamentos</p>

                                        <div class="w-50">
                                            <form name="drmBusca" id="frmNovo" action="/product" method="post">
                                            @csrf
                                            </form>
                                            <form name="drmBusca" id="frmbusca" action="/products" method="get">
                                            @csrf
                                            <div class="hstack gap-3">
                                                
                                                    <input required="required" class="form-control me-auto" type="text" placeholder="Digite sua busca" name="busca" id="busca" aria-label="Digite sua busca">
                                                    <button type="submit" class="btn btn-secondary">Buscar</button>
                                                    <div class="vr"></div>
                                                    <button type="button" onclick="javascript:$('#frmNovo').submit()" class="btn btn-outline-danger">Novo</button>
                                                
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
        
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th>Nome do Equipamentos</th>
                                                    <th>Serie</th>
                                                    <th>Fabricantes</th>
                                                    <th>Usuário</th>
                                                    <th>Etiquetas</th>
                                                    <th colspan="3">Ações</th>
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

                                                    </td>
                                                    <td>
                                                            <span class="table-remove"><button type="button"
                                                                class="btn btn-danger btn-rounded waves-effect waves-light" onclick="javascript:del( {{$d->id_products}} )">Deletar</button></span>

                                                    </td>
                                                    <td>
                                                               <span class="table-remove"><button type="button" onclick="botaoMovimentacao({{$d->id_products}})"
                                                                class="btn btn-info btn-rounded waves-effect waves-light">Mov.</button></span>

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

    <script>
    
        function botaoMovimentacao( id ){
            $.ajax({
                url: "/show_mov",
                type: "get",
                data: {id: id},
                success: function(response){

                    $('#dataMov').html(response)
                    $('#movimentacoes').modal('show');
                }

                
            });
        }
    
    </script>

    @include('modal_movimentacoes')

    </body>

</html>
