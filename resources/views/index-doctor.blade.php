<x-master>
    <x-partials.navbar-doctor />

    <x-partials.update-modal />

    <div class="container mt-4">

        @if(!Auth::user()->active and $profile_data->gender and $profile_data->experties)

        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Hello, there!</strong> Your Status is Inactive now. Patient will no longer interact with you.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <section id="main-content">
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

                                                @if(Auth::user()->active)
                                                <form action="{{route('doc.status')}}" method="POST">
                                                    @csrf
                                                    <input name="active" type="text" hidden value="0">
                                                    <button type="submit" class="btn btn-primary float-right" data-bs-toggle="tooltip" data-bs-placement="top" title="Your status is active now">
                                                        Set as Inactive
                                                    </button>
                                                </form>
                                                @else
                                                <form action="{{route('doc.status')}}" method="POST">
                                                    @csrf
                                                    <input name="active" type="text" hidden value="1">
                                                    <button type="submit" class="btn btn-warning float-right" data-bs-toggle="tooltip" data-bs-placement="top" title="Your status is inactive">Set
                                                        as
                                                        active
                                                    </button>
                                                </form>
                                                @endif



                                                @endif

                                            </div>

                                            <h1>Welcome,</h1>

                                            <h2>Dr. {{ Auth::user()->name }}</h2>
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
                                                        @if($profile_data->phone)
                                                        <div class="phone-content">
                                                            <span class="contact-title">Phone:</span>
                                                            <span class="phone-number">+8801629599859</span>
                                                        </div>
                                                        @endif
                                                        @if($profile_data->address)
                                                        <div class="address-content">
                                                            <span class="contact-title">Address:</span>
                                                            <span class="mail-address">{{$profile_data->address}}</span>
                                                        </div>
                                                        @endif
                                                        @if($profile_data->email)
                                                        <div class="email-content">
                                                            <span class="contact-title">Email:</span>
                                                            <span class="contact-email">{{ $profile_data->email }}</span>
                                                        </div>
                                                        @endif
                                                        @if($profile_data->website)
                                                        <div class="website-content">
                                                            <span class="contact-title">Website:</span>
                                                            <span class="contact-website">{{$profile_data->website}}</span>
                                                        </div>
                                                        @endif

                                                    </div>
                                                    @if($profile_data->gender or $profile_data->date_of_birth)
                                                    <div class="basic-information">
                                                        <h4>Basic information</h4>
                                                        @if($profile_data->date_of_birth)
                                                        <div class="birthday-content">
                                                            <span class="contact-title">Birthday:</span>
                                                            <span class="birth-date">{{$profile_data->date_of_birth}}
                                                            </span>
                                                        </div>
                                                        @endif
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
                        </div>
                    </div>
                </div>
            </div>

            @if(!$profile_data->gender or !$profile_data->experties or !$profile_data->educational_qualification)
            <div class="row my-4">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <h5 class="text-center">Please complete your profile before start your journey. Good luck!</h5>
                        <br>
                        <p class="text-center"><button type="submit" class="btn btn-solid-border btn-round-full" data-toggle="modal" data-target="#modal-update-doctor">Complete Profile</button></p>
                    </div>
                </div>
            </div>
            @endif

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <div class="card-title">
                            <h4>Upcoming Schedule </h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Subject</th>
                                            <th>Patient Name</th>
                                            <th>Age</th>
                                            <th>DateTime</th>
                                            <th>Meeting</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schedules as $schedule)
                                        @if($schedule->doctor_id == Auth::user()->id and $schedule->approve == 1)
                                        <tr>
                                            <td>{{ $schedule->subject }}</td>
                                            <td>
                                                {{ $schedule->patient_name }}
                                            </td>
                                            <td>{{ $schedule->patient_age }}</td>
                                            <td>{{ $schedule->schedule_time }}</td>
                                            <td><a href="{{ $schedule->meet_link }}"> <span class="badge badge-success">Join Now</span></td>
                                        </tr>
                                        @endif
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>


    <x-partials.footer />
</x-master>