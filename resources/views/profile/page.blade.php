<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Pagina Profilo</h1>
            </div>
        </div>
    </div>
    
    
    
    
    <div class="container mt-5">
        <div class="row justify-content-evenly">
            <div class="col-12 col-md-4 p-5">
                <img class="img-fluid" src={{$user->profile->avatar ? Storage::url($user->profile->avatar) : '/media/avatarDefault.png'}} alt="Immagine di Default">
                @if(session('success'))
                <div class="container">
                    <div class="row">
                        <div class="col-12 alert alert-success mt-3 text-center ">
                            {{session('success')}}
                        </div>
                    </div>
                </div>
                @endif
                <form class="mt-5" action="{{route('profile.editavatar', compact('user'))}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="col-9 mb-3">
                            <input type="file" class="form-control" name="avatar" id="avatar">
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-sm btn-primary">Cambia Avatar</button>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-center">
                            @error('avatar')
                            <span class="alert fst-italic alert-danger text-center">{{ $message }}</span>
                            @enderror
                        </div>
                        
                    </div>
                    
                </form>
            </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Nome</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->name ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Email</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->email ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Residenza</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->address ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Città</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->city ?? '' }}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Provincia</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->province ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Regione</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->region ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Paese</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->country ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>CAP</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->zip ?? ''}}</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-3 fw-bold">
                    <p>Numero di Cellulare</p>
                </div>
                <div class="col-12 col-sm-9">
                    <p>{{$user->profile->phone ?? ''}}</p>
                </div>
            </div>
            <a class="btn btn-warning" href="{{route('profile.edit',compact('user'))}}">Modifica Profilo</a>
        </div>
    </div>  
    
    <div class="container mt-5">
        <div class="row">
            <h2>I Miei Brani</h2>
        </div>
        <div class="row">
            @foreach ($user->tracks as $track)
            <div class="col-12 col-md-3">
                <div class="card">
                    <div class="text-center">
                        <img class="img-fluid" src={{Storage::url($track->cover)}} alt="{{$track->title}}">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$track->title}}</h5>
                        <p class="card-text">{{$track->description}}</p>
                        <div>
                            <audio class="w-100" controls>
                                <source src="{{Storage::url($track->path)}}" type="audio/mpeg">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </x-layout>