@section('footer')
<!-- <section> begin ============================-->
<section class="pb-0 pb-lg-4 footer">
{{--{{dd($metriks_random_all)}}--}}
{{--    {{dd($all_tags_menu)}}--}}
    <div class="container">
        <div class="row">
            <div class="text-center col-lg-12 col-md-12 col-12 mb-2 mb-md-0 mb-lg-0 order-0">
                <img class="mb-4" src="{{asset('Frontend/img/logo.png')}} " width="150" alt="сайт по бесплатному созданию метрик для детей и новорожденных"/>
                <p class="fs--1 text-secondary mb-0 fw-medium">Онлайн сервис создания бесплатных метрик для детей и на любые случаи жизни.</p>
            </div>
        </div>
    </div><!-- end of .container-->

</section>
<!-- <section> close ============================-->
<!-- ============================================-->


<div class="py-5 text-center">

    <p id="contakt" class="mb-0 text-secondary fs--1 fw-medium">Все права защищены@Связь с администрацией - admin@doldz.ru</p>
</div>

<!-- ===============================================-->
<!--    JavaScripts-->
<!-- ===============================================-->
@vite([
'resources/js/app.js',
'resources/js/index-page.js',
'resources/js/fontawesome/all.min.js',
'resources/js/theme.js',
'resources/css/theme.css',
])
<script src="https://yastatic.net/share2/share.js"></script>

@endsection
