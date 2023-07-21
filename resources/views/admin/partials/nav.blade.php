<aside class="side-nav">
    <div class="logo">
        <p>Admin</p>
    </div>
    <ul class="nav-list-mine">
        <li class="nav-link-mine">
            <a href="{{route('admin')}}">Nástěnka</a>
        </li>
        <li class="nav-link-mine">
            <a href="{{route('admin.services')}}">Služby</a>
        </li>
        <li class="nav-link-mine">
            <a href="{{route('admin.contacts')}}">Kontaktování</a>
        </li>
    </ul>

    <div class="logout">
        <form action="{{route('logout')}}" method="POST">
            @csrf
            <button class="logout-btn">Odhlásit</button>
        </form>
    </div>

</aside>