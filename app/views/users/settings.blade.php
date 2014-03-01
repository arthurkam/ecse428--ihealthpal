<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>iHealthPal | Settings</title>

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
          <a class="navbar-brand" href="home"><span class="glyphicon glyphicon-home"></span>&nbsp;Home</a>
          <a class="navbar-brand" href="about">About</a>
          <a class="navbar-brand" href="contact">Contact</a>
          <a class="navbar-brand" href="">Help&nbsp;<span class="glyphicon glyphicon-question-sign"></span></a>
        </div>
        <div class="navbar-collapse collapse">
          <form action="/logout" class="navbar-form navbar-right" role="form" method="get">
            <button type="submit" class="btn btn-danger">
              Logout &nbsp;<span class="glyphicon glyphicon-log-out"></span>
            </button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

      <h3>Account Settings</h3>
      <div class="container">
        <div class="row">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                <li><a href="#edit" data-toggle="tab">Edit</a></li>
                <li><a href="#share" data-toggle="tab">Share</a></li>
                <li><a href="#delete" data-toggle="tab">Delete</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="overview">
                  <br />
                  <p>First Name: {{$firstname = Auth::user()->firstname}}</p>
                  <p>Last Name: {{$lastname = Auth::user()->lastname}}</p>
                  <p>Email: {{$email = Auth::user()->email}}</p>
                  <p>Member since {{{$timestamp = Auth::user()->created_at}}}</p>
                  <p>Weight: {{{$weight = Auth::user()->weight}}} kg, Height: {{{$height = Auth::user()->height}}} cm</p>
                  <p>ID: {{{$ID = Auth::user()->id}}}</p>
                </div>
                <div class="tab-pane fade" id="edit">
                  <br />
                  <p>TO BE COMPLETED</p>
                  <p>This should be a form where placeholders correspond to data currently
                  stored in database.</p>
                  <p>{{ Form::open(array('url' => '/users/update')) }}
	              <ul>
		              @foreach($errors->all() as $error)
					  <li>{{ $error }}</li>
					  @endforeach
	              </ul>
				 	   	{{Form::label('firstname', 'First Name : ')}}
				 	   	{{Form::text('firstname', $firstname)}}
				 	   	</br>
				 	   	{{Form::label('lastname', 'Last Name : ')}}
				 	   	{{Form::text('lastname', $lastname)}}
				 	   	</br>
				 	   	{{Form::label('email', 'Email : ')}}
				 	   	{{Form::text('email', $email)}}
				 	   	</br>
				 	   	{{Form::label('weight', 'Weight : ')}}
				 	   	{{Form::text('weight', $weight)}}
				 	   	</br>
				 	   	
				 	   	{{Form::label('height', 'Height : ')}}
				 	   	{{Form::text('height', $height)}}
				 	   	</br>
				 	   	{{Form::submit('Save Changes', array('class'=>'btn btn-primary'))}}
					 {{ Form::close() }}</p>
                  <br/>
                  <!--button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Save Changes
                  </button-->
                </div>
                <div class="tab-pane fade" id="share">
                  <br />
                  <p>TO BE COMPLETED</p>
                  <p>Add some of the following here: <br />
                  Facebook / Twitter / LinkedIn / GooglePlus</p>
                </div>
                <div class="tab-pane fade" id="delete">
                  <br />
                  <p>This action is irreversible. Your profile and any related data will be removed from our servers the moment you submit your request.</p>
                  <br />
                   <!-- <a href="/delete" onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><i class="glyphicon glyphicon-trash"></i> Delete Account</a> -->
                    <a href="#" id="deleteConfirm"><i class="glyphicon glyphicon-trash"></i> Delete Account</a>
                </div>
              </div>
        </div>
      </div>

    </div> <!-- /container -->
    <div id="deleteModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Confirmation for account deletion.</h2>
          </div>
          <div class="modal-body" id="deleteBody">
            Are you sure you want to delete your account?
          </div>
          <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button id="confirmAccountDelete" type="button" class="btn btn-danger">Continue</button>
                </div>
        </div>
      
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        $("#deleteConfirm").on("click",function(e){

            e.preventDefault();
            $("#deleteModal").modal({backdrop:"static"});
        });
        $("#confirmAccountDelete").on("click",function(e){
          e.preventDefault();
          $("#deleteBody").html("Please enter your password: <br><form METHOD='POST' action='/delete'><input name='password' type='password' /> <input type='submit' value='Delete Account'></form>");
          $("#confirmAccountDelete").remove();''

        });
        // $("#confirmedAccountDelete").on("click",function(e){
        //   $.ajax({
        //     url:"",
        //     method:"POST",
        //     data:
        //   }); 
        // });
      });
    </script>
  </body>
</html>