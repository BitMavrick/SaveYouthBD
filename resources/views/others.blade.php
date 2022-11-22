 <div class="container">

     <h3 class="mt-4">Available Doctors</h3>
     <hr>

     <div class="row">
         @foreach($doctors as $doctor)
         @if($doctor->active == 1)
         <div class="col-3 my-3">
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">{{ $doctor->name }}</h5>
                     <p class="card-text fw-bold"> - {{ $profile[$doctor->id - 1]->experties }}</p>
                     </p>
                     <p class="card-text">{{ $profile[$doctor->id - 1]->description }}</p>
                     </p>
                     <a href="{{route('profile.doc', $doctor->id)}}" class="btn btn-primary">See More</a>
                 </div>
             </div>
         </div>
         @endif
         @endforeach
     </div>

     <h3 class="mt-4">All Doctors</h3>
     <hr>

     <div class="row">

         @foreach($doctors as $doctor)

         @if($profile[$doctor->id-1]->experties and $profile[$doctor->id-1]->description and
         $profile[$doctor->id-1]->gender)

         <div class="col-3 my-3">
             <div class="card">
                 <div class="card-body">
                     <h5 class="card-title">{{ $doctor->name }}</h5>
                     <p class="card-text fw-bold"> - {{ $profile[$doctor->id-1]->experties }}</p>
                     </p>
                     <p class="card-text">{{ $profile[$doctor->id-1]->description }}</p>
                     </p>
                     <a href="{{route('profile.doc', $doctor->id)}}" class="btn btn-primary">See More</a>
                 </div>
             </div>
         </div>

         @endif

         @endforeach
     </div>
 </div>


 <div class="row">

     @foreach($doctors as $doctor)

     @if($profile[$doctor->id-1]->experties and $profile[$doctor->id-1]->description and
     $profile[$doctor->id-1]->gender)

     <div class="col-3 my-3">
         <div class="card">
             <div class="card-body">
                 <h5 class="card-title">{{ $doctor->name }}</h5>
                 <p class="card-text fw-bold"> - {{ $profile[$doctor->id-1]->experties }}</p>
                 </p>
                 <p class="card-text">{{ $profile[$doctor->id-1]->description }}</p>
                 </p>
                 <a href="{{route('profile.doc', $doctor->id)}}" class="btn btn-primary">See More</a>
             </div>
         </div>
     </div>

     @endif

     @endforeach
 </div>