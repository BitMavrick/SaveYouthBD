<x-master>
    <x-partials.navbar-staff />
    <x-partials.modal-rehab />
    <div class="container mt-4">
        <section id="main-content">
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <div class="card-title">
                            <h4>Rehab Center List </h4>
                            <br>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Create
                                New</button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                            <th>Mail</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rehabs as $rehab)

                                        <!-- Modal -->
                                        <div class="modal fade" id="update{{$rehab->id}}" tabindex="-1" role="dialog"
                                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLongTitle">Craete new
                                                            Rehab Center</h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('update.rehab') }}" method="POST">
                                                            @csrf
                                                            <input type="text" hidden name="id"
                                                                value="{{ $rehab->id }}">
                                                            <div class="form-group">
                                                                <label for="name">Center Name</label>
                                                                <input required type="text" name="name"
                                                                    class="form-control" id="name"
                                                                    value="{{$rehab->name}}"
                                                                    aria-describedby="emailHelp"
                                                                    placeholder="Enter rehab center name">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="address">Enter Address</label>
                                                                <input required type="text" name="address"
                                                                    value="{{$rehab->address}}" class="form-control"
                                                                    id="address" aria-describedby="emailHelp"
                                                                    placeholder="Enter address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="phone">Phone Number</label>
                                                                <input required type="text" name="phone"
                                                                    value="{{$rehab->phone}}" class="form-control"
                                                                    id="phone" aria-describedby="emailHelp"
                                                                    placeholder="Enter phone number">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="email">Enter Email</label>
                                                                <input required type="email" name="email"
                                                                    value="{{$rehab->email}}" class="form-control"
                                                                    id="email" aria-describedby="emailHelp"
                                                                    placeholder="Enter Email address">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="age">Minimum Age Allowed</label>
                                                                <input required type="number" name="min_age"
                                                                    value="{{$rehab->min_age}}" class="form-control"
                                                                    id="age" aria-describedby="emailHelp"
                                                                    placeholder="Enter the minimum age allowed">
                                                            </div>

                                                            <div class="form-group">
                                                                <label for="des">Description</label>
                                                                <input required type="text" name="description"
                                                                    value="{{$rehab->description}}" class="form-control"
                                                                    id="des" aria-describedby="emailHelp"
                                                                    placeholder="Enter Email address">
                                                            </div>

                                                            <button type="submit"
                                                                class="btn btn-primary">Update</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                        <tr>
                                            <td>{{ $rehab->name }}</td>
                                            <td>{{ $rehab->address }}</td>
                                            <td>{{ $rehab->phone }}</td>
                                            <td>{{ $rehab->email }}</td>
                                            <td><a href="" data-toggle="modal" data-target="#update{{$rehab->id}}"><span
                                                        class="badge badge-success">update</span></a></td>
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