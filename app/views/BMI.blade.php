<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>iHealthPal</title>

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
          <a class="navbar-brand" href="">Account Settings</a>
          <a class="navbar-brand" href="about.html">About</a>
          <a class="navbar-brand" href="contact.html">Contact</a>
          <a class="navbar-brand" href="contact.html">Help</a>         
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

      <h3>BMI Calculator</h3>
      <div class="container">
      	<div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>Your BMI is :<span id="BMI">
            @if ($height>0)
            {{{$weight/($height*$height)}}}
            @else
            0
            @endif
          </span>
          </h2>
          </div>
        </div>
        <div class="row">
      		<div class="col-md-8 col-md-offset-2">
      			<form role="form">
      			  <div class="form-group">
      			    <label for="height">Height(cm)</label>
      			    <input type="number" class="form-control" id="height" placeholder="Height" value="{{{$height or 0}}}">
      			  </div>
      			  <div class="form-group">
      			    <label for="weight">weight(kg)</label>
      			    <input type="number" class="form-control" id="weight" placeholder="Weight" value="{{{$weight or 0}}}">
      			  </div>
      			  <div class="form-group">
      			  	<label for='updateCheckbox'>Update my information on the profile</label>

      			 	<input type="checkbox" id="updateCheckbox"/>
      			 </div>
      			  <button id="submitBMI" type="submit" class="btn btn-success">Calculate</button>
      			</form>
      		</div>
      	</div>
      </div>

      <footer>
        <p>&copy; iHealthPal 2014</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        //event binder for the submit button
        $("#submitBMI").on("click",function(e){
          e.preventDefault();

          var height = $("#height").val();
          var weight = $('#weight').val();
          if(!$.isNumeric(height)||!$.isNumeric(weight)){
            alert("please enter numbers!");
            return false;
          }
          if(height<=0){
            alert("Please make sure your height is a valid positive nonzero number!");
            return false;
          }
          if(weight<=0){
            alert("Please make sure your weight is a valid positive nonzero number!");
            return false;
          }
          height/=100;
          var BMIVal = weight/(height*height);
          $("#BMI").html(" "+BMIVal);
          console.log(height,weight);
          //if the user wants to update BMI as well, do ajax
          if($("#updateCheckbox").is(":checked")){
            console.log("checedd");
            $.ajax({
              url:"BMI",
              type:"post",
              data:{
                weight:weight,
                height:height
              }
            })
          }


        })
      })
    </script>
  </body>
</html>