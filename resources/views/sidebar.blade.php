<div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="/painel">
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
                  @if( ! empty(Session::get('nameSession')) )
                     @foreach(Session::get('menuMainSession') as $key => $mainMenu)
                        <li>
                           <a href="#mailbox_{{$key}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-mail-open-fill"></i><span>
                                 {{$mainMenu['name']}}
                           </span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                           <ul id="mailbox_{{$key}}" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                              @if( ! empty(Session::get('nameSession')) )
                                 @php 
                                    $menu = Session::get('menuSession') ;
                                 @endphp
                                 @foreach($menu[$key] as $menuMenu)
                                    <li><a href="{{@$menuMenu['slug']}}"><i class="ri-inbox-fill"></i>{{@$menuMenu['name']}}</a></li>
                                 @endforeach
                              @endif
                           </ul>
                        </li>    
                     @endforeach
                  

                  @endif

                     <li><a href="/import-data" class="iq-waves-effect"><i class="lab la-mendeley"></i><span>Importar Dados</span></a></li>
                     <li><a href="/logout-sys" class="iq-waves-effect"><i class="ri-group-fill"></i><span>Sair</span></a></li>                    
                                        
                    
                     
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>