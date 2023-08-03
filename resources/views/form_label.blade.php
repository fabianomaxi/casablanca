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
                                        <h5 class="card-title">Cadastro de Fabricantes</h5><br>
                                        <form action="/labels" method="post" id="frmCadastro">
                           <input type="hidden" name="id" id="id" value="{{@$data->id_labels}}">
                                @csrf
                              <div class="form-row">
                                 <div class="col">
                                 <label for="email">Número(única etiqueta)</label>
                                    <input onblur="validaLote(this.value)" type="text" value="{{@$data->name}}" class="form-control"  placeholder="Número" name="name">
                                 </div>
                                 
                                 <div class="col">
                                 <label for="email">Status</label>
                                    <select class="form-control" id="exampleFormControlSelect1" required name="status">
                                       <option value="">Status</option>
                                       <option value="1" {{(@$data->status == 1 || @$data->status == '') ? 'selected' : ''}}>Ativo</option>
                                       <option value="0" {{(@$data->status == '0') ? 'selected' : ''}}>Inativo</option>
                                    </select>
                                 </div>
                              </div>
                              <br>
                              <div class="form-row">
                                 <div class="col">
                                 <label for="email">Número Inicial(caso grupo de etiquetas)</label>
                                    <input type="text" value="" class="form-control"  placeholder="Número Inicial" name="start" id="start">
                                 </div>
                                 
                                 <div class="col">
                                 <label for="email">Número Final(caso grupo de etiquetas)</label>
                                 <input type="text" value="" class="form-control"  placeholder="Número Final" name="end" id="end">
                                 </div>
                              </div>
                              <br>

                            <div class="form-row">
                              <div class="col">
                              <label for="email">Ultilizado</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="used">
                                    <option value="">Ultilizado</option>
                                    <option value="1" {{(@$data->used == 1) ? 'selected' : ''}}>Sim</option>
                                    <option value="0" {{(@$data->used == 0) ? 'selected' : ''}}>Não</option>
                                 </select>
                             </div>

                             <div class="col">
                              <label for="email">Local de Estoque</label>
                                <select class="form-control" id="id_stock_locations" required name="id_stock_locations">
                                    <option value="">Local de Estoque</option>

                                    @foreach( $stock as $st )
                                       <option value="{{$st->id_stock_locations}}" {{(@$data->id_stock_locations == $st->id_stock_locations) ? 'selected' : ''}}>{{$st->name}}</option>
                                    @endforeach

                                 </select>
                             </div>
                          </div>

                          <div class="form-row" style="padding-top: 10px;">
                              <div class="col">
                                <button type="submit" class="btn btn-primary">Gravar Dados</button>
                                <a href="/labels">
                                 <button type="button" class="btn btn-primary">Voltar</button>   
                                 </a>

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

        <script>
            function validaLote(valor) {
                if( valor != '' ){
                    $('#start').prop( "disabled", true );
                    $('#end').prop( "disabled", true );
                }else {
                    $('#start').prop( "disabled", false );
                    $('#end').prop( "disabled", false );                    
                }
            }
        </script>

    </body>

</html>
