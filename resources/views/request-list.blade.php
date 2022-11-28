<x-master>
    <x-partials.navbar />

    <div class="container mt-4">
        <section id="main-content">

            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="card p-4">
                        <div class="card-title">
                            <h4>Your Pickup requests </h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>address</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($requests as $request)
                                        <tr>
                                            <td>{{$request->name}}</td>
                                            <td>
                                                {{$request->address}}
                                            </td>
                                            <td>{{ $request->phone }}</td>
                                            <td>{{ $request->email }}</< /td>
                                            <td><a href="{{ route('delete.request', $request->id) }}"><span
                                                        class="badge badge-danger">Dissmiss</span></a></td>
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