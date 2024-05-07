<nav class="navbar navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ route('home') }}">
                    <i class="fa-solid fa-venus"></i>
                        <span>SHeRise</span>
                    </a>

                    <div class="d-lg-none ms-auto me-4">
                        <a href="#top" class="navbar-icon bi-person smoothscroll"></a>
                    </div>
    
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
    
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-lg-5 me-lg-auto">
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('home') }}">Beranda</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('network') }}">SHeRise Network</a>
                            </li>
    
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('edukasi') }}">Edukasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link click-scroll" href="{{ route('marketplace') }}">Marketplace</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link click-scroll btn custom-btn-report" href="{{ route('pengaduan') }}">Pengaduan</a>
                            </li>

                            <li class="nav-item dropdown">
                            @auth
                                <a class="nav-link dropdown-toggle custom-btn" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-user pe-2"></i>{{ Auth::user()->name }}</a>
                            @else
                            <a class="nav-link dropdown-toggle custom-btn" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Masuk</a>
                            @endauth  
                            @auth
                                <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('profile.edit')}}"><i class="fa-solid fa-user pe-2"></i>Akun</a></li>

                                    <li><form method="POST" action="{{ route('logout') }}">@csrf<button type="submit" class="dropdown-item"><i class="fa-solid fa-right-from-bracket pe-2"></i>Log Out</button></form></li>
                                </ul>
                            @else
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                    <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket pe-2"></i>LOGIN</a></li>

                                    <li><a class="dropdown-item" href="{{ route('register') }}"><i class="fa-solid fa-plus pe-2"></i>DAFTAR</a></li>
                                </ul>
                            @endauth

                              
                            </li>
                        </ul>

                        <!-- @auth
                        <a class="custom-btn" href="#">
                        <span><i class="fa-solid fa-user"></i>
                        {{ Auth::user()->name }}</span>
                        </a>
                        <a class="custom-btn">
                        <i class="fa-solid fa-right-from-bracket"></i>
                        Log out
                        </a>
                        @else

                        @endauth -->

                    </div>
                </div>
            </nav>