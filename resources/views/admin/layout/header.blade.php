@section('head')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    @vite(['resources/css/cabinet/mdi/css/materialdesignicons.min.css', 'resources/css/cabinet/base/vendor.bundle.base.css', 'resources/css/cabinet/datatables.net-bs4/dataTables.bootstrap4.css', 'resources/css/cabinet/style.css',])

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('Frontend/img/favicons/apple-touch-icon.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('Frontend/img/favicons/favicon-32x32.png')}} ">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('Frontend/img/favicons/favicon-16x16.png')}} ">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('Frontend/img/favicons/favicon.ico')}} ">
    <link rel="manifest" href="{{asset('Frontend/img/favicons/manifest.json')}} ">
    <meta name="msapplication-TileImage" content="{{asset('Frontend/img/favicons/mstile-150x150.png')}} ">
    <meta name="theme-color" content="#ffffff">


@endsection
