<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
	@unless (Auth::check())
    	<title>iHealthPal</title>
	@endunless
	@if (Auth::check())
		<title>iHealthPal | {{{Auth::user()->firstname}}}</title>
	@endif	
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-47850364-1', 'inc.gs');
      ga('send', 'pageview');
    </script>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">iHealthPal</a>
          <a class="navbar-brand" href="/about">About</a>
          <a class="navbar-brand" href="/contact">Contact</a>
          <a class="navbar-brand" href="/resource">Resource</a>
          <a class="navbar-brand" href="/help">Help&nbsp;<span class="glyphicon glyphicon-question-sign"></span></a>         
        </div>
        @unless (Auth::check())
        <div class="navbar-collapse collapse">
          <form action="users/login" class="navbar-form navbar-right" role="form" method="post">
            <div class="form-group">
              <input name="email" type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input name="password" type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">
              <span class="glyphicon glyphicon-log-in"></span> &nbsp;Login
            </button>
            <a class="btn btn-warning" href="password/remind" role="button">Forgot Password?</a>
            </form>
        </div>
          @endunless
          
          @if (Auth::check())
            <div class="navbar-collapse collapse">
				<form action="/logout" class="navbar-form navbar-right" role="form" method="get">
					<button type="submit" class="btn btn-danger">
					Logout &nbsp;<span class="glyphicon glyphicon-log-out"></span>
					</button>
				</form>
			</div>
          @endif
          
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      @unless (Auth::check())
        <img src="/img/logo.png" alt="logo" height="200">
	  @endunless
	  @if (Auth::check())
	  	<img src="/img/logo.png" alt="logo" height="100">
	  @endif
	<p>Health and Fitness Tracking System.</p>
	
	@yield('content')
	</div>
	</div>
      <footer>
        <p>&copy; iHealthPal 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>