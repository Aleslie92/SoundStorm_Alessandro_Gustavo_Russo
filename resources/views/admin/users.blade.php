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
                            <th scope="col" >Nome</th>
                            <th scope="col" >Email</th>
                            <th scope="col" >Iscritto Dal</th>
                            <th scope="col" >Ruolo</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at->format('d/m/Y')}}</td>
                            <td>{{$user->isAdmin() ? 'Admin' : 'Utente Base'}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
</x-layout>