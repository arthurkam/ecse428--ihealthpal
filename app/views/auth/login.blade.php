@extends('layouts.main')
@section('content')	

      {{ Form::open(array('url' => 'users/login')) }}
	<h2>Login</h2>

	<!-- if there are login errors, show them here -->
	<p>
		{{ $errors->first('email') }}
		{{ $errors->first('password') }}
	</p>

	<p>
		{{ Form::label('email', 'Email Address') }}
		{{ Form::text('email', Input::old('email'), array('placeholder' => 'example@example.com')) }}
	</p>

	<p>
		{{ Form::label('password', 'Password') }}
		{{ Form::password('password') }}
	</p>

	<p>{{ Form::submit('Submit!') }}</p>
	<p>{{ Form::button('Forgot Password?', array('href' => "password/remind", 'role' => 'button'))}}</p>
	{{ Form::close() }}

@stop