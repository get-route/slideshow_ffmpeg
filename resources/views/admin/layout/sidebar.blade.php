@section('sidebar')
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item text-center">
                <a class="nav-link" href="{{route('admin')}}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Админка сайта</span>
                </a>

            </li>
            <li class="nav-item text-center">
                <a class="nav-link" href="{{route('sitemap.update')}}">
                    <i class="mdi mdi-home menu-icon"></i>
                    <span class="menu-title">Обновить Sitemap</span>
                </a>

            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('metrics_admin.index')}}">
                    <i class="mdi mdi-book-multiple menu-icon"></i>
                    <span class="menu-title">МЕТРИКИ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('users_admin.index')}}">
                    <i class="mdi mdi-human menu-icon"></i>
                    <span class="menu-title">ПОЛЬЗОВАТЕЛИ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('comments_admin.index')}}">
                    <i class="mdi mdi-cloud-question menu-icon"></i>
                    <span class="menu-title">КОММЕНТАРИИ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('tags_admin.index')}}">
                    <i class="mdi mdi-cloud-tags menu-icon"></i>
                    <span class="menu-title">ТЕГИ</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn-sm btn-danger" href="{{route('logout')}}">
                    <i class="mdi mdi-exit-run menu-icon"></i>
                    <span class="menu-title">Выйти</span>
                </a>
            </li>
        </ul>
    </nav>
@endsection
