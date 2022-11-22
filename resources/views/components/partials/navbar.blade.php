<header class="navigation">
    <div class="header-top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-2 col-md-4">
                    <div class="header-top-socials text-center text-lg-left text-md-left">
                        <a href="https://www.facebook.com/themefisher" aria-label="facebook"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/themefisher" aria-label="twitter"><i
                                class="fab fa-twitter"></i></a>
                        <a href="https://github.com/themefisher/" aria-label="github"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-8 text-center text-lg-right text-md-right">
                    <div class="header-top-info mb-2 mb-md-0 float-right">
                        <a href="tel:+23-345-67890">Call Us : <span>+23-345-67890</span></a>
                        <a href="mailto:support@gmail.com"><i
                                class="fas fa-envelope mr-2"></i><span>support@gmail.com</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg px-0 py-4">
                        <a class="navbar-brand" href="{{ route('home') }}">
                            Save<span>Youth</span>BD.
                        </a>

                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>

                        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="nav-item @@service">
                                    <a class="nav-link" href="service.html">schedule</a>
                                </li>
                                <li class="nav-item @@project">
                                    <a class="nav-link" href="{{ route('profile') }}">Profile</a>
                                </li>


                                @if(Auth::user())

                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <div class="my-2 my-md-0 ml-lg-4 text-center">
                                        <button type="submit" class="btn btn-solid-border btn-round-full">Sign
                                            out</button>
                                    </div>
                                </form>
                                @else
                                <li class="nav-item @@contact">
                                    <a class="nav-link" href="#" data-toggle="modal"
                                        data-target="#modal-login">Login</a>
                                </li>
                                <div class="my-2 my-md-0 ml-lg-4 text-center">
                                    <a href="#" class="btn btn-solid-border btn-round-full" data-toggle="modal"
                                        data-target="#modal-register">Register now</a>
                                </div>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>