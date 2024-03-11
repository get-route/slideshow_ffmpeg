@section('title',$tag[0]->title)
@section('description',$tag[0]->description)
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
                            <img src="{{asset('Frontend/img/metrica/baby-header.png')}}" alt="{{$tag[0]->h1}}">
                        </div>
                        <div class="col-lg-10 text-center">
                            <h1>{{$tag[0]->h1}}</h1>
                            <p style="font-size: 14px">{{$tag[0]->created_at->format('d-m-Y')}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 mt-5">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('index')}}">Главная</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$tag[0]->title}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-12 text-center">
                    <p>{!! $tag[0]->text !!}</p>
                </div>
                <div class="row">
                    <h2 class="text-center">Подборка популярных метрик по тегу -  {{$tag[0]->title}}</h2>
                    <div class="row row-cols-1 row-cols-md-2 g-4">
                        @foreach($tag[0]->metric as $metrik_tags)
                            @if($metrik_tags->public == "Да")
                                <div class="col">
                                    <div class="card text-center">
                                        <a href="{{route('index')}}/metrika/{{$metrik_tags->url}}" target="_blank">
                                            <img src="{{route('index')}}/storage/thumbnail/thumbnail-{{$metrik_tags->photo}}" class="img-thumbnail" alt="{{$metrik_tags->title}}">
                                        </a>
                                        <div class="card-body">
                                            <h5 class="card-title">{{$metrik_tags->title}}</h5>
                                            <p class="card-text">{{$metrik_tags->created_at->format('d-m-Y')}}</p>
                                            <p class="card-text">
                                                <button type=" button" class="btn btn-dark">
                                                    Просмотров:  <span class="badge badge-light">{{$metrik_tags->views}}</span>
                                                </button>
                                            </p>
                                            <p class="card-text">"{{$metrik_tags->description}}"</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
        <!-- end of .container-->

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

