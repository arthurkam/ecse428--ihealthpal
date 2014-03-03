@extends('layouts.main')
@section('content')	
    
    <!-- Opening a form, by defalut, the Post method is assumed. -->
	{{ Form::open(array('url'=>'users/create', 'class'=>'form-signup')) }}
	   <h2 class="form-signup-heading">Please Register</h2>
	 
	   <ul>
	      @foreach($errors->all() as $error)
	         <li>{{ $error }}</li>
	      @endforeach
	   </ul>
	   		{{Form::label('firstname', 'First Name :')}}
	   		{{ Form::text('firstname', null, array('class'=>'input-block-level', 'placeholder'=>'First Name')) }}
		   </br>
		   {{Form::label('lastname', 'Last Name :')}}
		   {{ Form::text('lastname', null, array('class'=>'input-block-level', 'placeholder'=>'Last Name')) }}
		   </br>
		   {{Form::label('email', 'E-mail Address :')}}
	       {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email Address')) }}
		   </br>
		   {{Form::label('password', 'Password :')}}
	       {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		   </br>
		   {{Form::label('password_confirmation', 'Confirm Password :')}}
		   {{ Form::password('password_confirmation', array('class'=>'input-block-level', 'placeholder'=>'Confirm Password')) }}
		   </br>
		   {{Form::label('security_question', 'Security Question :')}}
		   {{ Form::select('security_question', array('1' => 'What is your mother\'s maiden name?', 
		   						'2' => 'Who is your best friend from childhood?',
		   						'3' => 'What is the name of your first pet?',
		   						'4' => 'What is the name of your spouse?',
		   						'5' => 'Who is your favourite athlete?')) }}
		   </br>
		   {{Form::label('secret_answer', 'Security Answer :')}}
		   {{ Form::text('secret_answer', null, array('class'=>'input-block-level', 'placeholder'=>'Security Answer')) }}
		   </br>		   
		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary'))}}
	   
	{{ Form::close() }}

@stop