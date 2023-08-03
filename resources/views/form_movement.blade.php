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
                                        <h5 class="card-title">Cadastro de Fabricantes</h5><br>
                                        <form action="/movements" method="post" id="frmCadastro">
                           <input type="hidden" name="id" id="id" value="{{@$data->id_movements}}">
                                @csrf
                              <div class="form-row">
                                 <div class="col">
                                 <label for="email">Data</label>
                                    <input type="date" value="{{@date('Y-m-d',strtotime( (! empty($data->date)?$data->date:date('Y-m-d H:i:s')) ))}}"  class="form-control"  placeholder="Data" name="date">
                                 </div>

                                 <div class="col">
                             <label for="email">Equipamentos</label>
                                <select class="form-control select2" data-live-search="true" required name="id_products" style="display: block; width: 100%; padding: 0.375rem 0.75rem; font-size: 1rem; line-height: 1.5; color: #495057; background-color: #fff; background-clip: padding-box; border: 1px solid #ced4da; border-radius: 0.25rem; transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                    <option  value="" {{(@$data->id_products == 0) ? 'selected' : ''}}>Equipamentos</option>

                                    @foreach( $products as $product )
                                       <option  value="{{$product->id_products}}" {{(@$data->id_products == $product->id_products) ? 'selected' : ''}}>{{$product->name}} | Série: {{$product->serie}} | Etiqueta: {{@$labelsData[$product->id_labels]}} | Modelo: {{@$productModels[$product->id_product_models]}} </option>
                                    @endforeach

                                 </select>
                                 <!--
                                 <a href="#" onclick="botaoFiltrar()"><span class="dark-color d-inline-block line-height-2">Filtrar</a></span>
                                 -->
                             </div>

                              </div>

                              <br>
                              
                              <div class="form-row">
                                 
                                 <div class="col">
                                 <label for="email">Locais de saida</label>
                                    <select class="form-control" id="exampleFormControlSelect1" required name="id_stock_locations_from">
                                        <option value="">Locais de saida</option>

                                       @foreach( $stockLocations as $stockLocation )
                                           <option value="{{$stockLocation->id_stock_locations}}" {{(@$data->id_stock_locations_from == $stockLocation->id_stock_locations) ? 'selected' : ''}}>{{$stockLocation->name}}</option>
                                       @endforeach   
                                        
                                     </select>
                                </div>

                                <div class="col">
                                 <label for="email"
                                 >Locais de recebimento</label>
                                    <select class="form-control" id="exampleFormControlSelect1" required name="id_stock_locations_to">
                                        <option value="" {{(@$data->id_stock_locations_to == 0) ? 'selected' : ''}}>Local não cadastrado</option>
                                        
                                        @foreach( $stockLocations as $stockLocation )
                                           <option value="{{$stockLocation->id_stock_locations}}" {{(@$data->id_stock_locations_to == $stockLocation->id_stock_locations) ? 'selected' : ''}}>{{$stockLocation->name}}</option>
                                       @endforeach
                                        
                                     </select>
                                 </div>

                              </div>

                           <br>
                           <div class="form-row">
                              <div class="col">
                                 <label for="name">Profissional responsavel(Não cliente)</label>
                                 <input type="text" value="{{@$data->responsible_professional}}" class="form-control"  placeholder="Profissional responsavel" name="responsible_professional">
                              </div>
                                 
                             <div class="col">
                                    <label for="name">Nome da empresa saida(Não cliente)</label>
                                    <input type="text" value="{{@$data->name_exit}}" class="form-control"  placeholder="Nome da empresa saida" name="name_exit">
                                 </div>   
                           </div>

                              <br>
                              <div class="form-row">
                                 <div class="col">
                                 <label for="email">Descrição</label>
                                 <textarea rows="5" class="form-control" required placeholder="descrição" name="description">{{@$data->description}}</textarea>
                                 </div>
                            </div>

                            <div class="form-row" style="padding-top: 10px;">
                              <div class="col">
                                <button type="submit" class="btn btn-primary">Gravar Dados</button>
                                <a href="/movements">
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
         $('.select2').select2();
      </script>

      <script>

      function botaoFiltrar(id){
         
         $.post( "/show_filtrar", { id:id, _token: "{{ csrf_token() }}" })
            .done(function( data ) {
            $("#dataFiltrar").html(data);
            $("#filtrar").modal("show");
         }, 'json');

      }

      </script>

      @include('modal_filtrar')

    </body>

</html>
