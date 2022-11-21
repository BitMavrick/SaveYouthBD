<x-master>
    <x-partials.navbar />
    <h1> Welcome, Patient {{ Auth::user()->name }} </h1>
    <x-partials.footer />
</x-master>