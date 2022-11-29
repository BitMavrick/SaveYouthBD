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
                                            @if(($schedule->doctor_id == Auth::user()->id and $schedule->approve == 1)
                                            or ($schedule->doctor_id == Auth::user()->id and $schedule->approve == 3))
                                            <!-- Modal -->
                                            <div class="modal fade" id="modal{{ $schedule->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Record
                                                                Link
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('done.meeting') }}" method="POST">
                                                                @csrf
                                                                <input type="text" hidden name="meeting_id"
                                                                    value="{{$schedule->id}}">
                                                                <div class="form-group">
                                                                    <label for="exampleInputEmail1">Meeting Record
                                                                        Link</label>
                                                                    <input type="text" required name="meet_link"
                                                                        class="form-control" id="exampleInputEmail1"
                                                                        aria-describedby="emailHelp"
                                                                        placeholder="Paste the meeting link here"
                                                                        placeholder="Enter Meeting Recording link">
                                                                    <br>
                                                                    <button type="submit"
                                                                        class="btn btn-primary">Set</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <tr>
                                                <td>{{ $schedule->subject }}</td>
                                                <td>
                                                    {{ $schedule->patient_name }}
                                                </td>
                                                <td>{{ $schedule->patient_age }}</td>
                                                <td>{{ $schedule->schedule_time }}</td>
                                                @if($schedule->approve == 1)
                                                <td><a href="{{ $schedule->meet_link }}"> <span
                                                            class="badge badge-secondary">Join Now</span>

                                                        <a href="" data-toggle="modal"
                                                            data-target="#modal{{ $schedule->id }}"><span
                                                                class="badge badge-success">Finished</span>
                                                <td>
                                                    @elseif($schedule->approve == 3)
                                                <td>
                                                    <span class="badge badge-success"> Done </span>
                                                </td>


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
            </div>
        </section>
    </div>

    <x-partials.footer />
</x-master>