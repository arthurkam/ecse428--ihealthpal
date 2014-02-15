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
            <div class="col-md-8">
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
                  <p>First Name: </p>
                  <p>Last Name: </p>
                  <p>Email: </p>
                  <p>Member since </p>
                </div>
                <div class="tab-pane fade" id="edit">
                  <br />
                  TO BE COMPLETED
                  This should be a form where placeholders correspond to data currently
                  stored in database.
                  <button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Save Changes
                  </button>
                </div>
                <div class="tab-pane fade" id="share">
                  <br />
                  TO BE COMPLETED
                  Add some of the following here:
                  Facebook / Twitter / LinkedIn / GooglePlus
                </div>
                <div class="tab-pane fade" id="delete">
                  <br />
                  <p>**This action is irreversible. Your profile and any related data will be removed from our servers the moment you submit your request.</p>
                  <br />
                  <button type="submit" class="btn btn-danger btn-lg">
                    <span class="glyphicon glyphicon-trash"></span>&nbsp;Delete Account
                  </button>
                </div>
              </div>
            </div>
        </div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>