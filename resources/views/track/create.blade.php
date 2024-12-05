<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Inserisci Un Brano</h1>
            </div>
        </div>
    </div>
    
    
    <div class="conrainer">
        <div class="row justify-content-center">
            <div class="col-6">
                <form class="rounded p-5 border" action="{{route('track.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                        @error('title')
                        <span class="alert alert-danger">{{ $message }}</span> 
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cover" class="form-label">Cover</label>
                        <input type="file" class="form-control" id="cover" name="cover">
                        @error('cover')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="path" class="form-label">Brano</label>
                        <input type="file" class="form-control" id="path" name="path">
                        @error('path')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input type="text" class="form-control" id="description" name="description" value="{{ old('description') }}">
                        @error('description')
                        <span class="alert alert-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                    <a href="{{route('homepage')}}" class="btn btn-outline-primary">Torna alla Home</a>
                </form>
                
            </div>
            
        </div>
        
    </div>
    
    
</x-layout>