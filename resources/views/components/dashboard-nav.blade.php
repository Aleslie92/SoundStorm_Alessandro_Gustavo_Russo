<nav class="navbar navbar-expand-lg bg-body-tertiary text-uppercase">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{route('admin.dashboard')}}">Dashboard</a>
                <li class="nav-item mx-3">
                    <a class="nav-link active" aria-current="page" href="{{route('admin.dashboard.users')}}">Utenti</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{route('admin.dashboard.tracks')}}">Brani</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link" href="{{route( 'admin.dashboard.genres')}}">Generi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
