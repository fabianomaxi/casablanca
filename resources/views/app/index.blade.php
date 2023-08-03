<!DOCTYPE html>
<html lang="en">

<head>
    
   <!-- Meta -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
   <meta name="theme-color" content="#2196f3">
   <meta name="author" content="DexignZone" /> 
    <meta name="keywords" content="" /> 
    <meta name="robots" content="" /> 
   <meta name="description" content="Aplicativo Casa Blanca"/>
   <meta property="og:title" content="Aplicativo Casa Blanca" />
   <meta property="og:description" content="Aplicativo Casa Blanca" />
   <meta property="og:image" content="social-image.png"/>
   <meta name="format-detection" content="telephone=no">
    
    <!-- Favicons Icon -->
   <link rel="shortcut icon" type="image/x-icon" href="https://devfabiano.com.br/images/favicon.ico" />
    
    <!-- Title -->
   <title>Aplicativo Casa Blanca</title>
   
   <!-- PWA Version -->

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{URL::to('/base_app/assets')}}/css/style.css">
    <link rel="stylesheet" href="{{URL::to('/base_app/assets')}}/vendor/swiper/swiper-bundle.min.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <link rel="manifest" href="{{URL::to('/js')}}/manifest.json?v05">

    @php 
        if( empty(@Session::get('nameSession')) ){
            echo "<script>alert('Sessão expirada!'); window.location='/aplicativo/login';</script>" ;
            exit ;
        }
    @endphp

