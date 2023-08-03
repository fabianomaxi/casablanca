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

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Listagem de {{$return['titulo']}}</h4>
                                        <p class="card-title-desc">Gestão de {{$return['titulo']}}</p>

                                        <div class="w-50">
                                            <form name="drmBusca" id="frmNovo" action="/{{ $return['pageAction'] }}" method="post">
                                            @csrf
                                            </form>
                                            <form name="drmBusca" id="frmbusca" action="/{{ $return['pageAction'] }}" method="get">
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
                                @foreach (@$return['campos'] as $campos)
                                    <th>@lang(str_replace('ó','Ó',str_replace('ç','Ç',strtoupper($campos))))</th>
                                @endforeach
                                <th style="min-width: 200px;text-align:center;">@lang('AÇÕES')</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if( ! empty($return['dados']) &&  ! empty($return['campos']))
                                @foreach ($return['dados'] as $dado)
                                    <tr id="row">
                                        @foreach ($return['campos'] as $key => $campos)

                                            @if( ! empty( @$return['valores_campos'][$campos] ) )
                                                <td>{{ @$return['valores_campos'][$campos][$dado->$key] }}</td>    
                                            @else
                                                <td>{{ $dado->$key }}</td>
                                            @endif
                                        @endforeach

                                        <td style="min-width: 200px;text-align:center;">


                                            @if( ! empty( @$return['buttons'] ) )
                                                @foreach( @$return['buttons'] as $buttons )
                                                <button type="button" class="btn btn-primary btn-elevate btn-pill btn-sm"
                                                    onclick="javascript:window.location='/{{ $return['pageAction'] }}/{{ $dado->$id }}'">@lang('ANALISAR')</button>
                                                @endforeach
                                            @endif

                                            <button type="button" class="btn btn-info btn-elevate btn-pill btn-sm"
                                                    onclick="javascript:window.location='/{{ $return['pageAction'] }}/{{ $dado->$id }}'">@lang('EDITAR')</button>
                                            @if( ! empty( $return['duplicate'] ) )
                                                <button type="button"
                                                        class="btn btn-warning btn-elevate btn-pill btn-sm"
                                                        onclick="javascript:if( confirm('Deseja mesmo duplicar este Modelo?') ){ window.location='/duplicate_codex_models/{{ $dado->$id }}'}">@lang('DUPLICAR')</button>
                                            @endif
                                            <button type="button" class="btn btn-danger btn-elevate btn-pill btn-sm"
                                                    onclick="javascript:
                                                        $('#id').val('{{ $dado->$id }}');$('#delate_div').modal('show')">@lang('EXCLUIR')</button>
                                        </td>

                                        @if( ! empty( $return['duplicate'] ) )
                                            <td style="text-align: right;">
                                                <button type="button"
                                                        class="btn btn-warning btn-elevate btn-pill btn-sm"
                                                        onclick="javascript:if( confirm('Deseja mesmo duplicar este Modelo?') ){ window.location='/duplicate_codex_models/{{ $dado->$id }}'}">@lang('DUPLICAR')</button>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            @endif
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
                
                @include('novo-painel/footer')
                
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
