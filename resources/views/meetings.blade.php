<x-master>
    <x-partials.navbar-doctor />

    <x-partials.update-modal />

    <div class="container">
        <section id="main-content">
            <div class="row">
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
                                                <th>Subject</th>
                                                <th>Patient Name</th>
                                                <th>Age</th>
                                                <th>DateTime</th>
                                                <th>Meeting</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($schedules as $schedule)
                                            @if($schedule->doctor_id == Auth::user()->id and $schedule->approve == 1)
                                            <tr>
                                                <td>{{ $schedule->subject }}</td>
                                                <td>
                                                    {{ $schedule->patient_name }}
                                                </td>
                                                <td>{{ $schedule->patient_age }}</td>
                                                <td>{{ $schedule->schedule_time }}</td>
                                                <td><a href="{{ $schedule->meet_link }}"> <span
                                                            class="badge badge-success">Join Now</span></td>
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
            </div>
        </section>
    </div>

    <x-partials.footer />
</x-master>