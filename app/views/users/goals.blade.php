@extends('layouts.main')
@section('content')
 <br>

  <ul class="nav nav-tabs">
		<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
		<li><a href="#Add" data-toggle="tab">Add new Goals</a></li>
  </ul>

  <div class="tab-pane fade in active" id="overview">	
 	<br>
  	@foreach($goals as $key => $value)
  	<table class="table">
  	<tr>
	  	<td class="active">Goal: {{$value->goal_type}} {{$value->weight}} kg over {{$value->time_interval}} starts from {{$value->created_at}}</td>
  	<br>
  	</tr>  
  	</table>	
  	@endforeach
  </div>

  <div class="tab-pane fade" id="Add">
	{{ Form::open(array('url' => 'goals/set')) }}
    	{{Form::label('Goals', 'Choose your goals: ')}}
    	{{Form::select('goal_type', array('Lose' => 'Lose weight', 'Gain' => 'Gain weight'));}}
    	
    	{{Form::text('weight', '10', array('class' => 'form-control'));}}
    	{{Form::label('weight_unit', 'kg');}}
    	
    	{{Form::label('over', 'over');}}
    	{{Form::text('time_interval', '12',array('class' => 'form-control'));}}
    	{{Form::select('time_unit', array('Days' => 'Day', 'Months' => 'Month', 'Years' => 'Year'));}}
		<br>
    	{{Form::submit('Set the Goal!', array('class' => 'btn btn-success'));}}
	
	{{ Form::close() }}
  	
    </div> <!-- /container -->

@stop

