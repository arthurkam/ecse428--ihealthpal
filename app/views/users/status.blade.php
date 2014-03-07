@extends('layouts.main')
@section('content')

<div class="tab-content">
  <ul class="nav nav-tabs">
		<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
		<li><a href="#Add" data-toggle="tab">Add New Status</a></li>
  </ul>

  <div class="tab-pane fade in active" id="overview">
  	{{Form::open()}}
  	<br>
	  	<div class="text-hide">
	  	{{$id = Auth::user()->id}}
	  	{{$status = Status::find($id);}}
	  	{{$weight_max = $status->max('weight');}}
	  	{{$weight_min = $status->min('weight');}}
	  	{{$weight_avg = $status->avg('weight');}}
	  	{{$height_max = $status->max('height');}}
	  	{{$height_min = $status->min('height');}}
	  	{{$height_avg = $status->avg('height');}}
	  	</div>
	  	<br>
	
	  	{{Form::label('Your max weight:')}}
	  	{{$weight_max}}
	  	<br>
	  	{{Form::label('Your min weight:')}}
	  	{{$weight_min}}
	  	<br>
	  	{{Form::label('Your avg weight:')}}
	  	{{$weight_avg}}
	  	<br>
	  	{{Form::label('Your max height:')}}
	  	{{$height_max}}
	  	<br>
	  	{{Form::label('Your min height:')}}
	  	{{$height_min}}
	  	<br>
	  	{{Form::label('Your avg height:')}}
	  	{{$height_avg}}
	
  	{{Form::close()}}
  </div>
  <div class="tab-pane fade" id="Add">
  		<br>
  		{{Form::open(array('url' => 'status/set'))}}
  		{{Form::label('Update your height:')}}
  		{{Form::text('height', '10', array('class' => 'form-control'));}}
  		{{Form::select('height_unit', array('cm' => 'cm', 'inch' =>'inch'));}}
  		<br>
  		{{Form::label('Update your weight')}}
  		{{Form::text('weight', '10', array('class' => 'form-control'));}}
  		{{Form::select('weight_unit', array('Kg' => 'Kg', 'Lb' =>'Lb'));}}
  		<br>
  		<br>
  		{{Form::submit('Set the Status!', array('class' => 'btn btn-success'));}}
  		{{Form::close()}}
  </div>
</div>
@stop
