@section('title','Бесплатные шаблоны метрик для новорожденных детей')
@section('description','Каталог бесплатных шаблонов метрик для новорожденных детей. Удобный выбор и возможность редактирования онлайн.')
@include('frontend.layout.head')
@include('frontend.layout.menu')
@include('frontend.layout.footer')
    <!DOCTYPE html>
<html lang="en-US" dir="ltr">


@yield('head')

<body>

<!-- ===============================================-->
<!--    Main Content-->
<!-- ===============================================-->

<main class="main" id="top">
    <nav class="navbar navbar-expand-lg navbar-light"
         data-navbar-on-scroll="data-navbar-on-scroll">
        @yield('menu')
    </nav>

    <div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- ============================================-->
    <!-- <section> begin ============================-->
    <section class="pre-menu">

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row ">
                        <div class="col-lg-1">
                            <img src="{{asset('Frontend/img/metrica/baby-header.png')}}" alt="каталог метрик для новорожденных">
                        </div>
                        <div class="col-lg-10 text-center">
                            <h1>Каталог метрик для новорожденных</h1>
                        </div>

                        <div class="col-lg-12 ya-share2 text-center" data-curtain data-shape="round" data-services="vkontakte,odnoklassniki,telegram,twitter">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>

                            <li class="breadcrumb-item active" aria-current="page">каталог метрик сайта</li>
                        </ol>
                    </nav>
                </div>

            </div>

        </div>
        <!-- end of .container-->
    </section>
    <section class="redactor" id="app">
        <div class="container">
            <div class="row">
                <catalog-components></catalog-components>
            </div>
        </div>
    </section>

    <!-- <section> close ============================-->
    <!-- ============================================-->
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<!-- ============================================-->
@yield('footer')

</body>

</html>
