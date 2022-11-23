<header class="navigation">
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

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('all.request') }}">Requests</a>
                                </li>

                                <li class="nav-item @@service">
                                    <a class="nav-link" href="{{ route('rehab') }}">Rehab Center</a>
                                </li>



                                <li class="nav-item @@project">
                                    <a class="nav-link" href="#" data-toggle="modal"
                                        data-target="#modal-update-staff">Edit
                                        Profile</a>
                                </li>

                            </ul>

                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <div class="my-2 my-md-0 ml-lg-4 text-center">
                                    <button type="submit" class="btn btn-solid-border btn-round-full">Sign out</button>
                                </div>
                            </form>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>