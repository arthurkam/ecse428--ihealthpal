@extends('layouts.main')
@section('content')

      <div class="container">
        <div class="row">
          <h3>Account Settings</h3>
          <br />
              <!-- Nav tabs -->
              <ul class="nav nav-tabs">
                <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
                <li><a href="#edit" data-toggle="tab">Edit</a></li>
                <li><a href="#share" data-toggle="tab">Share</a></li>
                <li><a href="#delete" data-toggle="tab">Delete</a></li>
              </ul>

              <!-- Tab panes -->
              <div class="tab-content">
                <div class="tab-pane fade in active" id="overview">
                  <br />
                  <table class="table" style="width:400px">
                  <tr class="info">
                    <td>{{Form::label('firstname', 'First Name : ')}}</td>
                    <td>{{$firstname = Auth::user()->firstname}}</td>
                    </tr>
                  <tr class="success">
                    <td>{{Form::label('lastname', 'Last Name : ')}}</td>
                    <td>{{$lastname = Auth::user()->lastname}}</td>
                  </tr>
                  <tr class="info">
                    <td>{{Form::label('email', 'Email : ')}}</td>
                    <td>{{$email = Auth::user()->email}}</td>
                  </tr>
                  <tr class="success">
                    <td>{{Form::label('weight', 'Weight : ')}}</td>
                    <td>{{{$weight = Auth::user()->weight}}} kg</td>
                  </tr>
                  <tr class="info">
                    <td>{{Form::label('height', 'Height : ')}}</td>
                    <td>{{{$height = Auth::user()->height}}} cm</td>
                  </tr>
                  <tr class="success">
                    <td>{{Form::label('created_at', 'Member since')}}</td>
					<td>{{{$timestamp = Auth::user()->created_at}}}</td>
                  </tr>
                </table>

                </div>
                <div class="tab-pane fade" id="edit">
                  <br />
                  <p>{{ Form::open(array('url' => '/users/update')) }}
	              <ul>
		              @foreach($errors->all() as $error)
					           <li>{{ $error }}</li>
					        @endforeach
	              </ul>

                <table class="table" style="width:400px">
                  <tr>
                    <td>{{Form::label('firstname', 'First Name : ')}}</td>
                    <td>{{Form::text('firstname', $firstname, $attributes = array('class' => 'form-control'))}}</td>
                    </tr>
                  <tr>
                    <td>{{Form::label('lastname', 'Last Name : ')}}</td>
                    <td>{{Form::text('lastname', $lastname, $attributes = array('class' => 'form-control'))}}</td>
                  </tr>
                  <tr>
                    <td>{{Form::label('email', 'Email : ')}}</td>
                    <td>{{Form::text('email', $email, $attributes = array('class' => 'form-control'))}}</td>
                  </tr>
                  <tr>
                    <td>{{Form::label('weight', 'Weight : ')}}</td>
                    <td>{{Form::text('weight', $weight, $attributes = array('class' => 'form-control'))}}</td>
                  </tr>
                  <tr>
                    <td>{{Form::label('height', 'Height : ')}}</td>
                    <td>{{Form::text('height', $height, $attributes = array('class' => 'form-control'))}}</td>
                  </tr>
                </table>

				 	   	</br>
				 	   	{{Form::submit('Save Changes', array('class'=>'btn btn-primary'))}}
					    {{ Form::close() }}</p>
                  <br/>
                  <!--button type="submit" class="btn btn-primary">
                    <span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;Save Changes
                  </button-->
                </div>
                <div class="tab-pane fade" id="share">
                  <br />
                  <p>TO BE COMPLETED</p>
                  <p>Add some of the following here: <br />
                  Facebook / Twitter / LinkedIn / GooglePlus</p>
                </div>
                <div class="tab-pane fade" id="delete">
                  <br />
                  <p>This action is irreversible. Your profile and any related data will be removed from our servers the moment you submit your request.</p>
                  <br />
                   <!-- <a href="/delete" onclick="if(!confirm('Are you sure to delete this item?')){return false;};"><i class="glyphicon glyphicon-trash"></i> Delete Account</a> -->
                    <a href="#" id="deleteConfirm">
                      <button type="submit" class="btn btn-danger btn-lg">
                        <span class="glyphicon glyphicon-trash"></span>&nbsp;Delete Account
                      </button>
                    </a>
                </div>
              </div>
        </div>
      </div>

    </div> <!-- /container -->
    <div id="deleteModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <h2>Confirmation for account deletion.</h2>
          </div>
          <div class="modal-body" id="deleteBody">
            Are you sure you want to delete your account?
          </div>
          <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                  <button id="confirmAccountDelete" type="button" class="btn btn-danger">Continue</button>
                </div>
        </div>

      </div>
    </div>
@stop
@section('code')
    <script>
      $(document).ready(function(){
        $("#deleteConfirm").on("click",function(e){

            e.preventDefault();
            $("#deleteModal").modal({backdrop:"static"});
        });
        $("#confirmAccountDelete").on("click",function(e){
          e.preventDefault();
          $("#deleteBody").html("Please enter your password: <br><form METHOD='POST' action='/delete'><input name='password' type='password' /> <input type='submit' value='Delete Account'></form>");
          $("#confirmAccountDelete").remove();

        });
      });
      </script>
@stop