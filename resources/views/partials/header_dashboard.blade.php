<header class="main_menu {{ isset($breadcrumb) ? 'single_page_menu' : 'home_menu' }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand logo_1" href="{{ route('home') }}"> <img src="{{ asset('img/single_page_logo.png') }}" alt="logo"> </a>
                    <a class="navbar-brand logo_2" href="{{ route('home') }}"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse main-menu-item justify-content-end"
                        id="navbarSupportedContent">
                        <ul class="navbar-nav align-items-center">
                        
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="/dashboard">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/settings">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/enrolled-course">My Courses</a>
                                </li>
                                <li class="d-none d-lg-block">
                                    <a class="btn_1" href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">Logout</a>
                                    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                                
                            @endauth
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>