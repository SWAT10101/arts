<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li>
        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
    </li>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</ul>


<nav class="blue">
    <div class="nav-wrapper">
        <a class="brand-logo ml-3" href="{{ route('home') }}">Art Center</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>



<ul id="slide-out" class="sidenav sidenav-fixed">

    @if (Auth::check())
    <li>
        <div class="user-view">
            <div class="background">
                <img src="images/mwl.jpg">
            </div>
            <a href="#user"><img class="circle" src="images/me.jpeg"></a>
            <a href="#name"><span class="white-text name">{{ Auth::user()->name }}</span></a>
            <a href="#email"><span class="white-text email">{{ Auth::user()->email }}</span></a>
        </div>
    </li>

    <li>
        <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
            href="{{ route('logout') }}" class="waves-effect waves-light btn-small pink">Logout</a>
    </li>
    @endif

    @if(!Auth::check())
    <li><a href="{{ route('login') }}">Login</a></li>
    <li><a href="{{ route('register') }}">Register</a></li>
    @endif

    <li><a href="#!">First Sidebar Link</a></li>
    <li><a href="#!">Second Sidebar Link</a></li>
</ul>
