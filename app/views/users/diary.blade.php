@extends('layouts.main')

@section('css') 
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        .ui-helper-hidden-accessible { display:none; }
    </style>
@stop

@section('content') 

    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
      <li class="active"><a href="#overview" data-toggle="tab">Overview</a></li>
      <li><a href="#logFood" data-toggle="tab">Log food</a></li>
    </ul>


    <!-- Tab panes -->
    <div class="tab-content">
      <div class="tab-pane fade in active" id="overview">
         <table class="table">
          <tr class="info">
            <td>Date</td> 
            <td>Name</td>
            <td>Quantity</td>
            <td>Calories</td>
            <td>Fat</td>
            <td>Sodium</td>
            <td>Carbohydrates</td>
            <td>Fibre</td>
            <td>Sugars</td>
            <td>Protein</td>
            <td>Vitamin A</td>
            <td>Vitamin C</td>
            <td>Calcium</td>    
            <td>Iron</td>  
          </tr>
          @foreach($food_entries as $key => $value)
          <tr>
            <td>{{{$value->created_at}}}</td>
            <td>{{{$value->name}}}</td>
            <td>{{{$value->quantity}}}</td>
            <td>{{{$value->calories}}}</td>
            <td>{{{$value->fat}}}</td>
            <td>{{{$value->sodium}}}</td>
            <td>{{{$value->carbohydrates}}}</td>
            <td>{{{$value->fibre}}}</td>
            <td>{{{$value->sugars}}}</td>
            <td>{{{$value->protein}}}</td>
            <td>{{{$value->vitaminA}}}</td>
            <td>{{{$value->vitaminC}}}</td>
            <td>{{{$value->calcium}}}</td>
            <td>{{{$value->iron}}}</td>
            </tr>
          @endforeach
        </table>

        <button type="button" onclick="printSummary()" class="btn btn-default">
          <span class="glyphicon glyphicon-print"></span>&nbsp;Print Summary
        </button>
      </div>

      <div class="tab-pane fade" id="logFood">
        {{ Form::open( array('url' => '/diary/add','role'=>'form') ) }}

        <h2>Search our food database</h2><br />

        <div class="row">
          <div class="col-md-6">
            {{ Form::text( 'food', Input::old( 'food' ), array ('id'=>'food','class' => 'input-lg col-md-12', 'placeholder'=>'Search for a food') ) }}
          </div>
          <div class="col-md-6">
           <img class="" id="loading" src="img/ajax.gif" style="display: none;"/>
          </div>
        </div>

        <br />

        <h3>Can't find your food? Enter its nutritional information manually.</h3><br />
        <table class="table">
          <tr>
            <td>{{Form::label('name', 'Name ')}}</td>
            <td>{{ Form::text( 'name', Input::old( 'name' ), array ( 'class' => 'input-lg', 'placeholder'=>'Name' ) ) }}</td>
            <td>{{Form::label('quantity', 'Quantity ')}}</td>
            <td>{{ Form::text( 'quantity', Input::old( 'quantity' ), array ('class' => 'input-lg', 'placeholder'=>'Serving size' ) ) }}</td>
          </tr>
          <tr>
              <td>{{Form::label('calories', 'Calories ')}}</td>
              <td>{{ Form::text( 'calories', Input::old( 'calories' ), array ('class' => 'input-lg', 'placeholder'=>'Calories' ) ) }}</td>
              <td>{{Form::label('fat', 'Fat ')}}</td>
              <td>{{ Form::text( 'fat', Input::old( 'fat' ), array ('class' => 'input-lg', 'placeholder'=>'Fat (gr)' ) ) }}</td>
              <td>{{Form::label('sodium', 'Sodium ')}}</td>            
              <td>{{ Form::text( 'sodium', Input::old( 'sodium' ), array ('class' => 'input-lg', 'placeholder'=>'Sodium (mg)' ) ) }}</td>
          </tr>
          <tr>
              <td>{{Form::label('carbohydrates', 'Carbohydrates ')}}</td>
              <td>{{ Form::text( 'carbohydrates', Input::old( 'carbohydrates' ), array ('class' => 'input-lg', 'placeholder'=>'Carbohydrates (gr)' ) ) }}</td>
              <td>{{Form::label('fibre', 'Fibre ')}}</td>
              <td>{{ Form::text( 'fibre', Input::old( 'fibre' ), array ('class' => 'input-lg', 'placeholder'=>'Fibre (gr)' ) ) }}</td>
              <td>{{Form::label('sugars', 'Sugars ')}}</td>
              <td>{{ Form::text( 'sugars', Input::old( 'sugars' ), array ('class' => 'input-lg', 'placeholder'=>'Sugars (gr)' ) ) }}</td>
          </tr>
          <tr>
              <td>{{Form::label('protein', 'Protein ')}}</td>
              <td>{{ Form::text( 'protein', Input::old( 'protein' ), array ('class' => 'input-lg', 'placeholder'=>'Protein (gr)' ) ) }}</td>
              <td>{{Form::label('vitaminA', 'Vitamin A ')}}</td>
              <td>{{ Form::text( 'vitaminA', Input::old( 'vitaminA' ), array ('class' => 'input-lg', 'placeholder'=>'Vitamin A (daily %)' ) ) }}</td>
              <td>{{Form::label('vitaminC', 'Vitamin C')}}</td>
              <td>{{ Form::text( 'vitaminC', Input::old( 'vitaminC' ), array ('class' => 'input-lg', 'placeholder'=>'Vitamin C (daily %)' ) ) }}</td>
          </tr>
          <tr>
              <td>{{Form::label('calcium', 'Calcium ')}}</td>
              <td>{{ Form::text( 'calcium', Input::old( 'calcium' ), array ('class' => 'input-lg', 'placeholder'=>'Calcium (daily %)' ) ) }}</td>
              <td>{{Form::label('iron', 'Iron')}}     </td>
              <td>{{ Form::text( 'iron', Input::old( 'iron' ), array ('class' => 'input-lg', 'placeholder'=>'Iron (daily %)' ) ) }}</td>
          </tr>
        </table>

              {{ Form::submit('Add', array('class'=>'btn btn-lg btn-primary'))}}
              {{ Form::close() }}
      </div>
    </div>
    <br /><br />
@stop
@section('code')
  <script src="/js/jquery.js"></script>
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
      $(function() {
        $(document).bind("ajaxSend",function(){
          $("#loading").show();
          console.log("load")
        }).bind("ajaxComplete",function(){
          $("#loading").fadeOut(1000);
        });
        $( "#food" ).autocomplete({
          source: "/diary/search",
          select: function( event, ui ) {
            $( '#to_food_id' ).val( ui.item.id.id );
            var food = ui.item.id;

            for(var x in food){
              console.log(x);
              $("[name='"+x+"']").val(food[x]);
            }

          },
          // appendTo:"#dropdownHere"
          create: function(e, ui){
            // console.log(ui);
            $(".ui-front").addClass("dropdown-menu");
          }
        });
        $('#food').first().focus();
      });
    </script>

    <script>
      printSummary(){
        window.print();
      }
    </script>
@stop