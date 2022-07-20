<div>
    <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

        <div class="container">

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="frontend/assets/img/logo-light.png" class="logo logo-display" alt="Logo">
                    <img src="frontend/assets/img/logo.png" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
                    <li>
                        <a class="smooth-menu" href="#home">Home</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#about">About</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#services">services</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#experiance">experiance</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#portfolio">portfolio</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#blog">blog</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="#contact">contact</a>
                    </li>
                    @guest
                    @if (Route::has('login'))
                    <li>
                        <a class="smooth-menu" href="{{ route('login') }}">login</a>
                    </li>
                    @endif
                    @endguest
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>

</div>
