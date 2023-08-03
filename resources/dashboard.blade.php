<!doctype html>
<html lang="en">

<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Casa Blanca Online</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
       <!-- Full calendar -->
      <link href='fullcalendar/core/main.css' rel='stylesheet' />
      <link href='fullcalendar/daygrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/timegrid/main.css' rel='stylesheet' />
      <link href='fullcalendar/list/main.css' rel='stylesheet' />

      <link rel="stylesheet" href="css/flatpickr.min.css">


   </head>
   <body class="sidebar-main-menu">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper" style="background-color: #089bab !important;">
         <!-- Sidebar  -->
         <div class="iq-sidebar" style="background-color: #089bab !important;">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <img src="images/logo.png" class="img-fluid" alt="">
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
                        <a href="/painel" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Dashboard Almoxarifado</span></a>
                     </li>                     
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Administrativo</span></li>
                     <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>Sistema</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="/profiles"><i class="ri-inbox-fill"></i>Perfis</a></li>
                           <li><a href="/modules"><i class="ri-edit-2-fill"></i>Modulos</a></li>
                           <li><a href="/users"><i class="ri-edit-2-fill"></i>Usuários</a></li>
                        </ul>
                     </li>

                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Almoxarifado</span></li>
                     
                     <li>
                        <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Almoxarifado</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="/labels"><i class="ri-file-list-fill"></i>Etiquetas</a></li>
                           <li><a href="/products"><i class="ri-user-add-fill"></i>Equipamentos</a></li>
                           <li><a href="/stock_locations"><i class="ri-profile-fill"></i>Locais de Estoque</a></li>
                           <li><a href="/product_models"><i class="ri-file-edit-fill"></i>Modelos de Equipamentos</a></li>
                           <li><a href="/product_groups"><i class="ri-file-edit-fill"></i>Grupos de Equipamentos</a></li>
                           <li><a href="/maintenances"><i class="ri-file-edit-fill"></i>Manutenção</a></li>
                           <li><a href="/movements"><i class="ri-file-edit-fill"></i>Movimentações</a></li>
                        </ul>
                     </li>
                     <li><a href="/logout" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Sair</span></a></li>
                    
                    
                     
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <!-- TOP Nav Bar -->
         <div class="iq-top-navbar header-top-sticky">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <img src="images/logo.png" class="img-fluid" alt="">
                     <span>XRay</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Pesquisar Produto">
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
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img style="display: none;" src="images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> Português <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown" style="display:none">
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                              <a class="iq-sub-card" href="#"><img src="images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

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
                                       <h5 class="mb-0 text-white">Notificações<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>

                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center" style="display:none">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Emma Watson Bini</h6>
                                             <small class="float-right font-size-12">Just Now</small>
                                             <p class="mb-0">95 MB</p>
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
                                       <h5 class="mb-0 text-white">Mensagens<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center" style="display:none">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Fabiano Gomes</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
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
                           <img src="images/user/02.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height">Fabiano Gomes</h6>
                              <span class="font-size-12">254.255.541.332</span>
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
            <div class="container-fluid" >
               <div class="row" style="display:none">
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                                       <span class="bg-primary" data-percent="70"></span>
                                   </div>
                                 <span class="line-height-4">10 feb, 2020</span>
                                 <h4 class="mb-2 mt-2">Hypertensive Crisis</h4>
                                 <p class="mb-0 text-secondary line-height">Ongoing treatment</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                                       <span class="bg-danger" data-percent="50"></span>
                                   </div>
                                 <span class="line-height-4">12 Jan, 2020</span>
                                 <h4 class="mb-2 mt-2">Osteoporosis</h4>
                                 <p class="mb-0 text-secondary line-height">Incurable</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                                       <span class="bg-warning" data-percent="80"></span>
                                   </div>
                                 <span class="line-height-4">15 feb, 2020</span>
                                 <h4 class="mb-2 mt-2">Hypertensive Crisis</h4>
                                 <p class="mb-0 text-secondary line-height">Examination</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body P-0 rounded" style="background: url(images/page-img/38.jpg) no-repeat scroll center center; background-size: contain; min-height: 146px;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height iq-user-profile-block">
                        <div class="iq-card-body">
                           <div class="user-details-block">
                              <div class="user-profile text-center">
                                 <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                              </div>
                              <div class="text-center mt-3">
                                 <h4><b>Bini Jets</b></h4>
                                 <p>Doctor</p>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                                 <a href="#" class="btn btn-primary">Assign</a>
                              </div>
                              <hr>
                              <ul class="doctoe-sedual d-flex align-items-center justify-content-between p-0">
                                 <li class="text-center">
                                    <h3 class="counter">4500</h3>
                                    <span>Operations</span>
                                  </li>
                                  <li class="text-center">
                                    <h3 class="counter">3.9</h3>
                                    <span>Medical Rating</span>
                                  </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Health Curve</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="home-chart-06" style="height: 350px;"></div>
                        </div>
                     </div>
                  </div>                  
               </div>
               <div class="row" style="display:none">
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Nearest Treatment</h4>
                           </div>
                        </div>
                        <div class="iq-card-body smaill-calender-home">
                           <input type="text" class="flatpicker d-none">
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body">
                           <h6>APPOINTMENTS</h6>
                           <h3><b>5075</b></h3>
                        </div>
                        <div id="wave-chart-7"></div>
                     </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body">
                           <h6>NEW PATIENTS</h6>
                           <h3><b>1200</b></h3>
                        </div>
                        <div id="wave-chart-8"></div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Hospital Management</h4>
                           </div>
                        </div>
                        <div class="iq-card-body hospital-mgt">
                           <div class="progress mb-3" style="height: 30px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 20%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">OPD</div>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 80%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">80%</div>
                           </div>
                           <div class="progress mb-3" style="height: 30px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 30%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Treatment</div>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">70%</div>
                           </div>
                           <div class="progress mb-3" style="height: 30px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 60%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Laboratory Test</div>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">85%</div>
                           </div>
                           <div class="progress mb-3" style="height: 30px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 40%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">New Patient</div>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">70%</div>
                           </div>
                           <div class="progress mb-3" style="height: 30px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 35%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Doctors</div>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">95%</div>
                           </div>
                           <div class="progress" style="height: 30px;">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 28%;" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">Discharge</div>
                              <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">35%</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row" style="display:none">
                  <div class="col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Patient Progress</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="patient-progress m-0 p-0">
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Bud Jet</h6>
                                 </div>
                                 <span class="badge badge-primary">30%</span>
                              </li> 
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Barney Cull</h6>
                                 </div>
                                 <span class="badge badge-success">70%</span>
                              </li>   
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Eric Shun</h6>
                                 </div>
                                 <span class="badge badge-danger">15%</span>
                              </li>   
                               <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Rick Shaw</h6>
                                 </div>
                                 <span class="badge badge-warning">55%</span>
                              </li> 
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Ben Effit</h6>
                                 </div>
                                 <span class="badge badge-info">45%</span>
                              </li>
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Rick Shaw</h6>
                                 </div>
                                 <span class="badge badge-warning">55%</span>
                              </li> 
                              <li class="d-flex mb-3 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Marge Arita</h6>
                                 </div>
                                 <span class="badge badge-primary">65%</span>
                              </li>
                              <li class="d-flex align-items-center">
                                 <div class="media-support-info">
                                    <h6>Barry Cudat</h6>
                                 </div>
                                 <span class="badge badge-danger">15%</span>
                              </li>                       
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Patient overview</h4>
                           </div>
                        </div>
                        <div class="iq-card-body pl-0 pr-0">
                           <div id="home-chart-03" style="height: 280px;"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Visits From Countries </h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="iq-details">
                              <span class="title text-dark">United States</span>
                              <div class="percentage float-right text-primary">95 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-primary" data-percent="95"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-details mt-4">
                              <span class="title text-dark">India</span>
                              <div class="percentage float-right text-warning">75 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-warning" data-percent="75"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-details mt-4">
                              <span class="title text-dark">Australia</span>
                              <div class="percentage float-right text-success">55 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-success" data-percent="55"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-details mt-4">
                              <span class="title text-dark">Brazil</span>
                              <div class="percentage float-right text-danger">25 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-danger" data-percent="25"></span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Listagem de Equipamentos </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Produto</th>
                                       <th scope="col">Usuário</th>
                                       <th scope="col">Data</th>
                                       <th scope="col">Horário</th>
                                       <th scope="col">Telefone Local</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Petey Cruiser</td>
                                       <td>Dr.Monty Carlo</td>
                                       <td>20/02/2020</td>
                                       <td>8:00 AM</td>
                                       <td>+1-202-555-0146</td>
                                    </tr>
                                    <tr>
                                       <td>Anna Sthesia</td>
                                       <td>Dr.Pete Sariya</td>
                                       <td>25/02/2020</td>
                                       <td>8:30 AM</td>
                                       <td>+1-202-555-0164</td>
                                    </tr>
                                    <tr>
                                       <td>Paul Molive</td>
                                       <td>Dr.Brock Lee</td>
                                       <td>25/02/2020</td>
                                       <td>9:45 AM</td>
                                       <td>+1-202-555-0153</td>
                                    </tr>
                                    <tr>
                                       <td>Anna Mull</td>
                                       <td>Dr.Barb Ackue</td>
                                       <td>27/02/2020</td>
                                       <td>11:30 AM</td>
                                       <td>+1-202-555-0154</td>
                                    </tr>
                                    <tr>
                                       <td>Paige Turner</td>
                                       <td>Dr.Walter Melon</td>
                                       <td>28/02/2020</td>
                                       <td>3:30 PM</td>
                                       <td>+1-202-555-0101</td>
                                    </tr>
                                    <tr>
                                       <td>Don Stairs</td>
                                       <td>Dr.Arty Ficial</td>
                                       <td>28/02/2020</td>
                                       <td>4:30 PM</td>
                                       <td>+1-202-555-0176</td>
                                    </tr>
                                    <tr>
                                       <td>Pat Agonia</td>
                                       <td>Dr.Barb Ackue</td>
                                       <td>29/02/2020</td>
                                       <td>5:00 PM</td>
                                       <td>+1-202-555-0194</td>
                                    </tr>
                                 </tbody>
                              </table>
                              <a href="javascript:void();" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> Adicionar Equipamento em Manutenção </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Equipamentos em Manutenção</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="doctors-lists m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li> 
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton42" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton43" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton44" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton45" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton46" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton47" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/08.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton48" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/09.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton49" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/10.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Câmera XPTO</h6>
                                    <p class="mb-0 font-size-12">Veículo, CCC-09877</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton50" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>Verificar Situação</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Ver Detalhes</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>                             
                           </ul>
                           <a href="javascript:void();" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> Adicionar Equipamento em Manutenção </a>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text-right">
                  Desenvolvido por  <a href="https://casablancaonline.com.br/">Casa Blanca Online</a>
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
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="js/waypoints.min.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="js/wow.min.js"></script>
      <!-- Slick JavaScript -->
      <script src="js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="js/kelly.js"></script>
      <!-- Flatpicker Js -->
      <script src="js/flatpickr.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="js/custom.js"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:27:07 GMT -->
</html>
