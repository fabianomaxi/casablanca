<!doctype html>
<html lang="pt_br">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Casa Blanca Online - Sistema Unificado</title>
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
        <!-- Sign in Start -->
        <section class="sign-in-page">
            <div class="container sign-in-page-bg mt-5 p-0">
                <div class="row no-gutters">
                    <div class="col-md-6 text-center">
                        <div class="sign-in-detail text-white">
                            <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true" data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1" data-items-mobile-sm="1" data-margin="0">
                                <div class="item">
                                    <img src="{{URL::to('/')}}/images/login/1.png" class="img-fluid mb-4" alt="logo">
                                    <h4 class="mb-1 text-white">Sistema Unificado CasaBlanca Online</h4>
                                    <p>Informe ao lado suas credenciais para acessar o sistema.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 position-relative">
                        <div class="sign-in-from">
                            <h1 class="mb-0">Acesso ao sistema</h1>
                            <p>Informe abaixo as credenciais de acesso.</p>
                            <form class="mt-4" method="post" id="frm_login" name="frm_login" action="/valida-login">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">E-mail de acesso</label>
                                    <input type="email" class="form-control mb-0" id="email" name="email" required placeholder="Qual seu email?">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Senha de Acesso</label>
                                    <input type="password" class="form-control mb-0" id="password" name="password" required placeholder="Sua Senha">
                                </div>
                                <div class="d-inline-block w-100">
                                    <button type="submit" name="btn-acessar" id="btn-acessar" class="btn btn-primary float-right">Acessar Painel</button>
                                </div>
                                <div class="sign-info">
                                    <span class="dark-color d-inline-block line-height-2">Esqueceu sua senha? <a onclick="botaoNovaSenha()" >Solicite aqui</a></span>
                                    <ul class="iq-social-media">
                                        <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                        <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                        <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Sign in END -->
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
      <!-- Chart Custom JavaScript -->
      <script src="{{URL::to('/')}}/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{{URL::to('/')}}/js/custom.js"></script>
      <!-- Js: validação do login -->
      <script src="public/js/login.js"></script>

        <script>

            function botaoNovaSenha() {
                
                .done(function( data ) {
               $("#dataNovaSenha").html(data);
               $("#nova_senha").modal("show");
            }, 'json');

            }

        </script>

        @include('modal_nova_senha')

   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:27:49 GMT -->
</html>