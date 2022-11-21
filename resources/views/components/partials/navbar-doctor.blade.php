<header class="navigation">

    <div id="navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg px-0 py-4">
                        <a class="navbar-brand" href="index.html">
                            Save<span>Youth</span>BD.
                        </a>

                        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="fa fa-bars"></span>
                        </button>

                        <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item dropdown @@about">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">About <i
                                            class="fas fa-chevron-down small"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown03">
                                        <li>
                                            <a class="dropdown-item @@company" href="about.html">Our company</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item @@pricing" href="pricing.html">Pricing</a>
                                        </li>

                                        <li class="dropdown dropdown-submenu dropright">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0301"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Sub Menu</a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdown0301">
                                                <li>
                                                    <a class="dropdown-item" href="index.html">Submenu 01</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index.html">Submenu 02</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item @@service">
                                    <a class="nav-link" href="service.html">Services</a>
                                </li>
                                <li class="nav-item @@project">
                                    <a class="nav-link" href="project.html">Portfolio</a>
                                </li>
                                <li class="nav-item dropdown @@blog">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Blog <i
                                            class="fas fa-chevron-down small"></i></a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdown05">
                                        <li>
                                            <a class="dropdown-item @@blogGrid" href="blog-grid.html">Blog Grid</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item @@blogSidebar" href="blog-sidebar.html">Blog
                                                with Sidebar</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item @@blogSingle" href="blog-single.html">Blog
                                                Single</a>
                                        </li>

                                        <li class="dropdown dropdown-submenu dropleft">
                                            <a class="dropdown-item dropdown-toggle" href="#!" id="dropdown0501"
                                                role="button" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">Sub Menu</a>

                                            <ul class="dropdown-menu" aria-labelledby="dropdown0501">
                                                <li>
                                                    <a class="dropdown-item" href="index.html">Submenu 01</a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item">Submenu 02</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-item @@project">
                                    <a class="nav-link" data-toggle="modal" href="#"
                                        data-target="#modal-update-doctor">Edit
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