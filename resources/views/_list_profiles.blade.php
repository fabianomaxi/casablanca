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
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <img src="{{URL::to('/')}}/images/logo.png" class="img-fluid" alt="">
               <span>CBOn</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
                  </div>
            </div>
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
                              <h4 class="card-title">Gestão de Perfis</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success"><i
                                 class="ri-add-fill"><a href="/profile"><span class="pl-1">Novo Cadastrto</span></a></i>
                              </button>
                              </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                                 <thead>
                                    <tr>
                                       <th>Nome do Perfil</th>
                                       <th>Descrição</th>
                                       <th>Usuário</th>
                                       <th>Ações</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    
                                 @foreach( $data as $d )


                                    <tr>
                                       <td contenteditable="true">{{$d->name}}</td>
                                       <td contenteditable="true">{{$d->description}}</td>
                                       <td contenteditable="true">{{$d->user->name}}</td>

                                       
                                       <td>
                                          <span class="table-remove"><button type="button" onclick="javascript:window.location='/profiles/{{$d->id_profile}}'"
                                             class="btn iq-bg-primary btn-rounded btn-sm my-0">Editar</button></span>

                                             <span class="table-remove"><button type="button"
                                                class="btn iq-bg-danger btn-rounded btn-sm my-0" onclick="javascript:del( {{$d->id_profile}} )">Deletar</button></span>

                                                <span class="table-remove"><button type="button" onclick="botaoPerfil({{$d->id_profile}})"
                                                class="btn iq-bg-primary btn-rounded btn-sm my-0">Módulos permitidos</button></span>

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
         window.location = '/profiles/delete/' + id ;
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

      <script>

         function botaoPerfil(id){
            
            $.post( "/show_perfil", { id:id, _token: "{{ csrf_token() }}" })
               .done(function( data ) {
               $("#dataPerfil").html(data);
               $("#modulos_permitidos").modal("show");
            }, 'json');

         }

      </script>

      @include('modal_perfil')

   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/table-editable.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:27:45 GMT -->
</html>