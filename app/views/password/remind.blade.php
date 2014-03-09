@extends('layouts.main')

@section('content')	


	{{ Form::open(array('url'=>'password/forgot', 'class'=>'form-horizontal')) }}

		{{Form::label('email', 'E-mail Address :')}}
		{{ Form::text('email', null, array('id'=>'firstEmail', 'class'=>'form-control', 'placeholder'=>'Email Address')) }}
		</br>
		{{Form::label('firstname', 'First Name :')}}
		{{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
		</br>
		{{Form::label('lastname', 'Last Name :')}}
		{{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
		</br> 
		</br>		   
		{{ Form::submit('Submit', array('class'=>'btn btn-large btn-primary', 'id'=>'submit1_button'))}}		   							

	{{ Form::close() }}
	
	
	<div id="getModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Security question check</h2>
          </div>
          <div class="modal-body" id="deleteBody">
          	{{ Form::open(array('url'=>'password/checkSecurityQuestion', 'class'=>'form-horizontal')) }}
          		<h3 id="sQuestion"></h3>
    	      	{{Form::label('security_answer', 'Security Answer :')}}
			  	{{ Form::text('security_answer', null, array('class'=>'form-control', 'placeholder'=>'Security Answer')) }}
			  	{{ Form::text('email2', null, array('id'=>"hiddenEmail",'class'=>'form-control hidden', 'placeholder'=>'email')) }}

		  	{{ Form::close() }}
			  
          </div>
          <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button id="confirmSQuestion" type="button" class="btn btn-danger">Continue</button>
                </div>
        </div>

      </div>
    </div>
	
@stop

@section('code') 

    <script>
      $(function() {
        $(document).bind("ajaxSend",function(){
          $("#loading").show();
          console.log("load")
        }).bind("ajaxComplete",function(){
          $("#loading").fadeOut(1000);
        });
		$("#submit1_button").on("click",function(e){
			e.preventDefault();
			$.ajax({
				url:"/password/forgot",
				data:$("form").serialize(),
				method:"POST"
			}).done(function(data){
				console.log(data);
				$("#hiddenEmail").val($("#firstEmail").val());
				$("#sQuestion").html(data);
/* 				alert("yay2"); */
			
			$("#getModal").modal({});
			}).fail(function(jqXHR, status, error){
/* 				alert(error); */
				console.log(jqXHR);
				var txt = JSON.parse(jqXHR.responseText);
				alert(txt.error.message);				
			})
			
		});
		$("#confirmSQuestion").on("click",function(e){
			e.preventDefault();
			$.ajax({
				url:"/password/checkSecurityQuestion",
				data:$("form").serialize(),
				method:"POST"
			}).done(function(data){
				console.log(data);
/* 				window.location.replace("/password/reset"); */
				$("html").html(data);
				
/* 				alert("yay2"); */
			
			$("#getModal").modal({});
			}).fail(function(jqXHR, status, error){
/* 				alert(error); */
				console.log(jqXHR);
				var txt = JSON.parse(jqXHR.responseText);
				alert(txt.error.message);				
			})
			
		});
      });
    </script>
@stop
