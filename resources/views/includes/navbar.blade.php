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

<nav class = "blue">
    <div class="nav-wrapper">

        <a class="brand-logo ml-3" href="{{ route('home') }}">Art Center</a>
        

        @if (Auth::check())
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button " data-beloworigin="true" href="#!"
                    data-target="dropdown1">{{ Auth::user()->name }}<i
                        class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
        @endif

        @if(!Auth::check())

        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
        </ul>

        @endif
    </div>
</nav>
