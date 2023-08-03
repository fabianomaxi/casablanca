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
                              <h4 class="card-title">Log de Usuários</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form action="/user_logs" method="post" id="frmCadastro">
                              <input type="hidden" name="id" id="id" value="{{@$data->id_user_log}}">
                                @csrf
                              <div class="form-row">
                                 <div class="col">
                                 <label for="email">Data</label>
                                    <input type="date" value="{{@$data->date}}" class="form-control" required placeholder="data" name="date">
                                 </div>
                                 <div class="col">
                                 <label for="email">Ação</label>
                                    <input type="action"  value="{{@$data->action}}" class="form-control" required placeholder="action" name="action">
                                 </div>
                                 
                                 <div class="col">
                                 <label for="email">Modificação</label>
                                    <input type="data_json" value="{{@$data->data_json}}" class="form-control" required placeholder="data_json" name="data_json">
                                 </div> 
    
                              </div>
                              <br>

                            <div class="form-row">

                             <div class="col">
                             <label for="email">Usuarios</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="id_user">
                                    <option value="">Usuario</option>
                                    <option value="1" {{(@$data->id_user == 1) ? 'selected' : ''}}>Fabiano</option>
                                    <option value="3" {{(@$data->id_user == 12) ? 'selected' : ''}}>Carlos</option>
                                 </select>
                             </div>

                             <div class="col">
                             <label for="email">Modulo</label>
                                <select class="form-control" id="exampleFormControlSelect1" required name="id_module">
                                    <option value="">Modulo</option>
                                    <option value="2" {{(@$data->id_module == 2) ? 'selected' : ''}}>Usuarios</option>
                                    <option value="3" {{(@$data->id_module == 3) ? 'selected' : ''}}>Modulos</option>
                                 </select>
                             </div>
                            </div>

                           
                        <div class="form-row" style="padding-top: 10px;">
                              <div class="col">
                                <button type="submit" class="btn btn-primary">Gravar dados</button>
                              </div>

                              <div>
                                  <a href="/user_logs">
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