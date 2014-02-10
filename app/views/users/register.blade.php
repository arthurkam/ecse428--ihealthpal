<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>iHealthPal | Register</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          <a class="navbar-brand" href="about">About</a>
          <a class="navbar-brand" href="contact">Contact</a>
        </div>
        <div class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" role="form" method="post">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
    
    <!-- Opening a form, by defalut, the Post method is assumed. -->
	{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
	   <h2 class="form-signup-heading">Please Register</h2>
	 
	   <ul>
	      @foreach($errors->all() as $error)
	         <li>{{ $error }}</li>
	      @endforeach
	   </ul>
	   		{{Form::label('firstname', 'First Name :		')}}
	   		{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
		   </br>
		   {{Form::label('lastname', 'Last Name :		')}}
		   {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
		   </br>
		   {{Form::label('email', 'E-mail Address :		')}}
	       {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
		   </br>
		   {{Form::label('password', 'Password :		')}}
	       {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		   {{Form::label('password_confirmation', 'Confirm Password :		')}}
		   {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
		 </br>
		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
	   
	{{ Form::close() }}

  

      <footer>
        <p>&copy; iHealthPal 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