</head>   
<body>
<div class="page-wraper">
    
    <!-- Header -->
   <header class="header transparent">
      <div class="main-bar">
         <div class="container">
            <div class="header-content">
               <div class="left-content">
                  <a href="javascript:void(0);" class="menu-toggler">
                     <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8"/>
                     </svg>
                  </a>
               </div>
               <div class="mid-content">
               </div>
            
            </div>
         </div>
      </div>
   </header>
    <!-- Header End -->
    
    <!-- Preloader -->
   <div id="preloader">
      <div class="spinner"></div>
   </div>
    <!-- Preloader end-->
    
   <!-- Sidebar -->
    <div class="sidebar">
      <div class="author-box">
         <div class="dz-media">
            <img src="{{URL::to('/')}}/images/logo.png" class="img-fluid" alt="">
         </div>
         <div class="dz-info">
            <span>Olá,</span>
            <h5 class="name">{{ @Session::get('nameSession')}}</h5>
         </div>
      </div>
      <ul class="nav navbar-nav">   
         <li class="nav-label">Main Menu</li>
         <li><a class="nav-link" href="aplicativo">
            <span class="dz-icon bg-red light">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<rect x="0" y="0" width="24" height="24"></rect>
							<rect fill="#00aeff" x="4" y="4" width="7" height="7" rx="1.5"></rect>
							<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#fff" opacity="0.5"></path>
						</g>
					</svg>
            </span>
            <span>Movimentações</span>
         </a></li>
         
         <li><a class="nav-link" href="/logout">
            <span class="dz-icon bg-red light">
               <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18" height="18" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                     <rect x="0" y="0" width="24" height="24"/>
                     <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#fff" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
                     <rect fill="#ff4db8" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1"/>
                     <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#fff" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
                  </g>
               </svg>
            </span>
            <span>Logout</span>
         </a></li>
            
      </ul>
      <div class="sidebar-bottom">
         <h6 class="name">Casablanca APP</h6>
         <p>Vesrão 1.0</p>
        </div>
    </div>
    <!-- Sidebar End -->
    
    <!-- Banner -->
   <div class="banner-wrapper author-notification">
      <div class="container inner-wrapper">
         <div class="dz-info">
            <span>Olá,</span>
            <h2 class="name mb-0">{{@Session::get('nameSession')}}</h2>
         </div>
         <div class="dz-media media-45 rounded-circle">
            <a href="#"><img src="{{URL::to('/img')}}/icon-512-512.png" class="rounded-circle" alt="author-image"></a>
         </div>
      </div>
   </div>
    <!-- Banner End -->
    
    <!-- Page Content -->
    <div class="page-content">
        
        <div class="content-inner pt-0">
         <div class="container fb">
                <!-- Search -->
                <form class="m-b30" method="post" action="/busca-prod-app" id="frmEquipe" name="frmEquipe">
                     @csrf
                    <div class="input-group">
                        <span class="input-group-text"> 
                            <a href="javascript:$('#frmEquipe').submit()" class="search-icon">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M20.5605 18.4395L16.7528 14.6318C17.5395 13.446 18 12.0262 18 10.5C18 6.3645 14.6355 3 10.5 3C6.3645 3 3 6.3645 3 10.5C3 14.6355 6.3645 18 10.5 18C12.0262 18 13.446 17.5395 14.6318 16.7528L18.4395 20.5605C19.0245 21.1462 19.9755 21.1462 20.5605 20.5605C21.1462 19.9748 21.1462 19.0252 20.5605 18.4395ZM5.25 10.5C5.25 7.605 7.605 5.25 10.5 5.25C13.395 5.25 15.75 7.605 15.75 10.5C15.75 13.395 13.395 15.75 10.5 15.75C7.605 15.75 5.25 13.395 5.25 10.5Z" fill="#B9B9B9"/>
                                </svg>
                            </a>
                        </span>
                        <input type="text" value="{{@request()->busca}}" name="busca" placeholder="Movimentações (Equipamento, Série ou Etiqueta)" class="form-control ps-0 bs-0">
                    </div>
                </form>

                <!-- Features -->
               <div class="features-box" style="text-align: center; display: none; ">
                        <div class="row m-b20 g-3">
                            <div class="col">
                                <div class="card card-bx card-content bg-primary">
                                    <div class="card-body" >
                                        <div class="pwa__alert">
			                                <button style="font-size: 16px;" type="button" class="pwa__alert__btn btn btn-primary btn-sm">Adicionar a tela principal</button>
		                                </div>	
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
               <!-- Features End -->

                
                <!-- Dashboard Area -->
                <div class="dashboard-area">
               
               
               <!-- Categorie -->
                    <div class="categorie-section" style="display: none;">
                        <div class="title-bar">
                            <h5 class="dz-title">Categories</h5>
                        </div>
                        <ul class="d-flex align-items-center">
                            <li>
                                <a href="search.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000"/>
                                            <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path opacity="0.4" d="M19.9925 18.9533H14.2982C13.7426 18.9533 13.2908 19.4123 13.2908 19.9766C13.2908 20.5421 13.7426 21 14.2982 21H19.9925C20.548 21 20.9999 20.5421 20.9999 19.9766C20.9999 19.4123 20.548 18.9533 19.9925 18.9533Z" fill="#130F26"/>
                                        <path d="M10.309 6.90388L15.7049 11.264C15.835 11.3682 15.8573 11.5596 15.7557 11.6929L9.35874 20.0282C8.95662 20.5431 8.36402 20.8345 7.72908 20.8452L4.23696 20.8882C4.05071 20.8904 3.88775 20.7614 3.84542 20.5765L3.05175 17.1258C2.91419 16.4916 3.05175 15.8358 3.45388 15.3306L9.88256 6.95548C9.98627 6.82111 10.1778 6.79746 10.309 6.90388Z" fill="#130F26"/>
                                        <path opacity="0.4" d="M18.1205 8.66544L17.0803 9.96401C16.9755 10.0962 16.7872 10.1177 16.657 10.0124C15.3924 8.98901 12.1543 6.36285 11.2559 5.63509C11.1247 5.52759 11.1067 5.33625 11.2125 5.20295L12.2157 3.95706C13.1257 2.78534 14.7131 2.67784 15.9935 3.69906L17.4644 4.87078C18.0676 5.34377 18.4698 5.96726 18.6073 6.62299C18.7661 7.3443 18.5967 8.0527 18.1205 8.66544Z" fill="#130F26"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M10.5857864,12 L5.46446609,6.87867966 C5.0739418,6.48815536 5.0739418,5.85499039 5.46446609,5.46446609 C5.85499039,5.0739418 6.48815536,5.0739418 6.87867966,5.46446609 L12,10.5857864 L18.1923882,4.39339828 C18.5829124,4.00287399 19.2160774,4.00287399 19.6066017,4.39339828 C19.997126,4.78392257 19.997126,5.41708755 19.6066017,5.80761184 L13.4142136,12 L19.6066017,18.1923882 C19.997126,18.5829124 19.997126,19.2160774 19.6066017,19.6066017 C19.2160774,19.997126 18.5829124,19.997126 18.1923882,19.6066017 L12,13.4142136 L6.87867966,18.5355339 C6.48815536,18.9260582 5.85499039,18.9260582 5.46446609,18.5355339 C5.0739418,18.1450096 5.0739418,17.5118446 5.46446609,17.1213203 L10.5857864,12 Z" fill="#000000" opacity="0.3" transform="translate(12.535534, 12.000000) rotate(-360.000000) translate(-12.535534, -12.000000) "/>
                                            <path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M12,4.25932872 C12.1488635,4.25921584 12.3000368,4.29247316 12.4425657,4.36281539 C12.6397783,4.46014562 12.7994058,4.61977315 12.8967361,4.81698575 L14.9389263,8.95491503 L19.5054023,9.61846284 C20.0519472,9.69788046 20.4306287,10.2053233 20.351211,10.7518682 C20.3195865,10.9695052 20.2170993,11.1706476 20.0596157,11.3241562 L16.7552826,14.545085 L17.5353298,19.0931094 C17.6286908,19.6374458 17.263103,20.1544017 16.7187666,20.2477627 C16.5020089,20.2849396 16.2790408,20.2496249 16.0843804,20.1472858 L12,18 L12,4.25932872 Z" fill="#000000" opacity="0.3"/>
                                            <path d="M12,4.25932872 L12,18 L7.91561963,20.1472858 C7.42677504,20.4042866 6.82214789,20.2163401 6.56514708,19.7274955 C6.46280801,19.5328351 6.42749334,19.309867 6.46467018,19.0931094 L7.24471742,14.545085 L3.94038429,11.3241562 C3.54490071,10.938655 3.5368084,10.3055417 3.92230962,9.91005817 C4.07581822,9.75257453 4.27696063,9.65008735 4.49459766,9.61846284 L9.06107374,8.95491503 L11.1032639,4.81698575 C11.277344,4.464261 11.6315987,4.25960807 12,4.25932872 Z" fill="#000000"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"/>
                                            <path d="M17.2718029,8.68536757 C16.8932864,8.28319382 16.9124644,7.65031935 17.3146382,7.27180288 C17.7168119,6.89328641 18.3496864,6.91246442 18.7282029,7.31463817 L22.7282029,11.5646382 C23.0906029,11.9496882 23.0906029,12.5503176 22.7282029,12.9353676 L18.7282029,17.1853676 C18.3496864,17.5875413 17.7168119,17.6067193 17.3146382,17.2282029 C16.9124644,16.8496864 16.8932864,16.2168119 17.2718029,15.8146382 L20.6267538,12.2500029 L17.2718029,8.68536757 Z M6.72819712,8.6853647 L3.37324625,12.25 L6.72819712,15.8146353 C7.10671359,16.2168091 7.08753558,16.8496835 6.68536183,17.2282 C6.28318808,17.6067165 5.65031361,17.5875384 5.27179713,17.1853647 L1.27179713,12.9353647 C0.909397125,12.5503147 0.909397125,11.9496853 1.27179713,11.5646353 L5.27179713,7.3146353 C5.65031361,6.91246155 6.28318808,6.89328354 6.68536183,7.27180001 C7.08753558,7.65031648 7.10671359,8.28319095 6.72819712,8.6853647 Z" fill="#000000" fill-rule="nonzero"/>
                                            <rect fill="#40189d" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-345.000000) translate(-12.000000, -12.000000) " x="11" y="4" width="2" height="16" rx="1"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
                                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg width="30" height="30" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.1528 5.55553C10.2037 5.65919 10.2373 5.77021 10.2524 5.88434L10.5308 10.0243L10.669 12.1051C10.6705 12.3191 10.704 12.5317 10.7687 12.736C10.9356 13.1326 11.3372 13.3846 11.7741 13.367L18.4313 12.9315C18.7196 12.9268 18.998 13.0346 19.2052 13.2313C19.3779 13.3952 19.4894 13.6096 19.5246 13.8402L19.5364 13.9802C19.2609 17.7949 16.4592 20.9767 12.6524 21.798C8.84555 22.6193 4.94186 20.8843 3.06071 17.5349C2.51839 16.5618 2.17965 15.4923 2.06438 14.389C2.01623 14.0624 1.99503 13.7325 2.00098 13.4025C1.99503 9.31273 4.90747 5.77696 8.98433 4.92457C9.47501 4.84816 9.95603 5.10792 10.1528 5.55553Z" fill="#130F26"/>
                                        <path opacity="0.4" d="M12.8701 2.00082C17.43 2.11683 21.2624 5.39579 22.0001 9.81229L21.993 9.84488L21.9729 9.89227L21.9757 10.0224C21.9652 10.1947 21.8987 10.3605 21.784 10.4945C21.6646 10.634 21.5014 10.729 21.3217 10.7659L21.2121 10.7809L13.5313 11.2786C13.2758 11.3038 13.0214 11.2214 12.8314 11.052C12.6731 10.9107 12.5719 10.7201 12.5433 10.5147L12.0277 2.84506C12.0188 2.81913 12.0188 2.79102 12.0277 2.76508C12.0348 2.55367 12.1278 2.35384 12.2861 2.21023C12.4444 2.06662 12.6547 1.9912 12.8701 2.00082Z" fill="#130F26"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="search.html" class="btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" version="1.1" class="svg-main-icon">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <polygon points="0 0 24 0 24 24 0 24"/>
                                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
                                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
               <!-- Categorie End -->
               
               <!-- Recomended Jobs -->
               <div class="m-b10" style="display: none;">
                        <div class="title-bar">
                            <h5 class="dz-title">Recomended Jobs</h5>
                            <div class="swiper-defult-pagination pagination-dots style-1 p-0"></div>
                        </div>
                        <div class="swiper-btn-center-lr">
                            <div class="swiper-container tag-group mt-4 dz-swiper recomand-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="card job-post">
                                            <div class="card-body">
                                                <div class="media media-80">
                                                    <img src="{{URL::to('/base_app/assets')}}/images/logo/logo.png" alt="/">
                                                </div>
                                                <div class="card-info">
                                                    <h6 class="title"><a href="javascript:void(0);">Software Engineer</a></h6>
                                                    <span class="location">Jakarta, Indonesia</span>
                                                    <div class="d-flex align-items-center" style="vertical-align: top;">
                                                        <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z" fill="#40189D"/>
                                                        </svg>
                                                        <span class="ms-2 price-item">$500 - $1,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card job-post">
                                            <div class="card-body">
                                                <div class="media media-80">
                                                    <img src="{{URL::to('/base_app/assets')}}/images/logo/logo.png" alt="/">
                                                </div>
                                                <div class="card-info">
                                                    <h6 class="title"><a href="javascript:void(0);">Software Engineer</a></h6>
                                                    <span class="location">Jakarta, Indonesia</span>
                                                    <div class="d-flex align-items-center">
                                                        <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z" fill="#40189D"/>
                                                        </svg>
                                                        <span class="ms-2 price-item">$500 - $1,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="card job-post">
                                            <div class="card-body">
                                                <div class="media media-80">
                                                    <img src="{{URL::to('/base_app/assets')}}/images/logo/logo.png" alt="/">
                                                </div>
                                                <div class="card-info">
                                                    <h6 class="title"><a href="javascript:void(0);">Software Engineer</a></h6>
                                                    <span class="location">Jakarta, Indonesia</span>
                                                    <div class="d-flex align-items-center">
                                                        <svg class="text-primary" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                            <path d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z" fill="#40189D"/>
                                                        </svg>
                                                        <span class="ms-2 price-item">$500 - $1,000</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    <div class="col">
                        <label for="email">Local de Destino</label>
                        <select class="form-control" id="id_stock_locations" required name="id_stock_locations">
                            <option value="">selecione</option>

                            @foreach( $stockLocations as $stockLocation )
                                <option value="{{$stockLocation->id_stock_locations}}">{{$stockLocation->name}}</option>
                            @endforeach   
                                        
                        </select>
                    </div>

                    <br>

               <!-- Recomended Jobs End -->

                <!-- Div to show the scanner -->
                    <div style="padding-top: 10px;">
                        <input type="button" id="btn" onclick="scaner()" class="btn light btn-primary w-100" value="Scanear Código de barras"></input>
                    </div>
                        <!-- Div to show the scanner END -->
                        <br>
                <!-- Div to show the scanner -->
                    <div style="padding-top: 10px;">
                        <input type="button" id="btn" onclick="javascript:digitar()" class="btn light btn-info w-100" value="Digitar Código de barras"></input>
                    </div>
                    <br>
                <!-- Div to show the scanner END -->

                <!-- Recent Jobs -->
                    <div class="title-bar">
                        <h5 class="dz-title">Movimentações Recentes</h5>
                    </div>
               <div class="list item-list recent-jobs-list">
                        <ul>
                            
                           <!-- FAZER LOOPING DESSE BLOCO LI -->

                        @foreach( $movements as $movement )

                            <li>
                                <div class="item-content">
                                    <a href="#"  style="cursor:default" class="item-media"><img src="{{URL::to('/base_app/assets')}}/images/logo/company-logo1.png" width="55" alt="logo"></a>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-subtitle"></div>
                                            <h6 class="item-title"><a href="#" style="cursor:default">
                                             Local Saída: 
                                             @php 
                                                if( array_key_exists($movement->id_stock_locations_from,@$stocksLocation) ) {
                                                    echo $stocksLocation[$movement->id_stock_locations_from] . " - " ; 
                                                }
                                             @endphp

                                             @php 
                                                if( array_key_exists($movement->id_stock_locations_to,@$stocksLocation) ) {
                                                    echo $stocksLocation[$movement->id_stock_locations_to] ; 
                                                }
                                             @endphp

                                        </a></h6>
                                        </div>
                                        <div class="d-flex align-items-center mb-2">
                                            <svg class="text-primary" style="vertical-align: top;" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path d="M8.5 23C9.70017 23.0072 10.8898 22.7761 12 22.32C13.109 22.7799 14.2995 23.0112 15.5 23C19.145 23 22 21.055 22 18.571V14.429C22 11.945 19.145 10 15.5 10C15.331 10 15.165 10.008 15 10.017V5.333C15 2.9 12.145 1 8.5 1C4.855 1 2 2.9 2 5.333V18.667C2 21.1 4.855 23 8.5 23ZM20 18.571C20 19.72 18.152 21 15.5 21C12.848 21 11 19.72 11 18.571V17.646C12.3542 18.4696 13.9153 18.8898 15.5 18.857C17.0847 18.8898 18.6458 18.4696 20 17.646V18.571ZM15.5 12C18.152 12 20 13.28 20 14.429C20 15.578 18.152 16.857 15.5 16.857C12.848 16.857 11 15.577 11 14.429C11 13.281 12.848 12 15.5 12ZM8.5 3C11.152 3 13 4.23 13 5.333C13 6.43601 11.152 7.66701 8.5 7.66701C5.848 7.66701 4 6.43701 4 5.333C4 4.229 5.848 3 8.5 3ZM4 8.48201C5.35986 9.28959 6.91876 9.7001 8.5 9.66701C10.0812 9.7001 11.6401 9.28959 13 8.48201V10.33C11.9102 10.6047 10.9107 11.1586 10.1 11.937C9.57422 12.0508 9.03795 12.1091 8.5 12.111C5.848 12.111 4 10.881 4 9.77801V8.48201ZM4 12.927C5.36015 13.7338 6.91891 14.1439 8.5 14.111C8.678 14.111 8.85 14.089 9.025 14.08C9.0101 14.1958 9.00176 14.3123 9 14.429V16.514C8.832 16.524 8.67 16.556 8.5 16.556C5.848 16.556 4 15.326 4 14.222V12.927ZM4 17.371C5.35986 18.1786 6.91876 18.5891 8.5 18.556C8.668 18.556 8.833 18.543 9 18.535V18.571C9.01431 19.4223 9.34144 20.2385 9.919 20.864C9.45111 20.9524 8.97615 20.9979 8.5 21C5.848 21 4 19.77 4 18.667V17.371Z" fill="#40189D"/>
                                            </svg>
                                            <div class="item-price">{{date('d/m/Y H:i:s',strtotime($movement->date))}} - {{$users[$movement->id_user]}}</div>
                                        </div>
                                        <hr />
                                        <div class="d-flex align-items-center">
                                            <svg class="text-primary" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path opacity="0.4" d="M0.000244141 9.07849C0.0502441 11.4165 0.190244 15.4155 0.210244 15.8565C0.281244 16.7995 0.642244 17.7525 1.20424 18.4245C1.98624 19.3675 2.94924 19.7885 4.29224 19.7885C6.14824 19.7985 8.19424 19.7985 10.1812 19.7985C12.1762 19.7985 14.1122 19.7985 15.7472 19.7885C17.0712 19.7885 18.0642 19.3565 18.8362 18.4245C19.3982 17.7525 19.7592 16.7895 19.8102 15.8565C19.8302 15.4855 19.9302 11.1445 19.9902 9.07849H0.000244141Z" fill="#130F26"/>
                                                <path d="M9.24548 13.3842V14.6782C9.24548 15.0922 9.58148 15.4282 9.99548 15.4282C10.4095 15.4282 10.7455 15.0922 10.7455 14.6782V13.3842C10.7455 12.9702 10.4095 12.6342 9.99548 12.6342C9.58148 12.6342 9.24548 12.9702 9.24548 13.3842Z" fill="#130F26"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.21137 12.5564C8.11137 12.9194 7.76237 13.1514 7.38437 13.1014C4.83337 12.7454 2.39537 11.8404 0.337366 10.4814C0.126366 10.3434 0.000366211 10.1074 0.000366211 9.8554V6.3894C0.000366211 4.2894 1.71237 2.5814 3.81737 2.5814H5.78437C5.97237 1.1294 7.20237 0.000396729 8.70437 0.000396729H11.2864C12.7874 0.000396729 14.0184 1.1294 14.2064 2.5814H16.1834C18.2824 2.5814 19.9904 4.2894 19.9904 6.3894V9.8554C19.9904 10.1074 19.8634 10.3424 19.6544 10.4814C17.5924 11.8464 15.1444 12.7554 12.5764 13.1104C12.5414 13.1154 12.5074 13.1174 12.4734 13.1174C12.1344 13.1174 11.8314 12.8884 11.7464 12.5524C11.5444 11.7564 10.8214 11.1994 9.99037 11.1994C9.14837 11.1994 8.43337 11.7444 8.21137 12.5564ZM11.2864 1.5004H8.70437C8.03137 1.5004 7.46937 1.9604 7.30137 2.5814H12.6884C12.5204 1.9604 11.9584 1.5004 11.2864 1.5004Z" fill="#130F26"/>
                                            </svg>
                                            <div class="item-price">{{$products[$movement->id_products]}}</div>
                                        </div>
                                        <hr />
                                        <div class="d-flex align-items-center">
                                        <svg class="text-primary" width="20" height="20" viewBox="0 0 20 20" fill="none">
											<path d="M3 20H17C17.7957 20 18.5587 19.6839 19.1213 19.1213C19.6839 18.5587 20 17.7956 20 17V7C20 6.20435 19.6839 5.44129 19.1213 4.87868C18.5587 4.31607 17.7957 4 17 4H15V2C15 1.46957 14.7893 0.960859 14.4142 0.585786C14.0391 0.210714 13.5304 0 13 0H7C6.46957 0 5.96086 0.210714 5.58579 0.585786C5.21071 0.960859 5 1.46957 5 2V4H3C2.20435 4 1.44129 4.31607 0.87868 4.87868C0.316071 5.44129 0 6.20435 0 7V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20ZM7 2H13V4H7V2ZM2 7C2 6.73478 2.10536 6.48043 2.29289 6.29289C2.48043 6.10536 2.73478 6 3 6H17C17.2652 6 17.5196 6.10536 17.7071 6.29289C17.8946 6.48043 18 6.73478 18 7V17C18 17.2652 17.8946 17.5196 17.7071 17.7071C17.5196 17.8946 17.2652 18 17 18H3C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V7Z" fill="#40189D"></path>
										</svg>
                                            <div class="item-price">{{$movement->description}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sortable-handler"></div>
                            </li>                            
                        @endforeach

                       </ul>
                    </div>

               <!-- Recent Jobs End -->
               
            </div>
         </div>    
      </div>
        
    </div>    
    <!-- Page Content End-->
    
    <!-- Menubar -->
   <div class="menubar-area">
      <div class="toolbar-inner menubar-nav">
         <a href="#" class="nav-link active">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z" fill="#130F26"/>
            </svg>
         </a>
         
         <a href="javascript:void(0);" class="menu-toggler">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M16.0755 2H19.4615C20.8637 2 22 3.14585 22 4.55996V7.97452C22 9.38864 20.8637 10.5345 19.4615 10.5345H16.0755C14.6732 10.5345 13.537 9.38864 13.537 7.97452V4.55996C13.537 3.14585 14.6732 2 16.0755 2Z" fill="#a19fa8"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z" fill="#a19fa8"/>
                </svg>
         </a>
      </div>
   </div>
   <!-- Menubar -->
   
   
   <!-- PWA Offcanvas -->
   <div class="offcanvas offcanvas-bottom pwa-offcanvas">
      <div class="container">
         <div class="offcanvas-body small">
            <img class="logo" src="{{URL::to('/base_app/assets')}}/images/icon.png" alt="">
            <h5 class="title">Jobie on Your Home Screen</h5>
            <p>Install Jobie -Job Portal on your home screen, and access it just like a regular app</p>
            <a href="javascrpit:void(0);" class="btn btn-sm btn-secondary pwa-btn">Add to Home Screen</a>
            <a href="javascrpit:void(0);" class="btn btn-sm pwa-close light btn-danger ms-2">Maybe later</a>
         </div>
      </div>
   </div>
   <div class="offcanvas-backdrop pwa-backdrop"></div>
   <!-- PWA Offcanvas End -->
   
</div>  
<!--**********************************
    Scripts
    ***********************************-->
<!-- Link for Version 1.2.6 -->
<script src="https://cdn.jsdelivr.net/npm/@ericblade/quagga2/dist/quagga.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@ericblade/quagga2/dist/quagga.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@ericblade/quagga2@1.2.6/dist/quagga.js"></script>
<script src="{{URL::to('/base_app/assets')}}/js/jquery.js"></script>
<script src="{{URL::to('/base_app/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{URL::to('/base_app/assets')}}/js/dz.carousel.js"></script><!-- Swiper -->
<script src="{{URL::to('/base_app/assets')}}/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
<script src="{{URL::to('/base_app/assets')}}/js/settings.js"></script>
<script src="{{URL::to('/base_app/assets')}}/js/custom.js"></script>
<!-- <script src="public/js/qrCode.js"></script> -->

<script>
        var _scannerIsRunning = false;

        function startScanner() {
            Quagga.init({
                inputStream: {
                    name: "Live",
                    type: "LiveStream",
                    target: document.querySelector('#scanner-container'),
                    constraints: {
                        width: 480,
                        height: 320,
                        facingMode: "environment"
                    },
                },
                decoder: {
                    readers: [
                        "code_128_reader",
                        "ean_reader",
                        "ean_8_reader",
                        "code_39_reader",
                        "code_39_vin_reader",
                        "codabar_reader",
                        "upc_reader",
                        "upc_e_reader",
                        "i2of5_reader"
                    ],
                    debug: {
                        showCanvas: true,
                        showPatches: true,
                        showFoundPatches: true,
                        showSkeleton: true,
                        showLabels: true,
                        showPatchLabels: true,
                        showRemainingPatchLabels: true,
                        boxFromPatches: {
                            showTransformed: true,
                            showTransformedBox: true,
                            showBB: true
                        }
                    }
                },

            }, function (err) {
                if (err) {
                    console.log(err);
                    return
                }

                console.log("Initialization finished. Ready to start");
                Quagga.start();

                // Set flag to is running
                _scannerIsRunning = true;
            });

            Quagga.onProcessed(function (result) {
                var drawingCtx = Quagga.canvas.ctx.overlay,
                drawingCanvas = Quagga.canvas.dom.overlay;

                if (result) {
                    if (result.boxes) {
                        drawingCtx.clearRect(0, 0, parseInt(drawingCanvas.getAttribute("width")), parseInt(drawingCanvas.getAttribute("height")));
                        result.boxes.filter(function (box) {
                            return box !== result.box;
                        }).forEach(function (box) {
                            Quagga.ImageDebug.drawPath(box, { x: 0, y: 1 }, drawingCtx, { color: "green", lineWidth: 2 });
                        });
                    }

                    if (result.box) {
                        Quagga.ImageDebug.drawPath(result.box, { x: 0, y: 1 }, drawingCtx, { color: "#00F", lineWidth: 2 });
                    }

                    if (result.codeResult && result.codeResult.code) {
                        Quagga.ImageDebug.drawPath(result.line, { x: 'x', y: 'y' }, drawingCtx, { color: 'red', lineWidth: 3 });
                    }
                }
            });


            Quagga.onDetected(function (result) {
                
                $('#numero-etiqueta').val(result.codeResult.code) ;
                $('#etiqueta').modal('show') ;
                buscaProd();
                Quagga.stop();
                $('#scaner').modal('hide') ;
                

            });
        }


        // Start/stop scanner
        document.getElementById("btn").addEventListener("click", function () {

            var campoEstoque = $('#id_stock_locations option').filter(':selected').text();

            if (_scannerIsRunning) {
                Quagga.stop();
            } else {

                if( campoEstoque != 'selecione'){
                    startScanner();
                    $('#local').html($('#id_stock_locations option').filter(':selected').text());
                    $('#id_stock_locations_to').val($('#id_stock_locations').val()) ;
                    $("#scaner").modal("show");
                }else{
                    alert('Selecione um Local de Destino!') ;
                }
                    
            }
            
        }, false);
</script>

<script type="text/javascript" src="{{URL::to('/js')}}/pwa.js?v11"></script>

<script>

    function digitar(){

        if( $('#id_stock_locations').val() == '' ) {
            alert('Selecione um Local de Destino!') ;
        } else {
            $('#local').html($('#id_stock_locations option').filter(':selected').text());
            $('#id_stock_locations_to').val($('#id_stock_locations').val()) ;
            
            $('#etiqueta').modal('show')
        }
    }

    function buscaProd(){
        
        var etiqueta = $('#numero-etiqueta').val() ;

        $.post( "/get-produto-app", { etiqueta: etiqueta })
        .done(function( data ) {
           
            if( data == '0' ) {
                $('#btmCadastra').prop('disabled', true);
                alert('Etiqueta não localizada no sistema!') ;
            } else {
                $('#btmCadastra').prop('disabled', false);
                alert('Equipamento ' + data + ' localizado!') ;
                $('#product_name').val(data) ;
                $('#produto').html(data) ;
            }

        });
    
    }


</script>


@include('modal_scaner')

<div class="modal fade" id="etiqueta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <form action="/save-exit-app" method="post" id="frmSaida" name="frmSaida">   
  @csrf
    <input type="hidden" name="id_stock_locations_to" id="id_stock_locations_to" value="">
    <input type="hidden" name="product_name" id="product_name" value="">
   <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Saída de Equipamento</h5>

      </div>
      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" ><span style="font-weight: bold;">Local de Destino:</span> <span id="local" ></span></label>
          </div>  
          <div class="form-group">
            <label for="recipient-name" class="col-form-label" ><span style="font-weight: bold;">Produto:</span> <span id="produto"></span></label>
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Digite a Etiqueta:</label>
            <input type="text" onblur="javascript:buscaProd()" class="form-control" id="numero-etiqueta" name="numero-etiqueta">
          </div>
          
          <div class="form-group">
            <label for="message-text" class="col-form-label">Observação:</label>
            <textarea class="form-control" name="observacao" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" onclick="javascript:$('#etiqueta').modal('hide')" data-dismiss="modal">Fechar</button>
        <button type="submit" disabled="disabled" id="btmCadastra" class="btn btn-primary">Registrar Saída</button>
      </div>
    </div>
  </div>
  </form>
</div>

@php 
    if( @$_GET['s'] == '1' ){
@endphp
        <script>
            alert('Registro de movimentação cadastrado com sucesso!') ;
        </script>
@php    
    }
@endphp



</body>

</html>