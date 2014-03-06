@extends('layouts.main')
@section('content')	
	<div class="container" id="body">
		<div class="row">
			<h2>Help</h2>
		</div>
	</div>
	
			@unless (Auth::check())
			<center><img src="/img/instruction1.png" alt="instruction image" height="500"></center>
			
			<div class="panel-group" id="accordion" >
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			          Registration
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse">
			      <div class="panel-body">
			       <p>If you are using our site for the first time, you have to create a new account.</p>
				   <p>For creating a new account, click the sign up button on the home page, then enter all required information.</p>
				   <p>Then you can use your email and password to login.</p>
				   <p><td><a href="users/register">Go to 'Sign up' Page</a></td></p>
				  </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			          Login
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>If you are a registered user, Please sign in.</p>
			        <p>You have to enter registered email address as username and correct password</p>
			        <p><td><a href="users/login">Go to 'Login' Page</a></td></p>
			      </div>
			    </div>
			  </div>
			</div>
			@endunless
			
			@if (Auth::check())
			<center><img src="/img/instruction2.png" alt="instruction image" height="500"></center>

			<div class="panel-group" id="accordion" >
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
			         	Diary
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse">
			      <div class="panel-body">
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					  </ol>
					
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    <div class="item active">
					      <img src="/img/diary_tutorial_1.png" alt="diary tutorial1">
					      <div class="carousel-caption">
							<p style="color:black">Select Diary Icon</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/diary_tutorial_2.png" alt="diary tutorial2">
					      <div class="carousel-caption">
							<p style="color:black">1. Type name of food you want to search</p>
							<p style="color:black">2. Click 'Search'button</p>
					      </div>
					    </div>
					  </div>
					
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>

			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
			         	Goal
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>Coming Soon</p>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
			         	Personal Stats
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>Coming Soon</p>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
			         	Progress
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFour" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>Coming Soon</p>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
			         	BMI Calculator
			        </a>
			      </h4>
			    </div>
			    <div id="collapseFive" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>Coming Soon</p>
			      </div>
			    </div>
			  </div>
			  <div class="panel panel-default">
			    <div class="panel-heading">
			      <h4 class="panel-title">
			        <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
			         	Setting
			        </a>
			      </h4>
			    </div>
			    <div id="collapseSix" class="panel-collapse collapse">
			      <div class="panel-body">
			        <p>Coming Soon</p>
			      </div>
			    </div>
			  </div>
			  
			  
			</div>

@endif
@stop