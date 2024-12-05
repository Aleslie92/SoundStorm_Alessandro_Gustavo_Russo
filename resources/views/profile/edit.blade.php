<x-layout>
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiorna Dati Profilo</h1>
            </div>
        </div>
    </div>
    
    
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 d-flex flex-column justify-content-center mx-auto bg-warning rounded p-2">
                
                
                <form action="{{route('profile.editprofile', compact('user'))}}" method="POST">
                    @csrf
                    @method('PUT')
                    <legend>Registrati</legend>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{$user->name}}" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email" name="email" class="form-control" value="{{$user->email}}" placeholder="Email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Numero Cellulare</label>
                        <input type="text" id="phone" name="phone" class="form-control" value="{{$user->profile->phone}}" placeholder="Phone Number">
                    </div>
                    
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-7">
                            <label for="address" class="form-label">Residenza</label>
                            <input type="text" id="address" name="address" class="form-control" value="{{$user->profile->address}}" placeholder="Address">
                        </div>
                        <div class="col-4">
                            <label for="zip" class="form-label">CAP</label>
                            <input type="text" id="zip" name="zip" class="form-control" value="{{$user->profile->zip}}"  placeholder="CAP">
                        </div>
                    </div>
                    
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-7">
                            <label for="city" class="form-label">Città</label>
                            <input type="text" id="city" name="city" class="form-control" value="{{$user->profile->city}}"  placeholder="City">
                        </div>
                        <div class="col-4">
                            <label for="province" class="form-label">Provincia</label>
                            <input type="text" id="province" name="province" class="form-control" value="{{$user->profile->province}}" placeholder="Province">
                        </div>
                    </div>
                    
                    
                    <div class="mb-3 d-flex justify-content-between">
                        <div class="col-5">
                            <label for="region" class="form-label">Regione</label>
                            <input type="text" id="region" name="region" class="form-control" value="{{$user->profile->region}}" placeholder="Region">
                        </div>
                        <div class="col-5">
                            <label for="country" class="form-label">Paese</label>
                            <input type="text" id="country" name="country" class="form-control" value="{{$user->profile->country}}" placeholder="Country">
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
                        <a href="{{route('profile.page')}} " class="btn btn-outline-primary">Torna Indietro</a>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
    
</x-layout>