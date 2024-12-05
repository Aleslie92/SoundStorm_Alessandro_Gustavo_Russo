<x-layout>

    <div class="container-fluid">
     <div class="row">
       <div class="col-12 text-center m-3">
         <h1>Login</h1>
       </div>
     </div>
    </div> 
 
 
 
 
 <div class="container-fluid">
   <div class="row">
     <div class="col-6 d-flex flex-column justify-content-center mx-auto bg-warning rounded p-2">
 
     
     <form action="{{route('login')}}" method="POST">
        @csrf
           <legend>Accedi</legend>
           <div class="mb-3">
             <label for="email" class="form-label">Email</label>
             <input type="text" id="email" name="email" class="form-control" placeholder="Email">
           </div>
           <div class="mb-3">
             <label for="password" class="form-label">Password</label>
             <input type="password" id="password" name="password" class="form-control" placeholder="Password">
           </div>
         <button type="submit" class="btn btn-primary">Accedi</button>
       </form>
       <div class="col-6 d-flex flex-column align-items-center text-center mx-auto">
         <legend>Non Sei Registrato?</legend>
         <a class="btn btn-success" href="{{route('register')}}">Registrati</a>
       </div>
     </div>
   </div>
 </div>
 </x-layout>