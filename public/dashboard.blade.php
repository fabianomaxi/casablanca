<!doctype html>
<html lang="en">
   
<!-- Mirrored from templates.iqonic.design/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:26:35 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>XRay - Responsive Bootstrap 4 Admin Dashboard Template</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ url('/') }}/yes_adm/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/yes_adm/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/yes_adm/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/yes_adm/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ url('/') }}/yes_adm/css/responsive.css">
       <!-- Full calendar -->
      <link href="{{ url('/') }}/yes_adm/fullcalendar/core/main.css" rel='stylesheet' />
      <link href="{{ url('/') }}/yes_adm/fullcalendar/daygrid/main.css" rel='stylesheet' />
      <link href="{{ url('/') }}/yes_adm/fullcalendar/timegrid/main.css" rel='stylesheet' />
      <link href="{{ url('/') }}/yes_adm/fullcalendar/list/main.css" rel='stylesheet' />

      <link rel="stylesheet" href="{{ url('/') }}/yes_adm/css/flatpickr.min.css">


   </head>
   <body class="sidebar-main-menu">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">

         </div>
      </div>
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <img src="{{ url('/') }}/yes_adm/images/logo.png" class="img-fluid" alt="">
               <span>XRay</span>
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
                        <a href="index.html" class="iq-waves-effect"><i class="ri-hospital-fill"></i><span>Doctor Dashboard</span></a>
                     </li>                     
                     <li>
                        <a href="dashboard-1.html" class="iq-waves-effect"><i class="ri-home-8-fill"></i><span>Hospital Dashboard 1 </span></a>
                     </li>
                     <li>
                        <a href="dashboard-2.html" class="iq-waves-effect"><i class="ri-briefcase-4-fill"></i><span>Hospital Dashboard 2</span></a>
                     </li>
                     <li>
                        <a href="dashboard-3.html" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Patient Dashboard</span></a>
                     </li>
                     <li>
                        <a href="dashboard-4.html" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Covid-19 Dashboard</span><span class="badge badge-danger">New</span></a>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Apps</span></li>
                     <li>
                        <a href="#mailbox" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>Email</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="mailbox" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="app/index.html"><i class="ri-inbox-fill"></i>Inbox</a></li>
                           <li><a href="app/email-compose.html"><i class="ri-edit-2-fill"></i>Email Compose</a></li>
                        </ul>
                     </li>
                     
                     <li>
                        <a href="#doctor-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="doctor-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="doctor-list.html"><i class="ri-file-list-fill"></i>All Doctors</a></li>
                           <li><a href="add-doctor.html"><i class="ri-user-add-fill"></i> Add Doctor</a></li>
                           <li><a href="profile.html"><i class="ri-profile-fill"></i>Doctor Profile</a></li>
                           <li><a href="profile-edit.html"><i class="ri-file-edit-fill"></i> Edit Doctor</a></li>
                        </ul>
                     </li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Calendar</span></a></li>
                    
                    <li><a href="chat.html" class="iq-waves-effect"><i class="ri-message-fill"></i><span>Chat</span></a></li>
                    
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Components</span></li>
                     <li>
                        <a href="#ui-elements" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-apps-fill"></i><span>UI Elements</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="ui-elements" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="ui-colors.html"><i class="ri-font-color"></i>colors</a></li>
                           <li><a href="ui-typography.html"><i class="ri-text"></i>Typography</a></li>
                           <li><a href="ui-alerts.html"><i class="ri-alert-fill"></i>Alerts</a></li>
                           <li><a href="ui-badges.html"><i class="ri-building-3-fill"></i>Badges</a></li>
                           <li><a href="ui-breadcrumb.html"><i class="ri-guide-fill"></i>Breadcrumb</a></li>
                           <li><a href="ui-buttons.html"><i class="ri-checkbox-blank-fill"></i>Buttons</a></li>
                           <li><a href="ui-cards.html"><i class="ri-bank-card-fill"></i>Cards</a></li>
                           <li><a href="ui-carousel.html"><i class="ri-slideshow-4-fill"></i>Carousel</a></li>
                           <li><a href="ui-embed-video.html"><i class="ri-movie-fill"></i>Video</a></li>
                           <li><a href="ui-grid.html"><i class="ri-grid-fill"></i>Grid</a></li>
                           <li><a href="ui-images.html"><i class="ri-image-fill"></i>Images</a></li>
                           <li><a href="ui-list-group.html"><i class="ri-file-list-fill"></i>list Group</a></li>
                           <li><a href="ui-media-object.html"><i class="ri-camera-fill"></i>Media</a></li>
                           <li><a href="ui-modal.html"><i class="ri-checkbox-blank-fill"></i>Modal</a></li>
                           <li><a href="ui-notifications.html"><i class="ri-notification-3-fill"></i>Notifications</a></li>
                           <li><a href="ui-pagination.html"><i class="ri-more-fill"></i>Pagination</a></li>
                           <li><a href="ui-popovers.html"><i class="ri-folder-shield-fill"></i>Popovers</a></li>
                           <li><a href="ui-progressbars.html"><i class="ri-battery-low-fill"></i>Progressbars</a></li>
                           <li><a href="ui-tabs.html"><i class="ri-database-fill"></i>Tabs</a></li>
                           <li><a href="ui-tooltips.html"><i class="ri-record-mail-fill"></i>Tooltips</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-device-fill"></i><span>Forms</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-layout.html"><i class="ri-tablet-fill"></i>Form Elements</a></li>
                           <li><a href="form-validation.html"><i class="ri-device-fill"></i>Form Validation</a></li>
                           <li><a href="form-switch.html"><i class="ri-toggle-fill"></i>Form Switch</a></li>
                           <li><a href="form-chechbox.html"><i class="ri-chat-check-fill"></i>Form Checkbox</a></li>
                           <li><a href="form-radio.html"><i class="ri-radio-button-fill"></i>Form Radio</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#forms-wizard" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-file-word-fill"></i><span>Forms Wizard</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms-wizard" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="form-wizard.html"><i class="ri-anticlockwise-fill"></i>Simple Wizard</a></li>
                           <li><a href="form-wizard-validate.html"><i class="ri-anticlockwise-2-fill"></i>Validate Wizard</a></li>
                           <li><a href="form-wizard-vertical.html"><i class="ri-clockwise-fill"></i>Vertical Wizard</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-table-fill"></i><span>Table</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="tables-basic.html"><i class="ri-table-fill"></i>Basic Tables</a></li>
                           <li><a href="data-table.html"><i class="ri-table-2"></i>Data Table</a></li>
                           <li><a href="table-editable.html"><i class="ri-archive-drawer-fill"></i>Editable Table</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#charts" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-bar-chart-2-fill"></i><span>Charts</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="charts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="chart-morris.html"><i class="ri-file-chart-fill"></i>Morris Chart</a></li>
                           <li><a href="chart-high.html"><i class="ri-bar-chart-fill"></i>High Charts</a></li>
                           <li><a href="chart-am.html"><i class="ri-bar-chart-box-fill"></i>Am Charts</a></li>
                           <li><a href="chart-apex.html"><i class="ri-pie-chart-box-fill"></i>Apex Chart</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#icons" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-copper-coin-fill"></i><span>Icons</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="icons" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="icon-dripicons.html"><i class="ri-stack-fill"></i>Dripicons</a></li>
                           <li><a href="icon-fontawesome-5.html"><i class="ri-facebook-fill"></i>Font Awesome 5</a></li>
                           <li><a href="icon-lineawesome.html"><i class="ri-keynote-fill"></i>line Awesome</a></li>
                           <li><a href="icon-remixicon.html"><i class="ri-remixicon-fill"></i>Remixicon</a></li>
                           <li><a href="icon-unicons.html"><i class="ri-underline"></i>unicons</a></li>
                        </ul>
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Pages</span></li>
                     <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-server-fill"></i><span>Authentication</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="sign-in.html"><i class="ri-login-box-fill"></i>Login</a></li>
                           <li><a href="sign-up.html"><i class="ri-logout-box-fill"></i>Register</a></li>
                           <li><a href="pages-recoverpw.html"><i class="ri-record-mail-fill"></i>Recover Password</a></li>
                           <li><a href="pages-confirm-mail.html"><i class="ri-chat-check-fill"></i>Confirm Mail</a></li>
                           <li><a href="pages-lock-screen.html"><i class="ri-file-lock-fill"></i>Lock Screen</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#map" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-map-pin-2-fill"></i><span>Maps</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="map" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-map.html"><i class="ri-google-fill"></i>Google Map</a></li>
                           <li><a href="#"><i class="ri-map-pin-range-line"></i>Vector Map</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-folders-fill"></i><span>Extra Pages</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="pages-timeline.html"><i class="ri-map-pin-time-fill"></i>Timeline</a></li>
                           <li><a href="pages-invoice.html"><i class="ri-question-answer-fill"></i>Invoice</a></li>
                           <li><a href="blank-page.html"><i class="ri-checkbox-blank-fill"></i>Blank Page</a></li>
                           <li><a href="pages-error.html"><i class="ri-error-warning-fill"></i>Error 404</a></li>
                           <li><a href="pages-error-500.html"><i class="ri-error-warning-fill"></i>Error 500</a></li>
                           <li><a href="pages-pricing.html"><i class="ri-price-tag-3-fill"></i>Pricing</a></li>
                           <li><a href="pages-pricing-one.html"><i class="ri-price-tag-2-fill"></i>Pricing 1</a></li>
                           <li><a href="pages-maintenance.html"><i class="ri-git-repository-commits-fill"></i>Maintenance</a></li>
                           <li><a href="pages-comingsoon.html"><i class="ri-run-fill"></i>Coming Soon</a></li>
                           <li><a href="pages-faq.html"><i class="ri-compasses-2-fill"></i>Faq</a></li>
                        </ul>
                     </li>
                    <li class="menu-level">
                        <a href="#menu-level-1" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu Level</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="menu-level-1" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 1</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 2</a></li>
                           <li>
                              <a href="#submenu-2" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-record-circle-line"></i><span>Menu 3</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                              <ul id="submenu-2" class="iq-submenu collapse">
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3.1</a></li>
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3.2</a></li>
                                 <li><a href="#"><i class="ri-record-circle-line"></i>Menu 3.3</a></li>
                              </ul>
                           </li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 4</a></li>
                           <li><a href="#"><i class="ri-record-circle-line"></i>Menu 5</a></li>
                        </ul>
                     </li>
                     
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
                     <img src="{{ url('/') }}/yes_adm/images/logo.png" class="img-fluid" alt="">
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
                           <a class="search-toggle iq-waves-effect language-title" href="#"><img src="{{ url('/') }}/yes_adm/images/small/flag-01.png" alt="img-flaf" class="img-fluid mr-1" style="height: 16px; width: 16px;" /> English <i class="ri-arrow-down-s-line"></i></a>
                           <div class="iq-sub-dropdown">
                              <a class="iq-sub-card" href="#"><img src="{{ url('/') }}/yes_adm/images/small/flag-02.png" alt="img-flaf" class="img-fluid mr-2" />French</a>
                              <a class="iq-sub-card" href="#"><img src="{{ url('/') }}/yes_adm/images/small/flag-03.png" alt="img-flaf" class="img-fluid mr-2" />Spanish</a>
                              <a class="iq-sub-card" href="#"><img src="{{ url('/') }}/yes_adm/images/small/flag-04.png" alt="img-flaf" class="img-fluid mr-2" />Italian</a>
                              <a class="iq-sub-card" href="#"><img src="{{ url('/') }}/yes_adm/images/small/flag-05.png" alt="img-flaf" class="img-fluid mr-2" />German</a>
                              <a class="iq-sub-card" href="#"><img src="{{ url('/') }}/yes_adm/images/small/flag-06.png" alt="img-flaf" class="img-fluid mr-2" />Japanese</a>

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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/01.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/02.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/03.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/04.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/01.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/02.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/03.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/04.jpg" alt="">
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
                                             <img class="avatar-40 rounded" src="{{ url('/') }}/yes_adm/images/user/05.jpg" alt="">
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
                           <img src="{{ url('/') }}/yes_adm/images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
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
                              <div class="iq-card-body P-0 rounded" style="background: url({{ url('/') }}/yes_adm/images/page-img/38.jpg) no-repeat scroll center center; background-size: contain; min-height: 146px;">
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
                                 <img src="{{ url('/') }}/yes_adm/images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
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
               <div class="row">
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
               <div class="row">
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
                              <h4 class="card-title">New Appointments </h4>
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
                                       <th scope="col">Patient</th>
                                       <th scope="col">Doctor</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Timing</th>
                                       <th scope="col">Contact</th>

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
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Doctors Lists</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="doctors-lists m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Paul Molive</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li> 
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Barb Dwyer</h6>
                                    <p class="mb-0 font-size-12">MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton42" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Terry Aki</h6>
                                    <p class="mb-0 font-size-12">MBBS</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton43" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Robin Banks</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton44" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Barry Wine</h6>
                                    <p class="mb-0 font-size-12">BAMS</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton45" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Zack Lee</h6>
                                    <p class="mb-0 font-size-12">MS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton46" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Otto Matic</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton47" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/08.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Moe Fugga</h6>
                                    <p class="mb-0 font-size-12">MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton48" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/09.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Bud Wiser</h6>
                                    <p class="mb-0 font-size-12">MBBS</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton49" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="{{ url('/') }}/yes_adm/images/user/10.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Barry Cade</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton50" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>                             
                           </ul>
                           <a href="javascript:void();" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Doctors </a>
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
      <script src="{{ url('/') }}/yes_adm/js/jquery.min.js"></script>
      <script src="{{ url('/') }}/yes_adm/js/popper.min.js"></script>
      <script src="{{ url('/') }}/yes_adm/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/waypoints.min.js"></script>
      <script src="{{ url('/') }}/yes_adm/js/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/kelly.js"></script>
      <!-- Flatpicker Js -->
      <script src="{{ url('/') }}/yes_adm/js/flatpickr.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{{ url('/') }}/yes_adm/js/custom.js"></script>
   </body>

<!-- Mirrored from templates.iqonic.design/xray/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Sep 2022 17:27:07 GMT -->
</html>
