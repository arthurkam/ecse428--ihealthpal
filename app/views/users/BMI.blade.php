@extends('layouts.main')
@section('content')	
    
      <h3>BMI Calculator</h3>
      <div class="container">
      	<div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2>Your BMI is :<span id="BMI">
            @if ($height>0)
            {{{100*100*$weight/($height*$height)}}}
            @else
            0
            @endif
          </span>
          </h2>
          </div>
        </div>
        <div class="row">
      		<div class="col-md-8 col-md-offset-2">
      			<form role="form">
      			  <div class="form-group">
      			    <label for="height">Height(cm)</label>
      			    <input type="number" class="form-control" id="height" placeholder="Height" value={{{Auth::user()->height}}}>
      			  </div>
      			  <div class="form-group">
      			    <label for="weight">weight(kg)</label>
      			    <input type="number" class="form-control" id="weight" placeholder="Weight" value={{{Auth::user()->weight}}}>
      			  </div>
      			  <div class="form-group">
      			  	<label for='updateCheckbox'>Update my information on the profile</label>

      			 	<input type="checkbox" id="updateCheckbox"/>
      			 </div>
      			  <button id="submitBMI" type="submit" class="btn btn-success">Calculate</button>
      			</form>
      		</div>
      	</div>
      </div>

@stop

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
        //event binder for the submit button
        $("#submitBMI").on("click",function(e){
          e.preventDefault();

          var height = $("#height").val();
          var weight = $('#weight').val();
          if(!$.isNumeric(height)||!$.isNumeric(weight)){
            alert("please enter numbers!");
            return false;
          }
          if(height<=0){
            alert("Please make sure your height is a valid positive nonzero number!");
            return false;
          }
          if(weight<=0){
            alert("Please make sure your weight is a valid positive nonzero number!");
            return false;
          }
          height/=100;
          var BMIVal = weight/(height*height);
          $("#BMI").html(" "+BMIVal);
          console.log(height,weight);
          //if the user wants to update BMI as well, do ajax
          if($("#updateCheckbox").is(":checked")){
            console.log("checedd");
            $.ajax({
              url:"BMI",
              type:"post",
              data:{
                weight:weight,
                height:height*100
              }
            })
          }


        })
      })
    </script>
  </body>
</html>