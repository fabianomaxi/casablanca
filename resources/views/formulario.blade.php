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
                                        <h5 class="card-title">Cadastro de {{$return['titulo']}}</h5><br>
                                        <form action="/{{ $return['pageAction'] }}/save" method="post" id="frmCadastro">
                                            <input type="hidden" name="id" id="id" value="{{@$return['dados'][0]->$id}}">
                                                @csrf
                                            <div class="form-group row">

                                            @foreach (@$return['camposForm'] as $key => $campos)

                                                @if( @$campos['type'] == 'select' )
                                                    <div class="col-sm-6">
                                                        <label for="email">{{@$campos['name']}} {{(! empty(@$campos['required']) ? '*' : '')}} </label>

                                                        <select class="form-control" name="{{$key}}" {{@$campos['required']}}>
                                                            <option value="">Selecione</option> 
                                                            @foreach( @$campos['values'] as $values )
                                                                <option value="{{$values[@$campos['id_values']]}}">{{$values[@$campos['name_values']]}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                @elseif( @$campos['type'] == 'textarea' )
                                                    <div class="col-sm-6">
                                                        <label for="email">{{@$campos['name']}} {{(! empty(@$campos['required']) ? '*' : '')}}</label>
                                                        <textarea  {{@$campos['required']}} type="{{@$campos['type']}}"  class="form-control" name="{{$key}}" rows="5">{{@$return['dados'][0]->$key}}</textarea>
                                                    </div>
                                                @else
                                                    <div class="col-sm-6">
                                                        <label for="email">{{@$campos['name']}} {{(! empty(@$campos['required']) ? '*' : '')}}</label>
                                                            <a href="javascript: return false;" onclick="javascript:$('#{{@$campos['modal_id']}}').modal('show')" style="display: {{(empty(@$campos['modal_upload']) ? 'none;' : '')}} ">
                                                                <i class="mdi mdi-cloud-upload" style="color:red; font-size:20px;"></i>
                                                            </a>
                                                        <input  {{@$campos['required']}} {{@$campos['disabled']}} type="{{@$campos['type']}}" value="{{( ! empty(@$campos['values']) ? @$campos['values'] :  @$return['dados'][0]->$key )}}" class="form-control" name="{{$key}}">
                                                    </div>
                                                @endif
                                            @endforeach
                                            <!--
                                                <div class="col">
                                                    <label for="email">Número(única etiqueta)</label>
                                                    <input type="text" value="{{@$data->name}}" class="form-control"  placeholder="Número" name="name">
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
                                                    <input type="text" value="" class="form-control"  placeholder="Número Inicial" name="start">
                                                </div>
                                                
                                                <div class="col">
                                                <label for="email">Número Final(caso grupo de etiquetas)</label>
                                                <input type="text" value="" class="form-control"  placeholder="Número Final" name="end">
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
-->
                                            <div class="form-row" style="padding-top: 10px;">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary">Gravar Dados</button>
                                                <a href="/{{$return['pageAction']}}">
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
                
                @include('novo-painel/footer')
                
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        @if( is_array(@$return['modals']) )
            @foreach(@$return['modals'] as $modal)
                @include('includes/upload_prestador')
            @endforeach
        @endif
       

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
