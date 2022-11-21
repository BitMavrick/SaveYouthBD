<!-- For Doctor -->
<div class="modal fade" id="modal-update-doctor" tabindex="-1" role="dialog" aria-labelledby="modal-register"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Profile.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('doc.update')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                            placeholder="Enter your name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email" value="{{ $profile_data->email }}">

                    </div>

                    <div class="form-group">
                        <label for="name">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="name" aria-describedby="emailHelp"
                            placeholder="Enter your phone number" value="{{ $profile_data->phone }}">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control form-group">
                            <option selected disabled>Select gender</option>
                            <option {{ $profile_data->gender === "male" ? "selected" : "" }} value="male">Male</option>
                            <option {{ $profile_data->gender === "female" ? "selected" : "" }} value="female">Female
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address" aria-describedby="emailHelp"
                            placeholder="Enter your living address" value="{{ $profile_data->address }}">
                    </div>

                    <div class="form-group">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                            aria-describedby="emailHelp" placeholder="Enter your living address"
                            value="{{ $profile_data->date_of_birth }}">
                    </div>

                    <div class="form-group">
                        <label for="educational_qualification">Educational Qualification</label>
                        <input type="text" name="educational_qualification" class="form-control"
                            id="educational_qualification" aria-describedby="emailHelp"
                            placeholder="Enter your educational qualification"
                            value="{{ $profile_data->educational_qualification }}">
                    </div>

                    <div class="form-group">
                        <label for="experties">Experties</label>
                        <input type="text" name="experties" class="form-control" id="experties"
                            aria-describedby="emailHelp" placeholder="Enter your experties"
                            value="{{ $profile_data->experties }}">
                    </div>

                    <div class="form-group">
                        <label for="working_organization">Organization</label>
                        <input type="text" name="working_organization" class="form-control" id="working_organization"
                            aria-describedby="emailHelp" placeholder="Enter your current working organization"
                            value="{{ $profile_data->working_organization }}">
                    </div>

                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" name="website" class="form-control" id="website" aria-describedby="emailHelp"
                            placeholder="Enter your personal website address" value="{{ $profile_data->website }}">
                    </div>

                    <div class="form-group">
                        <label for="description">About You</label>
                        <input type="text" name="description" class="form-control" id="description"
                            aria-describedby="emailHelp" placeholder="Write something about yourself"
                            value="{{ $profile_data->description }}">
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- For Staff -->
<div class="modal fade" id="modal-update-staff" tabindex="-1" role="dialog" aria-labelledby="modal-register"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Update Profile.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('doc.update')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp"
                            placeholder="Enter your name" value="{{ Auth::user()->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" placeholder="Enter email" value="{{ $profile_data->email }}">

                    </div>

                    <div class="form-group">
                        <label for="name">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="name" aria-describedby="emailHelp"
                            placeholder="Enter your phone number" value="{{ $profile_data->phone }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>
</div>