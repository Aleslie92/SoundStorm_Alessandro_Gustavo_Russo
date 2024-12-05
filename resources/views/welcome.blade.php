<x-layout>
<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center">
            <h1>SoundStorm</h1>
        </div>
    </div>
</div>
<div class="container mt-5">
    <div class="row ">
        <div class="col-12 d-flex justify-content-center">
            <a class="btn btn-outline-danger" href="{{route('track.create')}}">Aggiungi Un Brano</a>
        </div>
    </div>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

</x-layout>