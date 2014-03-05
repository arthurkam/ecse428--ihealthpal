@extends('layouts.main')
@section('content')	

      {{ Form::open(array('url' => 'users/dologin')) }}
	<h2>Login</h2>

	<!-- if there are login errors, show them here -->
	<p class="text-danger">
		{{ $errors->first('email') }}
		{{ $errors->first('password') }}
	</p>

	<p>
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', Input::old('email'), array('class'=>'form-control','placeholder' => 'example@example.com')) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password', array('class' => 'form-control', 'placeholder' =>'password')) }}
	</p>

	<p>{{ Form::submit('Submit!', array('class' => 'btn btn-success')) }}</p>
	<p>{{ Form::button('Forgot Password?', array('href' => "password/remind", 'role' => 'button', 'class' => 'btn btn-warning'))}}</p>
	{{ Form::close() }}

@stop