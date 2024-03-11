@section('title','Форма повторного подтверждения пароля')
@section('description','Форма для ручного подтверждения Вашего пароля путем отправки доп сообщения.')
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
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-5 d-block "
         data-navbar-on-scroll="data-navbar-on-scroll">
        @yield('menu')
    </nav>

    <section style="padding-top: 7rem;">

        <!--/.bg-holder-->

        <div class="container" >
            <div class="row" id="app">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Ваш аккаунт еще не подтвержден') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Новая ссылка для подтверждения аккаунта, была отправлена на Ваш Email') }}
                                </div>
                            @endif

                            {{ __('Перед началом повторной отправки, проверьте СПАМ и прочие папки Вашей электронной почты, возможно письмо затерялось.') }}
                            {{ __('Если письмо найти не удалось, то смело жмите на повторную отправку') }}
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <p class="text-center">
                                    <button type="submit" class="btn btn-dark ">{{ __('Отправить письмо повторно') }}</button>
                                </p>

                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>




</main>
<!-- ===============================================-->
<!--    End of Main Content-->
<!-- ===============================================-->
<!-- ============================================-->
@yield('footer')
</body>

</html>

