@include('backend.layout.head')
@yield('content')
{!! HTML::script('backend_assets/js/jquery-2.1.4.min.js') !!}
{!! HTML::script('backend_assets/js/bootstrap.min.js') !!}
{!! HTML::script('backend_assets/js/app.min.js') !!}
@yield('js')
</body>
</html>