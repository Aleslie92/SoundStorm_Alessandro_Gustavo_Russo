<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dati Utente
            </a>
            <ul class="dropdown-menu">
              @auth
              <p class="dropdown-item">Ciao,{{Auth::user()->name}}</p>
              <li><hr class="dropdown-divider"></li>
              @if (auth()->user()->isAdmin())
              <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">DashBoard</a></li>   
             @endif
              <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="dropdown-item">Logout</button>
              </form>
              <li><a class="dropdown-item" href="{{route('track.create')}}">Aggiungi Una Canzone</a></li>
              @else
              <p class="dropdown-item">Ciao, Visitatore</p>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('login')}}">Login</a></li>
              <li><a class="dropdown-item" href="{{route('register')}}">Register</a></li>          
              @endauth
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('track.index')}}">Tutti i Brani</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>