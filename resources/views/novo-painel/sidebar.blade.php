<div data-simplebar class="vertical-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <div class="dropdown mx-3 sidebar-user user-dropdown select-dropdown">
                            <button type="button" class="btn btn-light w-100 waves-effect waves-light border-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avatar-xs rounded-circle flex-shrink-0">
                                            <div class="avatar-title border bg-light text-primary rounded-circle text-uppercase user-sort-name">{{@Session::get('firstLetter')}}</div>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2 text-start">
                                        <h6 class="mb-1 fw-medium user-name-text"> Acessar Módulo: </h6>
                                        <p class="font-size-13 text-muted user-name-sub-text mb-0"> Fabiano Gomes </p>
                                    </div>
                                    <div class="flex-shrink-0 text-end">
                                        <i class="mdi mdi-chevron-down font-size-16"></i>
                                    </div>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end w-100">
                                <!-- item-->
                                
                                @if( ! empty(Session::get('menuDepto')) )
                                    @foreach(Session::get('menuDepto') as $key => $mainMenu)
                                    


                                        <a class="dropdown-item d-flex align-items-center px-3" href="/change-depto/<?=@$mainMenu['slug']?>">
                                            <div class="flex-shrink-0 me-2">
                                                <div class="avatar-xs rounded-circle flex-shrink-0">
                                                    <div class="avatar-title border rounded-circle text-uppercase dropdown-sort-name">{{@$mainMenu['name'][0]}}</div>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-0 dropdown-name"><?=@$mainMenu['name']?></h6>
                                                <p class="text-muted font-size-13 mb-0 dropdown-sub-desc"><?=@$mainMenu['description']?></p>
                                            </div>
                                        </a>
                                    @endforeach
                                @endif    
                                
                            </div>
                        </div>
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="/painel" class="waves-effect">
                                    <i class="uim uim-airplay"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            @if( ! empty(Session::get('nameSession')) )
                                @foreach(Session::get('menuMainSession') as $key => $mainMenu)
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="uim uim-comment-message"></i>
                                        <span>{{$mainMenu['name']}}</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="true">
                                        @if( ! empty(Session::get('nameSession')) )
                                            @php 
                                                $menu = Session::get('menuSession') ;
                                            @endphp
                                            @foreach($menu[$key] as $menuMenu)
                                                <li>
                                                    <a href="{{@$menuMenu['slug']}}">{{@$menuMenu['name']}}</a>
                                                </li>
                                            @endforeach
                                      @endif

                                    </ul>
                                </li>
                                @endforeach
                            @endif

                            <li>
                                <a href="/login" class="waves-effect">
                                    <i class="uim uim-airplay"></i><span class="badge rounded-pill bg-success float-end"></span>
                                    <span>Sair</span>
                                </a>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                </div>
    <!--
                <div class="dropdown px-3 sidebar-user sidebar-user-info">
                    <button type="button" class="btn w-100 px-0 border-0" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <div class="flex-shrink-0">
                                    <img src="{{URL::to('/')}}/assets-novo/images/users/avatar-2.jpg" class="img-fluid header-profile-user rounded-circle" alt="">
                            </div>

                            <div class="flex-grow-1 ms-2 text-start">
                                <span class="ms-1 fw-medium user-name-text-">Fabiano Gomes</span>
                            </div>

                            <div class="flex-shrink-0 text-end">
                                <i class="mdi mdi-dots-vertical font-size-16"></i>
                            </div>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                        <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                        <a class="dropdown-item" href="pages-faq.html"><i class="mdi mdi-lifebuoy text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                        <a class="dropdown-item" href="#"><span class="badge bg-primary mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                        <a class="dropdown-item" href="auth-lock-screen.html"><i class="mdi mdi-lock text-muted font-size-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                    </div>
                </div>
-->