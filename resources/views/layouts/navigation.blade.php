<nav class="navbar navbar-expand-lg px-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <h1 class="navbar-title">Checklist</h1>
        </a>

        <div class="" id="navbarNav">
            @if (Route::has('login'))
                <ul class="navbar-nav">
                    @auth
                        <div class="dropdown">
                            <a class="text-decoration-none p-2 rounded-2" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false"
                                style="background-color: rgb(var(--quin-c)); color: rgb(var(--tert-c))">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path
                                            d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                    </svg>
                                </span>
                                {{ Auth::user()->name }}
                            </a>

                            <ul class="dropdown-menu position-absolute">
                                <li>
                                    <div class="dropdown-item"> <a class="d-block w-100" href="{{ route('profile.edit') }}">
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
                        </div>
                    @else
                        <div class="d-flex">
                            <a href="{{ route('login') }}" class="btnG btnG-dark-green">Log
                                in</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btnG btnG-dark-green">Register</a>
                            @endif
                        </div>
                    @endauth
            @endif
        </div>
    </div>
</nav>
