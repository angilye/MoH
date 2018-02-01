<div class="container-fluid menu">
    <nav class="navbar navbar-expand-lg navbar-dark nav-acceuil">
        <a class="navbar-brand" href="{{ route('acceuil_path') }}">{{env('mod')}}</a> <!-- Recupere le nom de l'application dans le fichier .Env -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{ set_active_route('root_path') }}"> <!-- Permet de definir l'onglet actif grace a la fonction situe dans helpers -->
                    <a class="nav-link" href="{{ route('warzonefr_path') }}">Acceuil </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Le serveur <span>En cours d'implémentation</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">Règles</a>
                    <a class="dropdown-item" href="#">stats</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle disabled" href="#" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Les Mods <span>En cours d'implémentation</span></a>
                    <div class="dropdown-menu" aria-labelledby="dropdown03">
                    <a class="dropdown-item" href="#">....</a>
                    <a class="dropdown-item" href="#">....</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ set_active_route('ticketSend_path') }}" href="{{ route('ticketSend_path') }}">Ticket</a>
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
            </ul>
        </div>
    </nav>
</div>
