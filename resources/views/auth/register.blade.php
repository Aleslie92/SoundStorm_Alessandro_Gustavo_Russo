<x-layout>
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 text-center m-3">
        <h1>Register</h1>
      </div>
    </div>
  </div> 
  
  
  
  
  <div class="container-fluid">
    <div class="row">
      <div class="col-6 d-flex flex-column justify-content-center mx-auto bg-warning rounded p-2">
        
        
        <form action="{{route('register')}}" method="POST">
          @csrf
          <legend>Registrati</legend>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
          </div>
          <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password">
          </div>
          <div class="mb-3">
            <label for="phone" class="form-label">Numero Cellulare</label>
            <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number">
          </div>
          
          <div class="mb-3 d-flex justify-content-between">
            <div class="col-7">
              <label for="address" class="form-label">Residenza</label>
              <input type="text" id="address" name="address" class="form-control"  placeholder="Address">
            </div>
            <div class="col-4">
              <label for="zip" class="form-label">CAP</label>
              <input type="text" id="zip" name="zip" class="form-control"  placeholder="CAP">
            </div>
          </div>
          
          <div class="mb-3 d-flex justify-content-between">
            <div class="col-7">
              <label for="city" class="form-label">Città</label>
              <input type="text" id="city" name="city" class="form-control"  placeholder="City">
            </div>
            <div class="col-4">
              <label for="province" class="form-label">Provincia</label>
              <input type="text" id="province" name="province" class="form-control"  placeholder="Province">
            </div>
          </div>
          
          
          <div class="mb-3 d-flex justify-content-between">
            <div class="col-5">
              <label for="region" class="form-label">Regione</label>
              <input type="text" id="region" name="region" class="form-control"  placeholder="Region">
            </div>
            <div class="col-5">
              <label for="country" class="form-label">Paese</label>
              <input type="text" id="country" name="country" class="form-control"  placeholder="Country">
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrati</button>
          </div>
          
        </form>
        
        <div class="col-12 d-flex flex-column align-items-end text-end ">
          <legend>Sei Gia'Registrato?</legend>
          <a class="btn btn-success me-5" href="{{route('login')}}">Login</a>
        </div>
      </div>
    </div>
  </div>
</x-layout>