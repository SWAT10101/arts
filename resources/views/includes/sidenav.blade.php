<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<!-- Top nav bar -->
<nav class="blue">
    <div class="nav-wrapper">
        <a class="brand-logo ml-3" href="{{ route('home') }}"><img width="32px" height="32px" src="{{ asset('/images/logo1.png') }}"
                style="margin-right:10px;"></img>Arts Centre Central Gen. Trad. & Cont. w.l.l.</a>
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


    <ul class="collapsible">
        <li class="{{ (request()->is('menu/*')) ? 'active' : '' }}">

            <div class="collapsible-header white-text waves-effect waves-light"><b>Menus</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li class="{{ (request()->is('menu/add')) ? 'active' : '' }}"><a class = "white-text waves-effect waves-light" href="{{ route('menu.add') }}">Add</a></li>
                    <li class="{{ (request()->is('menu/view')) ? 'active' : '' }}"><a class = "white-text waves-effect waves-light" href="{{ route('menu.view')}}">View & Edit</a></li>
                </ul>
            </div>
        </li>
    </ul>

    @if(isset($menus) && $menus->count())
     @foreach ($menus as $menu)
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header white-text waves-effect waves-light"><b>{{ $menu->menu_name }}</b></div>   
        </li>
      </ul>    
     @endforeach
    @endif
    
    @endif



    @if(!Auth::check())

    <li><img style="margin: 5% 33%;" src="{{ asset('images/sidelogo.png')}}"></img></li>
    <div class="divider"></div>
    <div style="margin-bottom: 0px;" class="row">
        <div class="col s4">
            <li><a target="_blank" href="https://www.instagram.com/artscenter/"><i class="fab fa-instagram fa-2x"
                        style="color:white;"></i></a></li>
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

    @if(isset($menus) && $menus->count())
     @foreach ($menus as $menu)
      <ul class="collapsible" data-collapsible="accordion">
        <li>
          <div class="collapsible-header white-text waves-effect waves-light"><b>{{ $menu->menu_name }}</b></div>   
        </li>
      </ul>    
     @endforeach
    @endif
    
    @endif

    

    
    
    <!-- Arts Materials menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Arts Materials</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Oil Colors</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Colors Acrylic</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Water Color</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Pastel Colors</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Wooden Pens</a></li>
                </ul>
            </div>
        </li>
    </ul>

</ul>
