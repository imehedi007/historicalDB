<header class="header-classic">

    <div class="container-xl">
        <!-- header top -->
        <div class="header-top">
            <div class="row align-items-center">

                <div class="col-md-4 col-xs-12">
                    <!-- site logo -->
                    <a class="navbar-brand" href="classic.html"><img src="images/logo.svg" alt="logo" /></a>
                </div>

                <div class="col-md-8 d-none d-md-block">
                    <!-- social icons -->
                    <ul class="social-icons list-unstyled list-inline mb-0 float-end">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-medium"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg">
        <!-- header bottom -->
        <div class="header-bottom  w-100">

            <div class="container-xl">
                <div class="d-flex align-items-center">
                    <div class="collapse navbar-collapse flex-grow-1">
                        <!-- menus -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">Home</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('about')}}">About</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{route('contact')}}">Contact</a>
                            </li>

                        </ul>
                    </div>

                    <!-- header buttons -->
                    <div class="header-buttons">

                        <button class="burger-menu icon-button ms-2 float-end float-lg-none">
                            <span class="burger-icon"></span>
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </nav>

</header>
