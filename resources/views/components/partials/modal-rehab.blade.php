<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Craete new Rehab Center</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('create.rehab') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Center Name</label>
                        <input required type="text" name="name" class="form-control" id="name"
                            aria-describedby="emailHelp" placeholder="Enter rehab center name">
                    </div>

                    <div class="form-group">
                        <label for="address">Enter Address</label>
                        <input required type="text" name="address" class="form-control" id="address"
                            aria-describedby="emailHelp" placeholder="Enter address">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input required type="text" name="phone" class="form-control" id="phone"
                            aria-describedby="emailHelp" placeholder="Enter phone number">
                    </div>

                    <div class="form-group">
                        <label for="email">Enter Email</label>
                        <input required type="email" name="email" class="form-control" id="email"
                            aria-describedby="emailHelp" placeholder="Enter Email address">
                    </div>

                    <div class="form-group">
                        <label for="age">Minimum Age Allowed</label>
                        <input required type="number" name="min_age" class="form-control" id="age"
                            aria-describedby="emailHelp" placeholder="Enter the minimum age allowed">
                    </div>

                    <div class="form-group">
                        <label for="des">Description</label>
                        <input required type="text" name="description" class="form-control" id="des"
                            aria-describedby="emailHelp" placeholder="Enter Email address">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>

        </div>
    </div>
</div>