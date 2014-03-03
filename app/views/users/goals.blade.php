@extends('layouts.main')
@section('content')	
 <br>
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
    	
    	{{Form::submit('Set the Goal!', array('class' => 'btn btn-success'));}} 	
	
	{{ Form::close() }}
	</br>
    </div> <!-- /container -->
    
@stop