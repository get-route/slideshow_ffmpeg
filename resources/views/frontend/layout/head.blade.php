@section('head')
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!-- ===============================================-->
        <!--    Document Title-->
        <!-- ===============================================-->
        <title>@yield('title')</title>
        <meta name="description" content="@yield('description')">


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


        <!-- ===============================================-->
        <!--    Stylesheets-->
        <!-- ===============================================-->
        @vite(['resources/css/theme.css'])
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
	</head>
    @endsection
