<x-master>
    <x-partials.navbar-staff />
    <h1> Welcome, Staff {{ Auth::user()->name }} </h1>

    <x-partials.footer />
</x-master>