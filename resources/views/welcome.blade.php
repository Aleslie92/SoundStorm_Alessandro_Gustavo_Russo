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
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center mt-5">Ultimi Brani Caricati</h2>
            </div>
        </div>
        <div>
            <div class="row justify-content-around">
                @foreach ($tracks as $track)
                <div class="col-4 ">
                    <div class="card" style="width: 18rem;">
                        <img src={{Storage::url($track->cover)}} alt="{{$track->title}}" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title">{{$track->title}}</h5>
                            <p class="card-text">{{$track->description}}</p>
                            <div>
                                <audio class="w-100" controls>
                                <source src="{{Storage::url($track->path)}}" type="audio/mpeg">
                                    You're Browser Don't Support the audio Tag
                                </audio>
                            </div>
                            <div class="card-footer text-body-secondary small">
                                Inserito da <a
                                href="{{ route('track.filterByUser', ['user' => $track->user]) }}">{{ $track->user->name }}</a>
                                - {{ $track->created_at->format('d/m/Y') }}

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>       
            
        </div>
    </div>
    
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    
</x-layout>