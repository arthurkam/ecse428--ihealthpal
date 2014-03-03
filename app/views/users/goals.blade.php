@extends('layouts.main')
@section('content')	
 <br>
	{{ Form::open(array('url' => 'goals/set')) }}
    	{{Form::label('Goals', 'Choose your goals: ')}}   
    	{{Form::select('goal_type', array('L' => 'Lose weight', 'G' => 'Gain weight'));}}
    	{{Form::text('weight', '10');}}
    	{{Form::label('weight_unit', 'kg');}}
    	{{Form::label('over', 'over');}}
    	{{Form::text('time_interval', '12');}}
    	{{Form::select('time_unit', array('D' => 'Day', 'M' => 'Month', 'Y' => 'Year'));}}
    	</br>
    	{{Form::submit('Set the Goal!');}} 	
	{{ Form::close() }}
	</br>
    </div> <!-- /container -->
    
@stop