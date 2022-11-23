<x-master>
    <x-partials.navbar />

    <div class="container mt-4">
        <section id="main-content">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($schedules as $schedule)
                                        @if($schedule->patient_id == Auth::user()->id)
                                        <tr>
                                            <td>{{ $schedule->patient_name }}</td>
                                            @foreach($doctors as $doctor)
                                            @if($doctor->id == $schedule->doctor_id)
                                            <td><a
                                                    href="{{ route('profile.doc', $doctor->id) }}">{{ $doctor->name }}</a>
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
                                            @endif

                                            @if($schedule->meet_link == null)
                                            <td><span class="badge badge-danger">N/A</span></td>
                                            @else

                                            <td><a href="{{ $schedule->meet_link }}"> <span
                                                        class="badge badge-success">Join Now</span></td>
                                            @endif
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