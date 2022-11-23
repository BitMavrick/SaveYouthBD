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

                                        <tr>
                                            <td>Hello</td>
                                        </tr>

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