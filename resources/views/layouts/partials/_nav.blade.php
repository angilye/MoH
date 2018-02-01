<nav class="navbar navbar-expand-sm navbar-dark bg-dark menu">
    <a class="navbar-brand" href="{{ route('acceuil_path') }}">{{config('app.name')}}</a> <!-- Recupere le nom de l'application dans le fichier .Env -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ set_active_route('root_path') }}"> <!-- Permet de definir l'onglet actif grace a la fonction situe dans helpers -->
                <a class="nav-link" href="{{ route('root_path') }}">Acceuil </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Arma 3 <span>En cours d'implémentation</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="{{ route('arma_path') }}">serveur</a>
                <a class="dropdown-item" href="#">stats</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos jeux <span>En cours d'implémentation</span></a>
                <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="#">Squad</a>
                <a class="dropdown-item" href="#">Star citizen</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ set_active_route('contactSend_path') }}" href="{{ route('contactSend_path') }}">Contact</a>
            </li>
            <li class="nav-item {{ set_active_route('about_path') }}">
                 <a class="nav-link disabled" href="#">Nous <span>En cours d'implémentation</span></a> <!-- {{ route('about_path') }} -->
            </li>
            
        </ul>
        <ul class="navbar-nav navbar-right">
        <!-- Authentication Links -->
        
            @guest
                <li class="nav-item">
                    <a class="nav-link {{ set_active_route('login') }}" href="{{ route('login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active_route('register') }}" href="{{ route('register') }}">Register</a>
                </li>
            @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdown03">
                            @if (Auth::user()->adminlevel > 1)
                                <a class="dropdown-item" href="{{ route('indexAdmin_path') }}">Administration</a>
                            @endif
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                            Logout
                            </a>
                            
                        </div>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
            @endguest
            <!-- <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search">
            </form> -->
        </ul>
        
        
    </div>
</nav>