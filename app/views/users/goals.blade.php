@extends('layouts.main')
@section('content')
 <br>

  <ul class="nav nav-tabs">
		<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
		<li><a href="#Add" data-toggle="tab">Add new Goals</a></li>
  </ul>

  <div class="tab-pane fade in active" id="overview">
  <br>
  	{{{$user_id = Auth::user()->id}}}
  	{{{$goal = DB::table('goals')->where('user_id', '=', 1)->only('weight')}}}
  	<br>
  	{{Form::label('Goals:')}}

  </div>

  <div class="tab-pane fade" id="Add">
	{{ Form::open(array('url' => 'goals/set')) }}
    	{{Form::label('Goals', 'Choose your goals: ')}}
    	{{Form::select('goal_type', array('L' => 'Lose weight', 'G' => 'Gain weight'));}}
    	<br>
    	{{Form::text('weight', '10', array('class' => 'form-control'));}}
    	{{Form::label('weight_unit', 'kg');}}
    	<br>
    	{{Form::label('over', 'over');}}
    	{{Form::text('time_interval', '12',array('class' => 'form-control'));}}
    	{{Form::select('time_unit', array('D' => 'Day', 'M' => 'Month', 'Y' => 'Year'));}}
    	<br>
  </div>
    	{{Form::submit('Set the Goal!', array('class' => 'btn btn-success'));}}

	{{ Form::close() }}
	</br>
    </div> <!-- /container -->

@stop