<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
<li> <a class="nav-link" href="/logout">Logout</a></li>
</ul>

<nav>
    <div class="nav-wrapper">

        <a class="brand-logo ml-3" href="{{ route('home') }}">Art Center</a>

        @if (Auth::check())
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            
             <!-- Dropdown Trigger -->
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
           
        </ul>
        @endif
    </div>
</nav>