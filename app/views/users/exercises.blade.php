@extends('layouts.main')
@section('css') 
    <style type="text/css">
        .exercise { border: 3px solid transparent;
                    padding: 4px;
                    margin: 2px;
                    display: inline-block;
                    width: 164px;
                  }
        .exercise p { font-size: 16px;

                  }                 
        .exercise:hover { border: 3px solid #3399FF; 
                          background-color: #3399FF;
                          color: #FFFFFF;
                        }
    </style>
@stop

@section('content')

<h2>Exercises & Workout Routines</h2>

<!-- Nav tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#chest" data-toggle="tab">Chest</a></li>
	<li><a href="#back" data-toggle="tab">Back</a></li>
	<li><a href="#arms" data-toggle="tab">Arms</a></li>
	<li><a href="#legs" data-toggle="tab">Legs</a></li>
	<li><a href="#abs" data-toggle="tab">Abs</a></li>
    <li><a href="#cardio" data-toggle="tab">Cardio</a></li>
    <li><a href="#workout" data-toggle="tab">My Workout</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane fade in active" id="chest">
    	<!-- CHEST -->
        <div class="row">
    	   <div class="exercise">
    		  <p style="margin:0; padding:0;">Bench Press</p>														
    		  <img src="img/exercises/chest/bench_press.jpg" width="150">
    	   </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Ball Bench Press</p>                                                       
              <img src="img/exercises/chest/ball_bench_press.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">45-Degree Bench Press</p>                                                       
              <img src="img/exercises/chest/45degree_bench_press.jpg" width="150">
           </div>       
        </div>
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Inclined Bench Press</p>                                                       
              <img src="img/exercises/chest/inclined_bench_press.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Declined Press</p>                                                       
              <img src="img/exercises/chest/declined_bench_press.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Fly On Ball</p>                                                       
              <img src="img/exercises/chest/fly_ball.jpg" width="150">
           </div>       
        </div>
    </div>
    <div class="tab-pane fade" id="back">
    	<!-- BACK -->
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Rowing</p>                                                       
              <img src="img/exercises/back/rowing.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Inverted Fly</p>                                                       
              <img src="img/exercises/back/inverted_fly.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Lat Pull-Down</p>                                                       
              <img src="img/exercises/back/lat_pull_down.jpg" width="150">
           </div> 
        </div>         
    </div>
    <div class="tab-pane fade" id="arms">
    	<!-- ARMS -->
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Bent-Over Biceps Curl</p>                                                       
              <img src="img/exercises/arms/bent-over_biceps_curls.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Biceps Military Press</p>                                                       
              <img src="img/exercises/arms/biceps_military_press.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Ball Biceps</p>                                                       
              <img src="img/exercises/arms/ball_biceps.jpg" width="150">
           </div>       
        </div>
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Triceps On Bench</p>                                                       
              <img src="img/exercises/arms/triceps_bench.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Triceps Extension</p>                                                       
              <img src="img/exercises/arms/triceps_extension.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Arm Extensions On Machine</p>                                                       
              <img src="img/exercises/arms/arm_extensions_machine.jpg" width="150">
           </div>       
        </div>        
    </div>
    <div class="tab-pane fade" id="legs">
    	<!-- LEGS -->
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Squat</p>                                                       
              <img src="img/exercises/legs/squat.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Dead Lift</p>                                                       
              <img src="img/exercises/legs/dead_lift.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Leg Press</p>                                                       
              <img src="img/exercises/legs/leg_press.jpg" width="150">
           </div>       
        </div>
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Leg Extensions</p>                                                       
              <img src="img/exercises/legs/leg_extensions.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Seated Abductors</p>                                                       
              <img src="img/exercises/legs/seated_abductors.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Seated Adductors</p>                                                       
              <img src="img/exercises/legs/seated_adductors.jpg" width="150">
           </div>       
        </div>        
    </div>
    <div class="tab-pane fade" id="abs">
    	<!-- ABS -->
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Crunch</p>                                                       
              <img src="img/exercises/abs/crunch.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Hip Lifts</p>                                                       
              <img src="img/exercises/abs/hip_lifts.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Plank On Elbows</p>                                                       
              <img src="img/exercises/abs/plank_elbows.jpg" width="150">
           </div> 
        </div>                 
    </div>
    <div class="tab-pane fade" id="cardio">
        <!-- CARDIO -->
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Biking</p>                                                       
              <img src="img/exercises/cardio/biking.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Running</p>                                                       
              <img src="img/exercises/cardio/running.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Elliptical Trainer</p>                                                       
              <img src="img/exercises/cardio/elliptic.jpg" width="150">
           </div> 
        </div>  
    </div>
    <div class="tab-pane fade" id="workout">
        <!-- MY WORKOUT -->
    </div>
</div>


@stop