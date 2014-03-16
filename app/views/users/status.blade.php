@extends('layouts.main')
@section('content')

<div class="tab-content">
	<ul class="nav nav-tabs">
		<li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
		<li><a href="#Add" data-toggle="tab">Add New Status</a></li>
		<li><a href="#Allergy" data-toggle="tab">Add Allergy</a></li>
		<li><a href="#Diseases" data-toggle="tab">Add Disease</a></li>
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
		{{Form::text('height', '', array('class' => 'form-control'));}}
		{{Form::select('height_unit', array('cm' => 'cm', 'inch' =>'inch'));}}
		<br>
		{{Form::label('Update your weight')}}
		{{Form::text('weight', '', array('class' => 'form-control'));}}
		{{Form::select('weight_unit', array('Kg' => 'Kg', 'Lb' =>'Lb'));}}
		<br>
		<br>
		{{Form::submit('Set the Status!', array('class' => 'btn btn-success'));}}
		{{Form::close()}}
	</div>

	<div class="tab-pane fade" id="Allergy">
		<br>
		{{Form::open()}}
		{{Form::checkbox('eggs','eggs')}}
		{{Form::label('eggs')}}
		<br>
		{{Form::checkbox('fish','fish')}}
		{{Form::label('fish')}}
		<br>
		{{Form::checkbox('milk','milk')}}
		{{Form::label('milk')}}
		<br>
		{{Form::checkbox('peanuts','peanuts')}}
		{{Form::label('peanuts')}}
		<br>
		{{Form::checkbox('shellfish','shellfish')}}
		{{Form::label('shellfish')}}
		<br>
		{{Form::checkbox('soya','soya')}}
		{{Form::label('soya')}}
		<br>
		{{Form::checkbox('wheat','wheat')}}
		{{Form::label('wheat')}}
	</div>
	<div class="tab-pane fade" id="Diseases">
		<br>
		{{Form::open()}}
		{{Form::checkbox('fibromyalgia','fibromyalgia')}}
		{{Form::label('fibromyalgia')}}
		<br>
		{{Form::checkbox('diabetes','diabetes')}}
		{{Form::label('diabetes')}}
		<br>
		{{Form::checkbox('depression','depression')}}
		{{Form::label('depression')}}
		<br>
		{{Form::checkbox('metabolic syndrome','metabolic syndrome')}}
		{{Form::label('metabolic syndrome')}}
		<br>
		{{Form::checkbox('binge-eating disorder','binge-eating disorder')}}
		{{Form::label('binge-eating disorder')}}
		<br>
		{{Form::checkbox('adult ADHD','adult ADHD')}}
		{{Form::label('adult ADHD')}}
		<br>
		{{Form::label('Others:')}}
		{{Form::text('others', ''}}
	</div>
</div>
@stop
