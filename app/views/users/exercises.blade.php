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
        .routine { border: 2px solid #C8C8C8;
                    margin: 8px;
                    display: inline-block;
                    width: 400px;
                  }
    </style>
@stop

@section('content')

<h2>Exercises & Workout Routines</h2>
<div class="tab-content">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
	<li class="active"><a href="#routines" data-toggle="tab">Routines</a></li> 
	<li><a href="#chest" data-toggle="tab">Chest</a></li>
	<li><a href="#back" data-toggle="tab">Back</a></li>
	<li><a href="#arms" data-toggle="tab">Arms</a></li>
	<li><a href="#legs" data-toggle="tab">Legs</a></li>
	<li><a href="#abs" data-toggle="tab">Abs</a></li>
  <li><a href="#cardio" data-toggle="tab">Cardio</a></li>
  <li><a href="#stretching" data-toggle="tab">Stretching</a></li>
  <li><a href="#overview" data-toggle="tab">My Workout</a></li>
</ul>

<!-- Tab panes -->
    <div class="tab-pane fade in active" id="routines">
        <!-- WORKOUT ROUTINES -->
        <div class="row">
          <!-- Mass Gain -->
          <h2>Build your Own Training Program in 4 Simple Steps</h2>
          <p class="bg-primary" style="width:720px;"><b>Step 1:</b> Determine your <a href="goals" style="color: #FFFFFF;">goals</a>.
          <br /><b>Step 2:</b> Select the program whose purpose corresponds to your latest goal.
          <br /><b>Step 3:</b> Choose exercises as per selected program.
          <br /><b>Step 4:</b> Follow the indicated guidelines during your workout sessions.</p>
          <p style="font-size: 16px;"><i>*For optimal results, iHealthPal recommend using its meal plan suggestions together with one of the following workout routines.</i></p>
          </p>
          <div class="routine">
            <table class="table">
              <tr class="success">
                <td colspan="2">
                    <p style="margin:0; padding:0;">Mass Gain
                      <img src="img/exercises/routines/gain_mass.png" width="40">
                    </p>
                </td>
              </tr>
              <tr>
                <th>Purpose</th>
                <td>To strengthen and enlarge the muscles of the body through exercise</td>
              </tr>
              <tr>
                <th>Target Audience</th>
                <td>Those who want to gain muscular mass</td>
              </tr>
              <tr>
                <th>Duration</th>
                <td>8 to 16 weeks</td>
              </tr>
              <tr>
                <th>Frequency</th>
                <td>3 to 4 times a week</td>
              </tr>
              <tr>
                <th>Series</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Repetitions</th>
                <td>12</td>
              </tr>
              <tr>
                <th>Intensity</th>
                <td>High</td>
              </tr>
              <tr>
                <th>Workout Routine</th>
                <td>
                  • 6 to 8 distinct exercises<br />
                  • Max of 2 per muscular region<br />
                  • 10 minutes of cardio (high intensity)
                </td>
              </tr>
            </table>
          </div>
          <!-- Weight Loss -->
          <div class="routine">
            <table class="table">
              <tr class="danger">
                <td colspan="2">
                    <p style="margin:0; padding:0;">Weight Loss
                      <img src="img/exercises/routines/weight_loss.png" width="40">
                    </p>
                </td>
              </tr>
              <tr>
                <th>Purpose</th>
                <td>To reduce body mass and body fat through aerobic exercise</td>
              </tr>
              <tr>
                <th>Target Audience</th>
                <td>Those who want to lose weight and stay fit</td>
              </tr>
              <tr>
                <th>Duration</th>
                <td>8 to 16 weeks</td>
              </tr>
              <tr>
                <th>Frequency</th>
                <td>3 to 5 times a week</td>
              </tr>
              <tr>
                <th>Series</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Repetitions</th>
                <td>12</td>
              </tr>
              <tr>
                <th>Intensity</th>
                <td>Low</td>
              </tr>
              <tr>
                <th>Workout Routine</th>
                <td>
                  • 5 to 6 distinct exercises<br />
                  • Max of 2 per muscular region<br />
                  • 30 minutes of cardio (moderate intensity)
                </td>
              </tr>
            </table>
          </div>  
        </div>
        <div class="row">
          <!-- Mass Gain -->
          <div class="routine">
            <table class="table">
              <tr class="warning">
                <td colspan="2">
                  <p style="margin:0; padding:0;">Strength
                      <img src="img/exercises/routines/strength.png" width="40">
                  </p>
                </td>
              </tr>
              <tr>
                <th>Purpose</th>
                <td>To build the strength, anaerobic endurance, and size of skeletal muscles</td>
              </tr>
              <tr>
                <th>Target Audience</th>
                <td>Those who want to get stronger</td>
              </tr>
              <tr>
                <th>Duration</th>
                <td>8 to 16 weeks</td>
              </tr>
              <tr>
                <th>Frequency</th>
                <td>3 times a week</td>
              </tr>
              <tr>
                <th>Series</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Repetitions</th>
                <td>6</td>
              </tr>
              <tr>
                <th>Intensity</th>
                <td>Very high</td>
              </tr>
              <tr>
                <th>Workout Routine</th>
                <td>
                  • 5 to 6 distinct exercises<br />
                  • Max of 2 per muscular region<br />
                  • 10 minutes of cardio (high intensity)
                </td>
              </tr>
            </table>
          </div>
          <!-- Weight Loss -->
          <div class="routine">
            <table class="table">
              <tr class="info">
                <td colspan="2">
                  <p style="margin:0; padding:0;">Flexibility
                      <img src="img/exercises/routines/flexibility.png" width="40">
                  </p>
                </td>
              </tr>
              <tr>
                <th>Purpose</th>
                <td>To stretch muscles and help the body stay limber</td>
              </tr>
              <tr>
                <th>Target Audience</th>
                <td>Those who want to become more flexible and gain freedom of movement</td>
              </tr>
              <tr>
                <th>Duration</th>
                <td>8 to 16 weeks</td>
              </tr>
              <tr>
                <th>Frequency</th>
                <td>3 times a week</td>
              </tr>
              <tr>
                <th>Series</th>
                <td>3</td>
              </tr>
              <tr>
                <th>Hold Time</th>
                <td>30 to 60 seconds</td>
              </tr>
              <tr>
                <th>Intensity</th>
                <td>Low</td>
              </tr>
              <tr>
                <th>Workout Routine</th>
                <td>
                  • 3 to 4 distinct stretching exercises<br />
                  • Max of 2 per muscular region<br />
                  • 10 to 15 minutes of cardio (low intensity)
                </td>
              </tr>
            </table>
          </div>  
        </div>
    </div>
    <div class="tab-pane fade" id="chest">
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
        <br>
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Bench Press</option>
		  <option>Ball Bench Press</option>
		  <option>45-Degree Bench Press</option>
		  <option>Inclined Bench Press</option>
		  <option>Declined Press</option>
		  <option>Fly On Ball</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
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
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Rowing</option>
		  <option>Inverted Fly</option>
		  <option>Lat Pull-Down</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
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
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Bent-Over Biceps Curl</option>
		  <option>Biceps Military Press</option>
		  <option>Ball Biceps</option>
		  <option>Triceps On Bench</option>
		  <option>Triceps Extension</option>
		  <option>Arm Extensions On Machine</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
        
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
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Squat</option>
		  <option>Dead Lift</option>
		  <option>Leg Press</option>
		  <option>Leg Extensions</option>
		  <option>Seated Abductors</option>
		  <option>Seated Adductors</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
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
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Crunch</option>
		  <option>Hips Lifts</option>
		  <option>Plank On Elbows</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
                
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
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Biking</option>
		  <option>Running</option>
		  <option>Elliptical Trainer</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
 
    </div>
    <div class="tab-pane fade" id="stretching">
        <!-- STRETCHING -->
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Adductors Stretching</p>                                                       
              <img src="img/exercises/stretching/adductors_stretching.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Back Stretching</p>                                                       
              <img src="img/exercises/stretching/back_stretching.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Oblique Stretching</p>                                                       
              <img src="img/exercises/stretching/oblique_stretching.jpg" width="150">
           </div> 
        </div> 
        <div class="row">
           <div class="exercise">
              <p style="margin:0; padding:0;">Pectoral Stretching</p>                                                       
              <img src="img/exercises/stretching/pec_stretching.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Shoulder Capsule Stretching</p>                                                       
              <img src="img/exercises/stretching/shoulder_stretching.jpg" width="150">
           </div>
            <div class="exercise">
              <p style="margin:0; padding:0;">Triceps Stretching</p>                                                       
              <img src="img/exercises/stretching/triceps_stretching.jpg" width="150">
           </div> 
        </div> 
        {{Form::open(array('url' => 'exercises/save'))}}
		<select class="form-control" name="exercise">
		  <option>Adductors Stretching</option>
		  <option>Back Stretching</option>
		  <option>Oblique Stretching</option>
		  <option>Pectoral Stretching</option>
		  <option>Shoulder Capsule Stretching</option>
		  <option>Triceps Stretching</option>
		</select>		
		<br>
		<div class="form-group">
			  <label for="Weight" class="col-sm-2 control-label">Weight</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="weight" placeholder="Number" min="1">
			  </div>
			  <label for="Sets" class="col-sm-2 control-label">Sets</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="sets" placeholder="Number" min="1">
			  </div>
			  <label for="Reps" class="col-sm-2 control-label">Reps</label>
			  <div class="col-sm-10">
				  <input type="number" class="form-control" name="reps" placeholder="Number" min="1">
			  </div>
		</div>
		{{Form::submit('Save', array('class' => 'btn btn-success'))}}
        {{Form::close()}}
 
    </div>
    <div class="tab-pane" id="overview">

    <table class="table">
    <tr class="info">
      <td>Exercise type</td>
      <td>Weight</td>
      <td>Sets</td>
      <td>Reps</td>
      <td>Finish Date</td>
    </tr>

    @foreach($exercises as $key => $value)
      <tr class = "success">
        <td>{{{$value->exercise}}}</td>
        <td>{{{$value->weight}}}</td>
        <td>{{{$value->sets}}}</td>
        <td>{{{$value->reps}}}</td>
        <td>{{{$value->created_at}}}</td>
      </tr>
      @endforeach
    
    </table>

    <button onclick="printSummary()" class="btn btn-default">
      <span class="glyphicon glyphicon-print"></span>&nbsp;Print Summary
    </button>
    <br />
    {{Form::open(array('url' => 'exercises/delete'))}}
    {{Form::submit('Delete Exercises', array('class' => 'btn btn-danger'))}}
    {{Form::close()}}

  </div>
</div>


@stop

@section('code')
    <script>
      printSummary(){
        window.print();
      }
    </script>
@stop