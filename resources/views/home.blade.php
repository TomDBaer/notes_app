{{-- namen x- damit man mit keinem php kollidiert --}}
<x-layout>
    <x-slot:heading>
        Home Page
    </x-slot:heading>

    <h1>Hello from the home page</h1>

    @if (Request::is('/'))
        <p>Route Test</p>
    @endif

    <p>Der aktuelle Pfad ist: {{ Request::path() }}</p>
    <p>Die vollständige URL ist: {{ Request::url() }}</p>

</x-layout>
