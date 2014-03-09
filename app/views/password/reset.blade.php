@extends('layouts.main')
@section('content')	
	<form action="{{ action('RemindersController@postReset') }}" method="POST">
	    Email:           <input type="email" name="email">
	    </br>
	    </br>
	    Password:        <input type="password" name="password">
	    </br>
	    </br>
	    Password Confirm:<input type="password" name="password_confirmation">
	    </br>
	    </br>
	    <input type="submit" value="Reset Password">
	</form>
@stop