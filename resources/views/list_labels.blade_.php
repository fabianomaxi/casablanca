<!doctype html>
<html lang="pt_br">
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
      <div class="wrapper" style="background-color: #811F2C !important;">
         <!-- Sidebar  -->
         <div class="iq-sidebar" style="background-color: #811F2C !important;">
   
            @include('sidebar')
         </div>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
         @include('top')
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Gestão de Etiquetas</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success"><i
                                 class="ri-add-fill"><a href="/label"><span class="pl-1">Novo Cadastrto</span></a></i>
                              </button>
                              </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                                 <thead>
                                    <tr>
                                       <th>Nome da Etiqueta</th>
                                       <th>usado</th>
                                       <th>Usuário</th>
                                       <th>Ações</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                 @foreach( $data as $d )


                                    <tr>
                                       <td contenteditable="true">{{$d->name}}</td>
                                       <td contenteditable="true">{{$used[$d->used]}}</td>
                                       <td contenteditable="true">{{$d->user->name}}</td>
                                       
                                       <td>
                                          <span class="table-remove"><button type="button" onclick="javascript:window.location='/labels/{{$d->id_labels}}'"
                                             class="btn iq-bg-primary btn-rounded btn-sm my-0">Editar</button></span>

                                             <span class="table-remove"><button type="button"
                                                class="btn iq-bg-danger btn-rounded btn-sm my-0" onclick="javascript:del( {{$d->id_labels}} )">Deletar</button></span>
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
            </div>
            <!-- Footer -->
            @include('footer')
            <!-- Footer END -->
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

   <script>

   function  del( id ) {

      if (confirm("Deseja mesmo delatar o registro?") == true) {
         window.location = '/labels/delete/' + id ;
      }
   
   }

   </script>




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

<!-- Mirrored from templates.iqonic.design/xray/html/table-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:27:45 GMT -->
</html>