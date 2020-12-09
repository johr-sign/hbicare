<header class="angli-care-header">
    <div class="navbar-wrapper--brand">
      <nav class="navbar navbar-expand-lg navbar-dark bd-navbar justify-content-around" id="main_nav">
        <div class="container-fluid">
            <a class="navbar-brand  site-logo site-logo--header" href="{{ url('/') }}">
                Anglicare
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                   
                </ul>
                <ul class="nav nav-fill flex-column flex-md-row main-navigation-list">
                  <li class="nav-item nav-item-top">
                    <a class="nav-link nav-link-top nav-item-top" id="home" href="{{ url('/home') }}">
                        Home
                    </a>
                  </li>
                  <li class="nav-item nav-item-top">
                    <a class="nav-link nav-link-top nav-item-top" id="aboutus" href="{{ url('/about-us')}}">
                        About Us
                    </a>
                  </li>
                  <li class="nav-item nav-item-top">
                    <a class="nav-link nav-link-top nav-item-top" id="whatweoffer" href="{{ url('/whatweoffer') }}">
                        What we Offer
                    </a>
                  </li>
                  <li class="nav-item nav-item-top">
                    <a class="nav-link nav-link-top nav-item-top" id="getinvolved" href="{{ url('/getInvovled') }}">
                      Get Involved
                    </a>
                  </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item nav-item-top">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item nav-item-top">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
      </nav>
    </div>
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ url('/') }}">
               <i class="fa fa-home"> Home </i>
             </a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ url('/about-us') }}">
                About Us
            </a>
        </li>
      </ol>
    </nav>
</header>