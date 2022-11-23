<x-master>
    <x-partials.navbar />
    <x-partials.schedule-modal />

    <div class="container mt-4">
        <section class="main-content">

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-profile">
                                <div class="row">
                                    @if($profile_data->gender)
                                    <div class="col-lg-4">
                                        <div class="user-photo m-b-30">
                                            @if($profile_data->gender == 'male')
                                            <img class="img-fluid" src="/images/doctor-male.jpg" alt="" />
                                            @else
                                            <img class="img-fluid" src="/images/doctor-female.jpg" alt="" />
                                            @endif
                                        </div>

                                        @if($profile_data->working_organization)
                                        <div class="user-work">
                                            <h4 class="mt-2">Working on:</h4>
                                            <div class="work-content">
                                                <h3> {{ $profile_data->working_organization }} </h3>
                                            </div>
                                        </div>
                                        @endif

                                        @if($profile_data->description)
                                        <div class="user-work">
                                            <h6 class="mt-2">About me:</h6>
                                            <div class="work-content">
                                                <p> {{ $profile_data->description }} </p>
                                            </div>
                                        </div>
                                        @endif

                                    </div>
                                    @endif

                                    <div class="col-lg-8">
                                        <div class="user-profile-name">
                                            <div>
                                                @if($profile_data->gender or $profile_data->experties or
                                                $profile_data->educational_qualification)

                                                @if($user->active)
                                                <form action="{{route('doc.status')}}" method="POST">
                                                    @csrf
                                                    <input name="active" type="text" hidden value="0">
                                                    <button type="submit" disabled class="btn btn-primary float-right"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Doctor active now">
                                                        Active
                                                    </button>
                                                </form>
                                                @else
                                                <form action="{{route('doc.status')}}" method="POST">
                                                    @csrf
                                                    <input name="active" type="text" hidden value="1">
                                                    <button type="submit" disabled class="btn btn-warning float-right"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Your status is inactive">Inactive
                                                    </button>
                                                </form>
                                                @endif



                                                @endif

                                            </div>



                                            <h2>Dr. {{ $user->name }}</h2>
                                        </div>

                                        <div class="user-job-title">
                                            @if($profile_data->experties)
                                            <h5> - {{ $profile_data->experties }} expert</h5>
                                            @endif
                                        </div>
                                        @if($profile_data->address)
                                        <div class="user-Location">
                                            <i class="ti-location-pin"></i> {{$profile_data->address}}
                                        </div>
                                        @endif
                                        <div class="ratings">
                                            <h4>Ratings</h4>
                                            <div class="rating-star">
                                                <span>0.0</span>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star color-primary"></i>
                                                <i class="ti-star"></i>
                                            </div>
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

                                                        @if($profile_data->address)
                                                        <div class="address-content">
                                                            <span class="contact-title">Address:</span>
                                                            <span class="mail-address">{{$profile_data->address}}</span>
                                                        </div>
                                                        @endif
                                                        @if($profile_data->email)
                                                        <div class="email-content">
                                                            <span class="contact-title">Email:</span>
                                                            <span
                                                                class="contact-email">{{ $profile_data->email }}</span>
                                                        </div>
                                                        @endif
                                                        @if($profile_data->website)
                                                        <div class="website-content">
                                                            <span class="contact-title">Website:</span>
                                                            <span
                                                                class="contact-website">{{$profile_data->website}}</span>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    @if($profile_data->gender or $profile_data->date_of_birth)
                                                    <div class="basic-information">
                                                        <h4>Basic information</h4>

                                                        @if($profile_data->gender)
                                                        <div class="gender-content">
                                                            <span class="contact-title">Gender:</span>
                                                            <span class="gender">{{ $profile_data->gender }}</span>
                                                        </div>
                                                        @endif
                                                    </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <button {{ $user->active ? "" : "disabled"}} class="btn btn-primary float-right"
                                    data-toggle="modal" data-target="#schedule">
                                    Create Appointment
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