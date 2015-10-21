<body class="skin-blue layout-top-nav">

	<div class="warpper">

	@include('backend.layout.nav')

	<div class="content-wrapper" style="min-height: 880px">
		<section class="content-header">
			<h1>{{ $page_title or 'Dashboard'}} <small>{{ $page_subtitle or 'Just a Rather Very Intelligent Systems.' }}</small></h1>
		</section>

		<section class="content">
			@yield('content')
		</section>
	</div>
	<footer class="main-footer">
		<div class="pull-right hidden-xs">
          <b>Version</b> 1.0.0
        </div>
        <strong>Copyright © 2015 <a href="http://www.thaimassagepearland.com" target="_blank">thaimassagepearland.com</a></strong> All rights reserved.
	</footer>
	{!! HTML::script('backend_assets/js/jquery-2.1.4.min.js') !!}
	{!! HTML::script('backend_assets/js/bootstrap.min.js') !!}
	{!! HTML::script('backend_assets/js/app.min.js') !!}
	{!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}
    {!! HTML::script('//cdn.datatables.net/1.10.5/js/jquery.dataTables.js') !!}
    {!! HTML::script('//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js') !!}
	@yield('js')
</body>
</html>