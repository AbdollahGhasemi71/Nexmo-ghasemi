<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="{{asset('images/header/'.$header->image)}}" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.blade.php">{{$header->title}}</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="{{$header->linkedin}}" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                <a href="{{$header->github}}" class="linkedin"><i class="bx bxl-github"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li class="active"><a href="#home"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li>
                <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header>
