<x-master>
    <x-partials.navbar />

    <div class="container mt-4">
        <section class="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-profile">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="user-profile-name">

                                            <h2>{{ $rehab->name }}</h2>
                                        </div>

                                        <div class="user-job-title">
                                            <h5> - {{ $rehab->address }}</h5>
                                        </div>

                                        <div class="user-job-title">
                                            <p>{{ $rehab->description }}</p>
                                        </div>

                                        <div class="custom-tab user-profile-tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                                                    <a href="#1" aria-controls="1" role="tab" data-toggle="tab">
                                                        <h6>About</h6>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane active" id="1">
                                                    <div class="contact-information">
                                                        <h4>Contact information</h4>

                                                        <div class="email-content">
                                                            <span class="contact-title">Phone:</span>
                                                            <span class="contact-email">{{ $rehab->phone }}</span>
                                                        </div>
                                                        <div class="email-content">
                                                            <span class="contact-title">Email:</span>
                                                            <span class="contact-email">{{ $rehab->email }}</span>
                                                        </div>


                                                    </div>

                                                    <div class="basic-information">
                                                        <h4>Basic information</h4>


                                                        <div class="gender-content">
                                                            <span class="contact-title">Minimun Age:</span>
                                                            <span class="gender">{{ $rehab->min_age }}</span>
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#schedule">
                                    Send Booking Request
                                </button>
                            </a>
                            <a href="{{ route('home') }}">
                                <button class="btn btn-info float-right">
                                    Go Homepage
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-partials.footer />
</x-master>