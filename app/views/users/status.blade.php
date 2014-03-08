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
		</div>

		<table class="table">
			<tr class="success">
				<td>{{Form::label('Your max weight:')}}</td>
				<td>{{Status::where('id',$id)->max('weight');}}</td>
				<td>kg</td>
			</tr>
			<tr class="success">
				<td>{{Form::label('Your min weight:')}}</td>
				<td>{{Status::where('id',$id)->min('weight');}}</td>
				<td>kg</td>
			</tr>
			<tr class="success">
				<td>{{Form::label('Your avg weight:')}}</td>
				<td>{{Status::where('id',$id)->avg('weight');}}</td>
				<td>kg</td>
			</tr>
			<tr class="success">
				<td>{{Form::label('Your max height:')}}</td>
				<td>{{Status::where('id',$id)->max('height');}}</td>
				<td>cm</td>
			</tr>
			<tr class="success">
				<td>{{Form::label('Your min height:')}}</td>
				<td>{{Status::where('id',$id)->min('height');}}</td>
				<td>cm</td>
			</tr>
			<tr class="success">
				<td>{{Form::label('Your avg height:')}}</td>			
				<td>{{Status::where('id',$id)->avg('height');}}</td>
				<td>cm</td>
			</tr>
		</table>
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
