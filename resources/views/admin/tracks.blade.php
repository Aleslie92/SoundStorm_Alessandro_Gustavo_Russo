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
            <div class="col-12 col-md-8">
                <table class="table striped border">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col" >#</th>
                            <th scope="col" >Titolo</th>
                            <th scope="col" >Descrizione</th>
                            <th scope="col" >Inserita Il</th>
                            <th scope="col" >Inserita Da</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tracks as $track)
                        <tr>
                            <th scope="row">{{$track->id}}</th>
                            <td>{{$track->title}}</td>
                            <td>{{$track->description}}</td>
                            <td>{{$track->created_at->format('d/m/Y')}}</td>
                            <td>{{$track->user->name}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-layout>