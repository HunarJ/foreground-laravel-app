<nav class="navbar d-flex justify-content-center align-items-center">
      <ul class="nav-list">
        <li class="d-flex justify-content-center align-items-center"><a href="/" class="navbar-link">SLUŽBY</a></li>
        <li class="d-flex justify-content-center align-items-center"><a href="{{route('contact')}}" class="navbar-link">KONTAKT</a></li>
        <li class="d-flex justify-content-center align-items-center"><a href="{{route('admin')}}" class="navbar-link">ADMINISTRACE</a></li>
        @auth
        <li>
          <form action="{{route('logout')}}" method="POST" class="d-flex justify-content-center align-items-center">
          @csrf
            <button class="btn btn-danger">
            Odhlásit
            </button>
          </form>
        </li>
       @endauth
      </ul>
</nav>