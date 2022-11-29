<x-master>
    <x-partials.navbar-staff />
    <x-partials.update-modal />
    <div class="container mt-4">
        <section id="main-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="user-profile">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="user-profile-name">
                                            <h1>Hello,</h1>
                                            <h2>{{ Auth::user()->name }}</h2>
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
                                            <th>Patient Name</th>
                                            <th>Doctor Name</th>
                                            <th>DateTime</th>
                                            <th>Status</th>
                                            <th>Meeting</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schedules as $schedule)
                                        <!-- Modal -->
                                        <div class="modal fade" id="modal{{ $schedule->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Set Meeting
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('set.meeting') }}" method="POST">
                                                            @csrf
                                                            <input type="text" hidden name="meeting_id"
                                                                value="{{$schedule->id}}">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">Meeting Link</label>
                                                                <input type="text" required name="meet_link"
                                                                    class="form-control" id="exampleInputEmail1"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Paste the meeting link here"
                                                                    value="{{$schedule->meet_link}}">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary">Approve</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <tr>
                                            <td>{{ $schedule->patient_name }}</td>
                                            @foreach($doctors as $doctor)
                                            @if($doctor->id == $schedule->doctor_id)
                                            <td><a
                                                    href=" {{ route('profile.doc', $doctor->id) }}">{{ $doctor->name }}</a>
                                            </td>
                                            @endif
                                            @endforeach
                                            <td>{{ $schedule->schedule_time }}</td>
                                            @if($schedule->approve == 0)
                                            <td>
                                                <span class="badge badge-secondary">pending</span>
                                            </td>
                                            @elseif($schedule->approve == 1)
                                            <td>
                                                <span class="badge badge-success">approved</span>
                                            </td>
                                            @elseif($schedule->approve == 2)
                                            <td>
                                                <span class="badge badge-danger">rejected</span>
                                            </td>
                                            @elseif($schedule->approve == 3)
                                            <td>
                                                <span class="badge badge-success">Finished</span>
                                            </td>
                                            @endif

                                            @if($schedule->meet_link == null)
                                            <td><a href="" data-toggle="modal"
                                                    data-target="#modal{{ $schedule->id }}"><span
                                                        class="badge badge-success">Set
                                                        Now</span></a></td>
                                            @else

                                            <td><a href="" data-toggle="modal"
                                                    data-target="#modal{{ $schedule->id }}"><span
                                                        class="badge badge-warning">Renew</span></a>
                                            </td>
                                            @endif

                                            <td>
                                                @if($schedule->approve == 0 or $schedule->approve == 1)
                                                <form action="{{route('reject.schedule')}}" method="POST">
                                                    @csrf
                                                    <input type="text" hidden name="meeting_id"
                                                        value="{{$schedule->id}}">

                                                    <button type="submit"><span
                                                            class="badge badge-danger">Reject</span></button>
                                                </form>
                                                @else
                                                <span class="badge badge-danger">rejected</span>
                                                @endif
                                            </td>
                                        </tr>

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