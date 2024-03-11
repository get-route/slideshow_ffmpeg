@section('title',$metrika[0]->title)
@section('description',$metrika[0]->description)
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
                            <img src="{{asset('Frontend/img/metrica/baby-header.png')}}" alt="{{$metrika[0]->h1}}">
                        </div>
                        <div class="col-lg-10 text-center">
                            <h1>{{$metrika[0]->h1}}</h1>
                            <p style="font-size: 14px">{{$metrika[0]->created_at->format('d-m-Y')}} - Просмотров: {{$metrika[0]->views}}</p>
                        </div>

                        <div class="col-lg-12 ya-share2 text-center" data-curtain data-shape="round" data-services="vkontakte,odnoklassniki,telegram,twitter">
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mt-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                            @foreach($metrika[0]->tags as $metrik_tags)
                                <li class="breadcrumb-item " aria-current="page"><a class="btn btn-facebook" href="{{route('index')}}/tag/{{$metrik_tags->url}}">[#{{$metrik_tags->title}}#]</a> </li>
                            @endforeach
                            <li class="breadcrumb-item active" aria-current="page">{{$metrika[0]->title}}</li>
                        </ol>
                    </nav>
                    <div class="row block-info text-center">
                        <div class="col-lg-4 ">
                            <img src="{{asset('Frontend/img/steps/step1.png')}}" alt="шаги для создания своей метрики">
                            <p>1.Зарегистрируйтесь и подтвердите учетную запись</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('Frontend/img/steps/step2.png')}}" alt="шаги для создания своей метрики">
                            <p>2. Выберите нужную метрику. Откройте редактор и нажмите "Сохранить"</p>
                        </div>
                        <div class="col-lg-4">
                            <img src="{{asset('Frontend/img/steps/step3.png')}}" alt="шаги для создания своей метрики">
               <p>3.Перейти в личный кабинет и скачайте готовую метрику онлайн.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- end of .container-->

    </section>

    <section class="redactor">
        <div class="container">
            <div class="row" id="app">
                @auth
               <Redactor-Index
                   startimg="{{$metrika[0]->photo}}"
                   userid="{{\Illuminate\Support\Facades\Auth::user()->id}}"
                   urlmetric="{{$metrika[0]->url}}"
               >
                    @endauth
                @guest
                    <div class="text-center col-lg-12">
                        <p>❌</p>
                        <p style="font-size: 20px">*Для показа редактора Метрик, необходимо войти или зарегистрироваться.</p>
                        <a href="{{route('register')}}" class="btn btn-lg btn-success m-2" target="_blank">Зарегистрироваться</a>
                        <a href="{{route('login')}}" class="btn btn-lg btn-dark m-2" target="_blank">Войти</a>
                    </div>

                    @endguest
            </div>
        </div>
    </section>
    <section class="text">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Дополнительная информация о метрике</h2>
                <div class="col-lg-4 text-center">
                    <img src="{{asset('storage/thumbnail/thumbnail-')}}{{$metrika[0]->photo}}">
                </div>
                <div class="col-lg-8">
                    {!!$metrika[0]->text!!}
                </div>
                <div class="col-lg-12 text-center">
                    <h3>Популярные метрики:</h3>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach($random_metrik as $metriks_popular)
                        <div class="col-lg-4">
                            <div class="card">
                                <img src="{{route('index')}}/storage/thumbnail/thumbnail-{{$metriks_popular->photo}}" class="img-thumbnail" alt="{{$metriks_popular->title}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$metriks_popular->title}}</h5>
                                    <button type=" button" class="btn btn-dark">
                                        Просмотров:  <span class="badge badge-light">{{$metriks_popular->views}}</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="comments" id="comment">
        <div class="container">
            <div class="row">
                <h3 class="text-center">Комментарии пользователей</h3>

                @foreach($parent_comment as $coments_metrik)
                    @if($coments_metrik->public == "ДА")
                <div class="col-lg-12 row parent_comment row m-2">
                    <div class="col-lg-3 text-center parent_comment_user">
                        <p>{{$coments_metrik->name}}</p>
                        <p>{{$coments_metrik->updated_at->format('d-m-Y')}}</p>
                    </div>
                    <div class="col-lg-9">
                        <p>{{$coments_metrik->text}}</p>
                        <form-components
                        metricId="{{$metrika[0]->id}}"
                        parentId={{$coments_metrik->id}}
                        authcheck="{{$user}}"
                        >

                    </div>

                </div>
                    @endif
                        @foreach($reply_comment as $reply)
                    @if($reply->public == "ДА" && $reply->parent_id == $coments_metrik->id)
                <div class="row m-2">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-9 child_comment row text-right ">
                        <div class="col-lg-2 text-center child_comment_user">
                            <p>{{$reply->name}}</p>
                            <p>{{$reply->updated_at->format('d-m-Y')}}</p>
                        </div>
                        <div class="col-lg-10">
                            <p>{{$reply->text}}</p>
                            <form-components
                                metricid="{{$metrika[0]->id}}"
                                parentid="{{$reply->parent_id}}"
                                authcheck="{{$user}}"
                            >
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
                @endforeach
            </div>
        </div>

    </section>

    <section class="form-comment" id="comment-form">
        <h3 class="text-center">Форма комментариев</h3>
        <index-components
            authcheck="{{$user}}"
            metricid="{{$metrika[0]->id}}"
        >
    </section>
    <!-- <section> close ============================-->
    <!-- ============================================-->
</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<!-- ============================================-->
@yield('footer')
@vite([
'resources/js/comment-reply.js',
'resources/js/comment-index.js',
])
</body>

</html>
