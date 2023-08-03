<!doctype html>
<html lang="en">
   
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
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
         <div class="iq-sidebar" style="background-color: #089bab !important;">
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
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
                     <li class="active">
                        <a href="index.html" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Dashboard Almoxarifado</span></a>
                     </li>                     
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Administrativo</span></li>
                     <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>Sistema</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="index.html"><i class="ri-inbox-fill"></i>Perfis</a></li>
                           <li><a href="index.html"><i class="ri-edit-2-fill"></i>Modulos</a></li>
                           <li><a href="/users"><i class="ri-edit-2-fill"></i>Usuários</a></li>
                        </ul>
                     </li>

                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Almoxarifado</span></li>
                     
                     <li>
                        <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Almoxarifado</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="index.html"><i class="ri-file-list-fill"></i>Centro de Estoque</a></li>
                           <li><a href="index.html"><i class="ri-user-add-fill"></i> Produtos</a></li>
                           <li><a href="index.html"><i class="ri-profile-fill"></i>Manutenção</a></li>
                           <li><a href="index.html"><i class="ri-file-edit-fill"></i> Movimentações</a></li>
                        </ul>
                     </li>
                     <li><a href="index.html" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Sair</span></a></li>
                    
                    
                     
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
            <div class="iq-top-navbar">
               <div class="iq-navbar-custom">
                  <div class="iq-sidebar-logo">
                     <div class="top-logo">
                        <a href="index.html" class="logo">
                        <img src="{{URL::to('/')}}/images/logo.png" class="img-fluid" alt="">
                        <span>XRay</span>
                        </a>
                     </div>
                  </div>
                  <nav class="navbar navbar-expand-lg navbar-light p-0">
                     <div class="iq-search-bar">
                        <form action="#" class="searchbox">
                           <input type="text" class="text search-input" placeholder="Type here to search...">
                           <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                        </form>
                     </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <i class="ri-menu-3-line"></i>
                     </button>
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list">
                           <li class="nav-item">
                              <a class="search-toggle iq-waves-effect language-title" href="#"><img src="{{URL::to('/')}}/images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                              <div class="iq-sub-dropdown">
                                 <a class="iq-sub-card" href="#"><img src="{{URL::to('/')}}/images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                                 <a class="iq-sub-card" href="#"><img src="{{URL::to('/')}}/images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                                 <a class="iq-sub-card" href="#"><img src="{{URL::to('/')}}/images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                                 <a class="iq-sub-card" href="#"><img src="{{URL::to('/')}}/images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                                 <a class="iq-sub-card" href="#"><img src="{{URL::to('/')}}/images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>
                              </div>
                           </li>
                           <li class="nav-item iq-full-screen">
                              <a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a>
                           </li>
                           <li class="nav-item">
                              <a href="#" class="search-toggle iq-waves-effect">
                                 <i class="ri-notification-3-fill"></i>
                                 <span class="bg-danger dots"></span>
                              </a>
                              <div class="iq-sub-dropdown">
                                 <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                       <div class="bg-primary p-3">
                                          <h5 class="mb-0 text-white">All Notifications<small class="badge  badge-light float-right pt-1">4</small></h5>
                                       </div>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/01.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Emma Watson Bini</h6>
                                                <small class="float-right font-size-12">Just Now</small>
                                                <p class="mb-0">95 MB</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/02.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New customer is join</h6>
                                                <small class="float-right font-size-12">5 days ago</small>
                                                <p class="mb-0">Jond Bini</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/03.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Two customer is left</h6>
                                                <small class="float-right font-size-12">2 days ago</small>
                                                <p class="mb-0">Jond Bini</p>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/04.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                <small class="float-right font-size-12">3 days ago</small>
                                                <p class="mb-0">Jond Bini</p>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                           <li class="nav-item dropdown">
                              <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-open-fill"></i>
                              <span class="bg-primary count-mail"></span>
                           </a>
                              <div class="iq-sub-dropdown">
                                 <div class="iq-card shadow-none m-0">
                                    <div class="iq-card-body p-0 ">
                                       <div class="bg-primary p-3">
                                          <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                       </div>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/01.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Bini Emma Watson</h6>
                                                <small class="float-left font-size-12">13 Jun</small>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/02.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                                <small class="float-left font-size-12">20 Apr</small>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/03.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Why do we use it?</h6>
                                                <small class="float-left font-size-12">30 Jun</small>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/04.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Variations Passages</h6>
                                                <small class="float-left font-size-12">12 Sep</small>
                                             </div>
                                          </div>
                                       </a>
                                       <a href="#" class="iq-sub-card" >
                                          <div class="media align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{{URL::to('/')}}/images/user/05.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                                <small class="float-left font-size-12">5 Dec</small>
                                             </div>
                                          </div>
                                       </a>
                                    </div>
                                 </div>
                              </div>
                           </li>
                        </ul>
                     </div>
                     <ul class="navbar-list">
                        <li>
                           <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                              <img src="{{URL::to('/')}}/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-0 line-height">Bini Jets</h6>
                                 <span class="font-size-12">Available</span>
                              </div>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white line-height">Hello Bini Jets</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-account-box-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Account settings</h6>
                                             <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded iq-card-icon iq-bg-primary">
                                             <i class="ri-lock-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Privacy Settings</h6>
                                             <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </nav>
               </div>
            </div>
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  
                  <div class="col-sm-12 col-lg-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Gestão de Modulos</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           
                           <form action="/modules" method="post" id="frmCadastro">
                                @csrf
                              <div class="form-row">
                                 <div class="col">
                                    <input type="text" class="form-control" required placeholder="Nome" name="name">
                                 </div>
                                 <div class="col">
                                    <input type="text" class="form-control" required placeholder="Rota" name="slug" >
                                 </div>
                              </div>
                              <br>

                            <div class="form-row">
                              <div class="col">
                                <select class="form-control" id="exampleFormControlSelect1" name="status">
                                    <option selected="" disabled="">Status</option>
                                    <option>Ativo</option>
                                    <option>Inativo</option>
                                 </select>
                             </div>

                             <div class="form-row" style="padding-top: 50px;">
                              <div class="col">
                                <button type="submit" class="btn btn-primary">Gravar Dados</button>
                              </div>
                            </div>

                            </div>
                           </form>
                        </div>
                     </div>
                     
    
                  </div>
               </div>
            </div>
            <!-- Footer -->
            <footer class="bg-white iq-footer">
               <div class="container-fluid">
                  <div class="row">
                     <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                           <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                           <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                        </ul>
                     </div>
                     <div class="col-lg-6 text-right">
                        Copyright 2020 <a href="#">XRay</a> All Rights Reserved.
                     </div>
                  </div>
               </div>
            </footer>
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