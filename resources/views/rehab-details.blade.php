<x-master>
    @if(Auth::user()->role == 'patient')
    <x-partials.navbar />
    @elseif(Auth::user()->role == 'staff')
    <x-partials.navbar-staff />
    @endif

    <!-- Modal -->
    <div class="modal fade" id="update_rehab" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Craete new
                        Rehab Center</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update.rehab') }}" method="POST">
                        @csrf
                        <input type="text" hidden name="id" value="{{ $rehab->id }}">
                        <div class="form-group">
                            <label for="name">Center Name</label>
                            <input required type="text" name="name" class="form-control" id="name"
                                value="{{$rehab->name}}" aria-describedby="emailHelp"
                                placeholder="Enter rehab center name">
                        </div>

                        <div class="form-group">
                            <label for="address">Enter Address</label>
                            <input required type="text" name="address" value="{{$rehab->address}}" class="form-control"
                                id="address" aria-describedby="emailHelp" placeholder="Enter address">
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input required type="text" name="phone" value="{{$rehab->phone}}" class="form-control"
                                id="phone" aria-describedby="emailHelp" placeholder="Enter phone number">
                        </div>

                        <div class="form-group">
                            <label for="email">Enter Email</label>
                            <input required type="email" name="email" value="{{$rehab->email}}" class="form-control"
                                id="email" aria-describedby="emailHelp" placeholder="Enter Email address">
                        </div>

                        <div class="form-group">
                            <label for="age">Minimum Age Allowed</label>
                            <input required type="number" name="min_age" value="{{$rehab->min_age}}"
                                class="form-control" id="age" aria-describedby="emailHelp"
                                placeholder="Enter the minimum age allowed">
                        </div>

                        <div class="form-group">
                            <label for="des">Description</label>
                            <input required type="text" name="description" value="{{$rehab->description}}"
                                class="form-control" id="des" aria-describedby="emailHelp"
                                placeholder="Enter Email address">
                        </div>

                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


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
                            @if(Auth::user()->role == 'patient')
                            <a href="#">
                                <button class="btn btn-primary float-right" data-toggle="modal" data-target="#booking">
                                    Send Booking Request
                                </button>
                            </a>
                            <a href="{{ route('home') }}">
                                <button class="btn btn-info float-right">
                                    Go Homepage
                                </button>
                            </a>
                            @elseif(Auth::user()->role == 'staff')

                            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#update_rehab">
                                Update
                            </button>

                            <form action="{{ route('delete.rehab') }}">
                                @csrf
                                <input type="text" hidden name="id" value="{{ $rehab->id }}">
                                <button class="btn btn-danger float-right">
                                    Delete
                                </button>

                            </form>

                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-partials.footer />
</x-master>