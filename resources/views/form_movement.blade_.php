<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Sistema unificado casablanca</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{URL::to('/')}}/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{URL::to('/')}}/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{URL::to('/')}}/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{URL::to('/')}}/css/responsive.css">

      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


   </head>
   <body>
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar" style="background-color: #811F2C !important;">
       
            @include('sidebar')
         </div>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
         @include('top')
            <div class="container-fluid">
               <div class="row">
                  
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Movimentações</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
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
                                 <label for="name">Profissional responsavel</label>
                                 <input type="text" value="{{@$data->responsible_professional}}" class="form-control" required placeholder="Profissional responsavel" name="responsible_professional">
                              </div>
                                 
                             <div class="col">
                                    <label for="name">Nome da empresa saida</label>
                                    <input type="text" value="{{@$data->name_exit}}" class="form-control" required placeholder="Nome da empresa saida" name="name_exit">
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
                              </div>

                              <div>
                                  <a href="/movements">
                                 <button type="button" class="btn btn-primary">Voltar</button>   
                                 </a>
                              </div>

                            </div>
                           </form>
                        </div>
                     </div>
                     
    
                  </div>
               </div>
            </div>
            <!-- Footer -->
            @include('footer')
            <!-- Footer END -->
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{{URL::to('/')}}/js/jquery.min.js"></script>
      <script src="{{URL::to('/')}}/js/popper.min.js"></script>
      <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="{{URL::to('/')}}/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="{{URL::to('/')}}/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="{{URL::to('/')}}/js/waypoints.min.js"></script>
      <script src="{{URL::to('/')}}/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="{{URL::to('/')}}/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{URL::to('/')}}/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="{{URL::to('/')}}/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="{{URL::to('/')}}/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{URL::to('/')}}/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{URL::to('/')}}/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{URL::to('/')}}/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="{{URL::to('/')}}/js/lottie.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{URL::to('/')}}/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{{URL::to('/')}}/js/custom.js"></script>
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