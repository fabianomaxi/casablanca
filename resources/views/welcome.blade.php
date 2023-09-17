<!doctype html>
<html lang="pt_br">

    <head>
        
        <meta charset="utf-8" />
        <title>Casablanca Sistema de Gestão</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{URL::to('/')}}/assets-novo/images/favicon.ico">

        <!-- Layout Js -->
        <script src="{{URL::to('/')}}/assets-novo/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="{{URL::to('/')}}/assets-novo/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{URL::to('/')}}/assets-novo/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{URL::to('/')}}/assets-novo/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />



    </head>

    <body>
        <div class="auth-maintenance d-flex align-items-center min-vh-100">
            <div class="bg-overlay bg-light"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="auth-full-page-content d-flex min-vh-100 py-sm-5 py-4">
                            <div class="w-100">
                                <div class="d-flex flex-column h-100 py-0 py-xl-3">
                                    <div class="text-center mb-4">
                                        <p class="text-muted mt-2">
                                            Sistema ERP Casablanca Online</p>
                                    </div>
    
                                    <div class="card my-auto overflow-hidden">
                                            <div class="row g-0">
                                                <div class="col-lg-6">
                                                    <div class="bg-overlay bg-primary"></div>
                                                    <div class="h-100 bg-auth align-items-end">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="p-lg-5 p-4">
                                                        <div>
                                                            <div class="text-center mt-1">
                                                                <h4 class="font-size-18">Seja Bem Vindo(a) !</h4>
                                                                <p class="text-muted">Informe os dados abaixo para acesso ao sistema.</p>
                                                            </div>
                                                            <form class="auth-input" method="post" id="frm_login" name="frm_login" action="/valida-login">
                                                                <div class="mb-2">
                                                                    <label for="username" class="form-label">E-mail</label>
                                                                    <input required="required" type="text" class="form-control" id="email" name="email" placeholder="Informe seu e-mail">
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label class="form-label" for="password-input">Senha</label>
                                                                    <input required="required" type="password" id="password" name="password" class="form-control" placeholder="Informe sua senha">
                                                                </div>
                                                                <div class="mt-3">
                                                                    <button class="btn btn-primary w-100" type="button" onclick="javascript:validateUser()">Login</button>
                                                                </div>
                                                                <div class="mt-4 text-center">
                                                                    <p class="mb-0">Não tem um usuário? <a href="/sign-up-user" class="fw-medium text-primary"> Cadastre Aqui </a> </p>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    
                                                    </div>
                                                </div>  
                                        </div>
                                    </div>
                                    <!-- end card -->
                                    
                                    <div class="mt-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> By <i class="mdi mdi-heart text-danger"></i> Casablanca Online</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
        
        <!-- JAVASCRIPT -->
        <script src="{{URL::to('/')}}/assets-novo/libs/jquery/jquery.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/metismenu/metisMenu.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/simplebar/simplebar.min.js"></script>
        <script src="{{URL::to('/')}}/assets-novo/libs/node-waves/waves.min.js"></script>

        <!-- Icon -->
        <script src="../../../unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

        <script src="{{URL::to('/')}}/assets-novo/js/app.js"></script>
        
        <!-- Js: validação do login -->
        <script src="{{URL::to('/')}}/js/login.js"></script>

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

</html>
