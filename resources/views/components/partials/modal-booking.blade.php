<!-- For Booking -->
<div class="modal fade" id="booking" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Rehab Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('request.booking') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required name="name" type="text" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="Enter patient name">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input required name="phone" type="text" class="form-control" id="phone"
                            aria-describedby="emailHelp" placeholder="Enter phone number">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter email address">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input required name="address" type="text" class="form-control" id="address"
                            aria-describedby="emailHelp" placeholder="Enter email address">
                    </div>

                    <button type="submit" class="btn btn-primary">Send Request</button>
                </form>
            </div>

        </div>
    </div>
</div>


<!-- emergency -->

<!-- For Booking -->
<div class="modal fade" id="e-pickup" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Emergency Pickup Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('request.booking') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input required name="name" type="text" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="Enter patient name">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input required name="phone" type="text" class="form-control" id="phone"
                            aria-describedby="emailHelp" placeholder="Enter phone number">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input required name="email" type="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter email address">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input required name="address" type="text" class="form-control" id="address"
                            aria-describedby="emailHelp" placeholder="Enter email address">
                    </div>

                    <button type="submit" class="btn btn-primary">Send Request</button>
                </form>
            </div>

        </div>
    </div>
</div>