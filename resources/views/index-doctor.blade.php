<x-master>
    <x-partials.navbar-doctor />
    <h1> Welcome, {{ Auth::user()->name }} </h1>
    <x-partials.footer />
</x-master>