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
                              <h4 class="card-title">Gestão de Etiquetas</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form action="/labels" method="post" id="frmCadastro">
                           <input type="hidden" name="id" id="id" value="{{@$data->id_labels}}">
                                @csrf
                              <div class="form-row">
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

                                    @foreach( $stock as $st )
                                       <option value="{{$st->id_stock_locations}}" {{(@$data->id_stock_locations == $st->id_stock_locations) ? 'selected' : ''}}>{{$st->name}}</option>
                                    @endforeach

                                 </select>
                             </div>
                          </div>

                          <div class="form-row" style="padding-top: 10px;">
                              <div class="col">
                                <button type="submit" class="btn btn-primary">Gravar Dados</button>
                              </div>

                              <div>
                                  <a href="/labels">
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
   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/form-layout.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:27:45 GMT -->
</html>