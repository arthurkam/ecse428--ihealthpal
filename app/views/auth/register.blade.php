@extends('layouts.main')
@section('content')	
    
    <!-- Opening a form, by defalut, the Post method is assumed. -->
	{{ Form::open(array('url'=>'users/create', 'class'=>'form-horizontal')) }}
	   <h2>Please Register</h2>
	 
	   <ul>
	      @foreach($errors->all() as $error)
	        
	         <li class="text-danger">{{ $error }}</li>
	      @endforeach
	   </ul>
	 
	   		{{Form::label('firstname', 'First Name :')}}
	   		{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
		   </br>
		   {{Form::label('lastname', 'Last Name :')}}
		   {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
		   </br>
		   {{Form::label('email', 'E-mail Address :')}}
	       {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
		   </br>
		   {{Form::label('password', 'Password :')}}
	       {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		   </br>
		   {{Form::label('password_confirmation', 'Confirm Password :')}}
		   {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'Confirm Password')) }}
		   </br>
		   {{Form::label('security_question', 'Security Question :')}}
		   </br>
		   {{ Form::select('security_question', array('What is your mother\'s maiden name?' => 'What is your mother\'s maiden name?', 
		   											  'Who is your best friend from childhood?' => 'Who is your best friend from childhood?',
		   											  'What is the name of your first pet?' => 'What is the name of your first pet?',
		   											  'What is the name of your spouse?' => 'What is the name of your spouse?',
		   											  'Who is your favourite athlete?' => 'Who is your favourite athlete?')) }}

		   </br>
		   </br>
		   {{Form::label('security_answer', 'Security Answer :')}}
		   {{ Form::text('security_answer', null, array('class'=>'form-control', 'placeholder'=>'Security Answer')) }}
		   </br>		   
		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary'))}}
		   </div>
		   
	{{ Form::close() }}

@stop