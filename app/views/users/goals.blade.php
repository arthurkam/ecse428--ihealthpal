@extends('layouts.main')
@section('content')

<div class="tab-content">
  <ul class="nav nav-tabs">
		<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
		<li><a href="#Add" data-toggle="tab">Add new Goals</a></li>
  </ul>

  <div class="tab-pane fade in active" id="overview">
 	<br>
 	<table class="table">
	 	<tr class="info">
		 	<td>Goal type</td>
		 	<td>Weight</td>
		 	<td>Weight Unit</td>
		 	<td>Time Interval</td>
		 	<td>Time Unit</td>
		 	<td>Start Date</td>
	 	</tr>
	 	@foreach($goals as $key => $value)
  		<tr>
	  		<td class = "success">{{{$value->goal_type}}}</td>
	  		<td class = "success">{{{$value->weight}}}</td>
	  		<td class = "success">{{{$value->weight_unit}}}</td>
	  		<td class = "success">{{{$value->time_interval}}}</td>
	  		<td class = "success">{{{$value->time_unit}}}</td>
	  		<td class = "success">{{{$value->created_at}}}</td>
  		</tr>
  	@endforeach

 	</table>
  </div>

  <div class="tab-pane fade" id="Add">
	{{ Form::open(array('url' => 'goals/set')) }}
    	{{Form::label('Goals', 'Choose your goals: ')}}
    	{{Form::select('goal_type', array('Lose' => 'Lose weight', 'Gain' => 'Gain weight'));}}
    	{{Form::text('weight', '10', array('class' => 'form-control'));}}
    	{{Form::select('weight_unit', array('Kg' => 'Kg', 'Lb' =>'Lb'));}}
    	{{Form::label('over', 'over');}}
    	{{Form::text('time_interval', '12',array('class' => 'form-control'));}}
    	{{Form::select('time_unit', array('Days' => 'Day', 'Months' => 'Month', 'Years' => 'Year'));}}
		<br>
		<br>
    	{{Form::submit('Set the Goal!', array('class' => 'btn btn-success'));}}

	{{ Form::close() }}
  </div>
    </div> <!-- /container -->

@stop
