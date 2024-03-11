@section('title','Админка для пользователей')
@include('admin.layout.header')
@include('admin.layout.footer')
@include('admin.layout.sidebar')
@include('admin.layout.scripts')
    <!DOCTYPE html>
<html lang="en">

<head>
    @yield('head')

</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{route('index')}}"><img src="{{asset('Frontend/img/logo.png')}}" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
    </nav>    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
    @yield('sidebar')
    <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">

                <div class="row" id="app">
                    <admin-users-component></admin-users-component>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                @yield('footer')
            </footer>
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
@yield('scripts')




<!-- plugins:js -->

</body>

</html>
