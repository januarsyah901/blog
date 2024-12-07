<nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="/">
                <img src="./assets/img/logo-dark@2x.png" srcset="./assets/img/logo-dark@2x.png 2x" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas-nav">
            <div class="offcanvas-header d-lg-none d-xl-none">
                <a href="./index.html"><img src="./assets/img/logo-light.png" srcset="./assets/img/logo-light@2x.png 2x" alt="" /></a>
                <button type="button" class="btn-close btn-close-white offcanvas-close offcanvas-nav-close" aria-label="Close"></button>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item"><x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link></li>
                <li class="nav-item"><x-nav-link href="/posts" :active="request()->is('posts')">Blog</x-nav-link></li>
                <li class="nav-item"><x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link></li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto" data-sm-skip="true">
                <li class="nav-item dropdown language-select text-uppercase">
                    <a class="nav-link dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">En</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="dropdown-item" href="#">En</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">De</a></li>
                        <li class="nav-item"><a class="dropdown-item" href="#">Es</a></li>
                    </ul>
                </li>
                <li class="nav-item d-none d-md-block">
                    <a href="./contact.html" class="btn btn-sm btn-primary rounded-pill">Contact</a>
                </li>
                <li class="nav-item d-lg-none">
                    <div class="navbar-hamburger"><button class="hamburger animate plain" data-toggle="offcanvas-nav"><span></span></button></div>
                </li>
            </ul>
            <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-other -->
    </div>
    <!-- /.container -->
</nav>
<!-- /.navbar -->
