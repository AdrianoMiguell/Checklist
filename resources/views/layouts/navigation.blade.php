<nav class="navbar navbar-expand-lg px-5">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <h1 class="navbar-title">Checklist</h1>
        </a>

        <div class="" id="navbarNav">
            @if (Route::has('login'))
                <ul class="navbar-nav">
                    @auth

                        <div class="navbar-collapse-inline d-flex flex-row-reverse gap-3 align-items-center">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="bi bi-list open"></i>
                                <i class="bi bi-x-lg cloused block"></i>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#dicas">Dicas de uso</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#sobre">Sobre</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#contato">Contato</a>
                                    </li>
                                    <li class="nav-item dropdown position-relative">
                                        <a class="nav-link text-truncate" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-person-fill"></i>
                                            <span>{{ Auth::user()->name }}</span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="dropdown-item"> <a class="d-block w-100"
                                                        href="{{ route('profile.edit') }}">
                                                        Perfil </a> </div>
                                            </li>
                                            <li>
                                                <div class="dropdown-item">
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf
                                                        <a class="d-block w-100" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault(); this.closest('form').submit();">
                                                            Logout
                                                        </a>
                                                    </form>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="d-flex">
                            <a href="{{ route('login') }}" class="btnG btnG-light-green">Log
                                in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btnG btnG-light-green">Register</a>
                            @endif
                        </div>
                    @endauth
            @endif
        </div>
    </div>
</nav>
