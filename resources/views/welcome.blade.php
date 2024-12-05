<x-layout>

<h1>SoundStorm</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</x-layout>