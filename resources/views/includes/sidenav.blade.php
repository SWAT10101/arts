<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

<nav class="blue">
    <div class="nav-wrapper">
        <a class="brand-logo ml-3" href="{{ route('home') }}"><img width="32px" height="32px" src="images/logo1.png"
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
    @endif

    @if(!Auth::check())

    <li><img style="margin: 5% 33%;" src="images/sidelogo.png"></img></li>
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

    <!-- Engineering Materials menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Engineering Materials</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Engineering Drawing Tables</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">Schemes Cabinets</a></li>
                </ul>
            </div>
        </li>
    </ul>

   <!-- Papers menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Papers</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>

    <!-- Ceramics menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Ceramics</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>


    <!-- Brushes menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Brushes</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>


    <!-- Stationery menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Stationery</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>
  
    <!-- Drawing Stand menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Drawing Stand</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>

    <!-- COPIC Pens menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>COPIC Pens</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>

    <!-- Balsa Wood menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Balsa Wood</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>


    <!-- Ceramic Ovens menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Ceramic Ovens</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>


    <!-- Minne Ovens menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Minne Ovens</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>


    <!-- Ceramic Tools menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Ceramic Tools</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>


    <!-- Ceramic Weels menu and sub menu -->
    <ul class="collapsible" data-collapsible="accordion">
        <li>
            <div class="collapsible-header white-text waves-effect waves-light"><b>Ceramic Weels</b></div>
            <div class="collapsible-body blue">
                <ul>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                    <li><a class = "white-text waves-effect waves-light" href="#!">sub item well add here.</a></li>
                </ul>
            </div>
        </li>
    </ul>

 

</ul>
