<x-master>
    <x-partials.navbar-doctor />
    <h1> Welcome, Patient {{ Auth::user()->name }} </h1>
    <x-partials.footer />
</x-master>