<header id="page-topbar">
        <div class="navbar-header container">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="{{route('frontend.home.index')}}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="" alt="" height="42">
                        </span>
                        <span class="logo-lg">
                            <img src="" alt="" height="42">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="" alt="" height="42">
                        </span>
                        <span class="logo-lg">
                            <img src="" alt="" height="59">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-toggle="collapse" data-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>


                <!-- App Search-->


        
            </div>
       

  
            <div class="d-flex">

                
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
{{--                         {{ "{$user->directory}/resized/{$user->filename}" }}
 --}}                         
                        <img class="rounded-circle header-profile-user" src="{{\Auth::user()->avatar}}"
                            alt="Header Avatar">
                          {{--   @else
                            <img class="rounded-circle header-profile-user" src="{{asset('assets/images/Admin-icon.png')}}"
                            alt="Header Avatar"> --}}
                          <span class="d-none d-xl-inline-block ml-1">{{ Str::title(\Auth::user()->first_name) }} {{ Str::title(\Auth::user()->last_name) }}</span>  
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item text-secondary" href="{{ route('system.logout') }}"><i class="text-secondary bx bx-power-off font-size-16 align-middle mr-1 text-secondary"></i> Logout</a>
                    </div>
                </div>
    
            </div>
        </div>
    </header>

        
