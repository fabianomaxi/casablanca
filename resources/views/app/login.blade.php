<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2023 12:54:44 GMT -->
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
	<link rel="shortcut icon" type="image/x-icon" href="{{URL::to('/base_app/assets')}}/images/favicon.png" />
    
    <!-- Title -->
	<title>Aplicativo Casa Blanca</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{URL::to('/base_app/assets')}}/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/base_app/assets')}}/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;family=Racing+Sans+One&amp;display=swap" rel="stylesheet">

    <link rel="manifest" href="{{URL::to('/js')}}/manifest.json?v05">

</head>   
<body>
<div class="page-wraper">

    <!-- Preloader -->
	<div id="preloader">
		<div class="spinner"></div>
	</div>
    <!-- Preloader end-->

    <!-- Page Content -->
    <div class="page-content">
        
        <!-- Banner -->
        <div class="banner-wrapper shape-1">
            <div class="container inner-wrapper">
                <h2 class="dz-title">Login - APP Casa Blanca</h2>
                <p class="mb-0">Informe seus dados de acesso</p>
            </div>
        </div>
        <!-- Banner End -->
        
        <div class="container">
			<div class="account-area">
				<form class="">
					<div class="input-group">
						<input type="text" placeholder="Seu e-mail" name="email" id="email" class="form-control">
					</div>
					<div class="input-group">
						<input type="password" placeholder="Sua Senha" name="password" id="password" class="form-control be-0">
						<span class="input-group-text show-pass"> 
							<i class="fa fa-eye-slash"></i>
							<i class="fa fa-eye"></i>
						</span>
					</div>
                    <!--<a href="forgot-password.html" class="btn-link d-block text-center">
                    Esqueceu a senha?</a>-->
					<div class="input-group">
						<a href="#" onclick="javascript:validateUser()" class="btn mt-2 btn-primary w-100 btn-rounded">Acessar Sistema</a>
					</div>
				</form>
                
			</div>
		</div>
    </div>
    <!-- Page Content End -->
    
    <!-- Footer -->
    <footer class="footer fixed">
        <div class="container">
            <a href="#" onclick="javascript:alert('Fale com seu gestor.')" class="btn btn-primary light btn-rounded text-primary d-block">
            Não tenho acesso</a>
        </div>
    </footer>
    <!-- Footer End -->
    
    <!-- Theme Color Settings -->
	<div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
        <div class="offcanvas-body small">
            <ul class="theme-color-settings">
                <li>
                    <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary" />
					<label for="primary_color_8"></label>
                    <span>Default</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green" />
					<label for="primary_color_2"></label>
                    <span>Green</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue" />
					<label for="primary_color_3"></label>
                    <span>Blue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink" />
					<label for="primary_color_4"></label>
                    <span>Pink</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow" />
					<label for="primary_color_5"></label>
                    <span>Yellow</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange" />
					<label for="primary_color_6"></label>
                    <span>Orange</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple" />
					<label for="primary_color_7"></label>
                    <span>Purple</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red" />
					<label for="primary_color_1"></label>
                    <span>Red</span>
                </li>
                <li>
					<input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue" />
					<label for="primary_color_9"></label>
                    <span>Lightblue</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal" />
					<label for="primary_color_10"></label>
                    <span>Teal</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime" />
					<label for="primary_color_11"></label>
                    <span>Lime</span>
                </li>
                <li>
                    <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange" />
					<label for="primary_color_12"></label>
                    <span>Deeporange</span>
                </li>
            </ul>
        </div>
    </div>
	<!-- Theme Color Settings End -->
</div>
<!--**********************************
    Scripts
***********************************-->
<script src="{{URL::to('/base_app/assets')}}/js/jquery.js"></script>
<script src="{{URL::to('/base_app/assets')}}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{URL::to('/base_app/assets')}}/js/settings.js"></script>
<script src="{{URL::to('/base_app/assets')}}/js/custom.js"></script>

<script type="text/javascript" src="{{URL::to('/js')}}/pwa.js?v11"></script>

<script>
    function validateUser() {

        var email = $("#email").val();
        var password = $("#password").val();

        $.ajax({
        url: "/validate-user",
        type: "get",
        data: {email: email, password: password},
        dataType: "json",
        success: function(response){

            if (response.success === true) {
                alert('Seja Bem Vindo(a)!');
                window.location.href = "/aplicativo";
            } else {
                alert(response.response);
            }

        },

        
    });

    }

</script>


</body>

<!-- Mirrored from jobie.dexignzone.com/mobile-app/xhtml/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 07 Mar 2023 12:54:45 GMT -->
</html>