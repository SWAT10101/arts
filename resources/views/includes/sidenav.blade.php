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
        <a class="brand-logo ml-3" href="{{ route('home') }}"><img width="32px" height="32px" src="images/logo1.png"
                style="margin-right:10px;"></img>Art Center Central</a>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>



<ul id="slide-out" class="sidenav sidenav-fixed blue">

    @if (Auth::check())
    <li>
        <div class="user-view">
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

    <li><img style="margin: 5% 33%;" src="images/sidelogo.png"></img></li>
    <div class="divider"></div>
    <div style="margin-bottom: 0px;" class="row">
        <div class="col s4">
            <li><a  target="_blank" href="https://www.instagram.com/artscenter/"><i class="fab fa-instagram fa-2x" style="color:white;"></i></a></li>
        </div>
        <div class="col s4">
            <li><a href="#!"><i class="fab fa-twitter fa-2x" style="color:white;"></i></a></li>
        </div>
        <div class="col s4">
            <li><a href="#!"><i class="fab fa-whatsapp fa-2x" style="color:white;"></i></a></li>
        </div>
    </div>
    <div class="divider"></div>




    <li><a class="white-text waves-effect waves-light" href="{{ route('login') }}">Login</a></li>
    <li><a class="white-text waves-effect waves-light" href="{{ route('register') }}">Register</a></li>
    @endif

    <li><a class="white-text" href="#!">First Sidebar Link</a></li>
    <li><a class="white-text" href="#!">Second Sidebar Link</a></li>
</ul>
