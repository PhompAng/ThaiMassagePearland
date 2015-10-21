<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!--StyleSheet-->
	{!! HTML::style('backend_assets/css/bootstrap.min.css')!!}
	{!! HTML::style('backend_assets/css/AdminLTE.min.css')!!}
	{!! HTML::style('backend_assets/css/skin-blue.min.css')!!}
	{!! HTML::style('backend_assets/css/font-awesome.min.css')!!}
	{!! HTML::style('backend_assets/css/style.css')!!}
	<!--StyleSheet-->
	<title>{{ $title or 'Test' }}</title>
</head>
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
          <b>Version</b> 2.3.0
        </div>
        <strong>Copyright © 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
	</footer>
	{!! HTML::script('backend_assets/js/jquery-2.1.4.min.js') !!}
	{!! HTML::script('backend_assets/js/bootstrap.min.js') !!}
	{!! HTML::script('backend_assets/js/app.min.js') !!}
	@yield('js')
</body>
</html>