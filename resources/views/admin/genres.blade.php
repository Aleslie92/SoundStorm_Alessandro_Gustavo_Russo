<x-layout>
    
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Admin Dashboard</h1>
            </div>
        </div>
    </div>
    
    
    <x-dashboard-nav />
    
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4">
                <form action="{{route('admin.dashboard.storegenre')}}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="form-label">Aggiungi Genere</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary mt-1">Crea</button>
                </form>
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{session('success')}}
                    </div>
                 @endif
            </div>
            <div class="col-12 col-md-6">
               <table class="table striped border">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col" >#</th>
                            <th scope="col" >Genere</th>
                            <th scope="col" >Modifica Nome Genere</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($genres as $genre)
                        <tr>
                            <th scope="row">{{$genre->id}}</th>
                            <td>{{$genre->name}}</td>
                            <td class="border-start">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="d-flex align-items-center">
                                        <input type="text" name="name" id="name" class="form-control me-3" value="{{$genre->name}}">
                                        <button type="submit" class="btn btn-sm btn-primary">Aggiorna</button>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-layout>