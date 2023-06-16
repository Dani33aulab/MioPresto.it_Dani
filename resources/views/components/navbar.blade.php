<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Il presto.it</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('announcements.index')}}">Annunci</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="categoriesDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                  Categorie
              </a>
              <ul class="dropdown-menu" aria-labelledby="categoriesDropdown">
                @foreach ($categories as $category)
                      <li> <a class="dropdown-item" href="{{route('categoryShow', compact('category'))}}">{{($category->name)}}</a></li>
                      <li><hr class="dropdown-divider"></li>
                @endforeach
              </ul>


          </li>

          @guest
          
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('announcements.create')}}">Nuovo Annuncio</a>
          </li>
          @if (Auth::user()->is_revisor)
              <li class="nav-item">
                  <a class="nav-link btn btn-outline-success btn-sm position-relative" aria-current="page" href="{{route('revisor.index')}}"> Zona revisore
                  <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"></span>
                  {{App\Models\Announcement::tobeRevisionedCount()}}
                  <span class="visually-hidden">unread messages</span>
                  </a>
              </li>
          <li class="nv-tem">
                <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>

          <li class="nv-tem">
            <a class="nav-link" href="{{route('login')}}">Login</a>
      </li>
            @else
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}};
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </li>
          <form id="form-logout" action="{{route('logout')}}" method="post" class="d-none"> 
            @csrf
          </form>
        </ul>

        @endguest
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>