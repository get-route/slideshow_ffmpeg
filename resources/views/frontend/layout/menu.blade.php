@section('menu')

        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('Frontend/img/logo.png')}}" height="34"
                                                                              alt="logo"/></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse border-top border-lg-0" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base align-items-lg-center align-items-start">
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="{{route('catalog.show')}}">КАТАЛОГ
                        </a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="/#destination">
                            О СЕРВИСЕ
                        </a>
                    </li>

                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="/#booking">
                            ОТЗЫВЫ
                        </a>
                    </li>
                    <li class="nav-item px-3 px-xl-4">
                        <a class="nav-link fw-medium" aria-current="page" href="/#contakt">
                            КОНТАКТЫ
                        </a>
                    </li>
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" aria-current="page"
                                                                 href="{{ route('login') }}">Войти</a></li>
                            @endif

                            @if (Route::has('register'))
                                    <li class="nav-item px-3 px-xl-4"><a class="btn btn-outline-dark order-1 order-lg-0 fw-medium" aria-current="page"
                                                                         href="{{ route('register') }}">Регистрация</a></li>
                            @endif
                        @else
                            <li>
                                <div class="nav-item dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>

                                <div class="dropdown-menu m-0 dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                       Выйти
                                    </a>
                                    @if(\Illuminate\Support\Facades\Auth::check() && \Illuminate\Support\Facades\Auth::user()->is_admin == 0)
                                        <a class="dropdown-item" href="{{ route('cabinet') }}">
                                            Профиль
                                        </a>
                                    @else
                                        <a class="dropdown-item" href="{{ route('admin') }}">
                                            Админка
                                        </a>
                                    @endif
                                </div>
                                </div>

                            </li>
                        @endguest
                </ul>
            </div>
        </div>

@endsection
