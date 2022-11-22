<!-- Modal -->
<div class="modal fade" id="schedule" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Create a new appointment</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input required type="text" class="form-control" id="subject" aria-describedby="emailHelp"
                            placeholder="Enter the topic for set schedule">

                    </div>

                    <div class="form-group">
                        <label for="doctor">Doctor</label>
                        <input disabled type="email" class="form-control" id="doctor" aria-describedby="emailHelp"
                            value="{{ $user->name }}">
                        <small id="emailHelp" class="form-text text-muted">The appointment will be set up with this
                            doctor</small>
                    </div>

                    <div class="form-group">
                        <label for="patient">Patient Name</label>
                        <input type="text" class="form-control" id="patient" aria-describedby="emailHelp"
                            placeholder="Enter the name of the patient">
                    </div>

                    <div class="form-group">
                        <label for="age">Patient age</label>
                        <input type="text" class="form-control" id="age" aria-describedby="emailHelp"
                            placeholder="Enter the age of the patient">
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender</label>
                        <select name="gender" class="form-control form-group">
                            <option selected disabled>Select gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female
                            </option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="time">Set Time for appointment</label>
                        <input type="datetime-local" class="form-control" id="time" aria-describedby="emailHelp"
                            placeholder="Enter the name of the patient">
                    </div>


                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>

        </div>
    </div>
</div>