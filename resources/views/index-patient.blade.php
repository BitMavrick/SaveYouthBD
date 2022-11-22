<x-master>
    <x-partials.navbar />

    <div class="container">

        <h3 class="mt-4">Available Doctors</h3>
        <hr>

        <div class="row">
            @foreach($doctors as $doctor)
            @if($doctor->active == 1)
            @foreach($profiles as $profile)
            @if($profile->id == $doctor->id)

            <div class="col-3 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $doctor->name }}</h5>
                        <p class="card-text fw-bold"> - {{ $profile->experties }}</p>
                        </p>
                        <p class="card-text">{{ $profile->description }}</p>
                        </p>
                        <a href="{{route('profile.doc', $doctor->id)}}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>

            @endif
            @endforeach
            @endif
            @endforeach
        </div>

        <h3 class="mt-4">All Doctors</h3>
        <hr>

        <div class="row">
            @foreach($doctors as $doctor)
            @foreach($profiles as $profile)
            @if($profile->id == $doctor->id)

            @if($profile[$doctor->id-1]->experties and $profile[$doctor->id-1]->description and
            $profile[$doctor->id-1]->gender)

            <div class="col-3 my-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $doctor->name }}</h5>
                        <p class="card-text fw-bold"> - {{ $profile->experties }}</p>
                        </p>
                        <p class="card-text">{{ $profile->description }}</p>
                        </p>
                        <a href="{{route('profile.doc', $doctor->id)}}" class="btn btn-primary">See More</a>
                    </div>
                </div>
            </div>

            @endif

            @endif
            @endforeach
            @endforeach
        </div>


    </div>




    <x-partials.footer />
</x-master>