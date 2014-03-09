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
			  
					<!------------- Carousel ----------->
					<div id="carousel-example-generic1" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic1" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic1" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic1" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic1" data-slide-to="3"></li>
					    <li data-target="#carousel-example-generic1" data-slide-to="4"></li>
					  </ol>
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    
					    <div class="item active">
					      <img src="/img/diary_tutorial1.png" alt="diary tutorial1">
					      <div class="carousel-caption">
							<p style="color:black">Select Diary Icon</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/diary_tutorial2.png" alt="diary tutorial2">
					      <div class="carousel-caption">
							<p style="color:black">1. Overview page is displayed</p>
							<p style="color:black">2. To add the food in diary page, click 'Log food' tab</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/diary_tutorial3.png" alt="diary tutorial3">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/diary_tutorial4.png" alt="diary tutorial4">
					      <div class="carousel-caption">
							<p style="color:black">1. New food item is added in the diary page</p>
							<p style="color:black">2. Nutrition information of the added food is displayed</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/diary_tutorial5.png" alt="diary tutorial5">
					      <div class="carousel-caption">
							<p style="color:black">1. If you cannot find the food, you can manually add the nutrition information of food</p>
							<p style="color:black"></p>
							<p style="color:black">2. After filling in the boxes, click 'Add' button</p>
					      </div>
					    </div>
					    
					  </div>					
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic1" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic1" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
					<!------------- Carousel ends ----------->
			    
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
			      
			        <!------------- Carousel ----------->
					<div id="carousel-example-generic2" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic2" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
					  </ol>
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    
					    <div class="item active">
					      <img src="/img/goal_tutorial1.png" alt="goal tutorial1">
					      <div class="carousel-caption">
							<p style="color:black">Select Goal Icon</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/goal_tutorial2.png" alt="goal tutorial2">
					      <div class="carousel-caption">
							<p style="color:black">1. History of set long-term goals are displayed</p>
							<p style="color:black">2. To set new goal, click 'Add new goals' tab</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/goal_tutorial3.png" alt="goal tutorial3">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/goal_tutorial4.png" alt="goal tutorial4">
					      <div class="carousel-caption">
							<p style="color:black">New goal is added to the Goal page</p>
					      </div>
					    </div>
					    					    
					  </div>					
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic2" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic2" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
					<!------------- Carousel ends ----------->
					
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
			      
			        <!------------- Carousel ----------->
					<div id="carousel-example-generic3" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic3" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic3" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic3" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic3" data-slide-to="3"></li>
					    <li data-target="#carousel-example-generic3" data-slide-to="4"></li>
					  </ol>
					  <!-- Wrapper for slides -->
					  <div class="carousel-inner">
					    
					    <div class="item active">
					      <img src="/img/stat_tutorial1.png" alt="stat tutorial1">
					      <div class="carousel-caption">
							<p style="color:black">Select Diary Icon</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/stat_tutorial2.png" alt="stat tutorial2">
					      <div class="carousel-caption">
							<p style="color:black">1. Recorded personal body status are displayed</p>
							<p style="color:black">2. To add new body status, click 'Add New Status' tab</p>
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/stat_tutorial3.png" alt="stat tutorial3">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img src="/img/stat_tutorial4.png" alt="stat tutorial4">
					      <div class="carousel-caption">
							<p style="color:black">1. Newly added status is recorded</p>
							<p style="color:black">2. New body status are calculated and displayed</p>
					      </div>
					    </div>
					    
					    
					  </div>					
					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic3" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left"></span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic3" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right"></span>
					  </a>
					</div>
					<!------------- Carousel ends ----------->
					
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