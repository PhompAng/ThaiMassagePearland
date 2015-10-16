<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title or '' }}</title>

    <!-- Bootstrap -->
    {!! HTML::style('/assets/css/bootstrap.min.css') !!}
    {!! HTML::style('//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.css') !!}
    {!! HTML::style('/assets/css/backend.css') !!}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-th"></i> Control Panel</a>
        </div>

        <div class="collapse navbar-collapse" id="navbar">
          <ul class="nav navbar-nav">
            @if(Auth::check())
            <li class="active"><a href="#">Coupon</a></li>
            <!--<li><a href="#">User</a></li>-->
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())
            <li><a href="{{ URL::to('/backend/auth/logout') }}">Logout</a></li>
            @endif
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container">
      <div class="row">
        @yield('content')
      </div>
    </div>

  {!! HTML::script('https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js') !!}
  {!! HTML::script('/assets/js/bootstrap.min.js') !!}
  {!! HTML::script('//cdn.datatables.net/1.10.5/js/jquery.dataTables.js') !!}
  {!! HTML::script('//cdn.datatables.net/plug-ins/f2c75b7247b/integration/bootstrap/3/dataTables.bootstrap.js') !!}

  @yield('js')
  </body>
</html>