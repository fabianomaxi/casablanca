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

                        <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Listagem de Movimentações</h4>
                                        <p class="card-title-desc">Gestão de Movimentações</p>

                                        <div class="w-50">
                                            <form name="drmBusca" id="frmNovo" action="/movement" method="post">
                                            @csrf
                                            </form>
                                            <form name="drmBusca" id="frmbusca" action="/movements" method="get">
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
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="table-responsive">
                                        <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                    <tr>
                                       <th>Data</th>
                                       <th style="width: 250px;">Observação</th>
                                       <th style="width: 250px;">Equipamentos</th>
                                       <th style="width: 50px;">Série</th>
                                       <th>Saida</th>
                                       <th>Recebimento</th>
                                       <th>Ações</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                 @foreach( $data as $d )


                                    <tr>
                                       <td contenteditable="true">{{date('d/m/Y',strtotime($d->date))}}</td>
                                       <td contenteditable="true">{{substr($d->description,0,50)}}...</td>
                                       <td contenteditable="true">{{$products[$d->id_products]}}</td>
                                       <td contenteditable="true">{{$prodSeries[$d->id_products]}}</td>
                                       <td contenteditable="true">{{@$stockLocations[$d->id_stock_locations_from]}}</td>
                                       <td contenteditable="true">{{@$stockLocations[$d->id_stock_locations_to]}}</td>
                                         
                                       <td>
                                          <span class="table-remove"><button type="button" onclick="javascript:window.location='/movements/{{$d->id_movements}}'"
                                             class="btn btn-primary btn-rounded waves-effect waves-light">Editar</button></span>

                                             <span class="table-remove"><button type="button"
                                                class="btn btn-danger btn-rounded waves-effect waves-light" onclick="javascript:del( {{$d->id_movements}} )">Deletar</button></span>

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

        <script src="{{URL::to('/')}}/assets-novo/js/app.js"></script>


        <script>

function  del( id ) {

   if (confirm("Deseja mesmo delatar o registro?") == true) {
      window.location = '/labels/delete/' + id ;
   }

}

</script>

    </body>

</html>