<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tutti i Brani di {{$user->name}}</h1>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="row justify-content-around">
            @foreach ($tracks as $track)
                <div class="col-4 ">
                    <div class="card" style="width: 18rem;">
                        <img src={{ Storage::url($track->cover) }} alt="{{ $track->title }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $track->title }}</h5>
                            <p class="card-text">{{ $track->description }}</p>
                            <div>
                                <audio class="w-100" controls>
                                    <source src="{{ Storage::url($track->path) }}" type="audio/mpeg">
                                    You're Browser Don't Support the audio Tag
                                </audio>
                            </div>
                            <div class="card-footer text-body-secondary small">
                                Inserito da {{ $track->user->name }}- Creata il
                                {{ $track->created_at->format('d/m/Y') }}

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


</x-layout>