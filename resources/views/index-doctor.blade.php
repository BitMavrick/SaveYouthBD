<x-master>
    <x-partials.navbar-doctor />
    <h1> Welcome, Doctor {{ Auth::user()->name }} </h1>
    <x-partials.footer />
</x-master>