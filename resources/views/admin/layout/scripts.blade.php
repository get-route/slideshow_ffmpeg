@section('scripts')
    <script src="{{asset('Cabinet/js/vendor.bundle.base.js')}}"></script>
    @vite([
    'resources/js/app.js',
    'resources/js/cabinet/chart.js',
    'resources/js/cabinet/Chart.min.js',
    'resources/js/cabinet/jquery.dataTables.js',
    'resources/js/cabinet/dataTables.bootstrap4.js',
    'resources/js/cabinet/off-canvas.js',
    'resources/js/cabinet/hoverable-collapse.js',
    'resources/js/cabinet/template.js',
    ])
@endsection
