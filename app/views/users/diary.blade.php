@extends('layouts.main')

@section('css') 
    <link href="/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
        .ui-helper-hidden-accessible { display:none; }
    </style>
@stop

@section('content') 

    <div class="container">
      <br /><br />
    <div class="row">
        {{ Form::open( array('url' => '/diary/add') ) }}
        <!--{{ Form::hidden( 'to_food_id', Input::old( 'to_food_id' ), array( 'id' => 'to_food_id' ) ) }}-->
       
        {{ Form::text( 'food', Input::old( 'food' ), array ('id'=>'food','class' => 'input-lg', 'placeholder'=>'Search for a food') ) }}
        <img class="" id="loading" src="img/ajax.gif" style="display: none;"/>
    </div>
    <div class="row">
          <br />
          {{ Form::text( 'name', Input::old( 'name' ), array ( 'class' => 'input-lg', 'placeholder'=>'Name' ) ) }}
          {{ Form::text( 'quantity', Input::old( 'quantity' ), array ('class' => 'input-lg', 'placeholder'=>'Serving size' ) ) }}
          {{ Form::text( 'calories', Input::old( 'calories' ), array ('class' => 'input-lg', 'placeholder'=>'Calories' ) ) }}
           <br />
          {{ Form::text( 'fat', Input::old( 'fat' ), array ('class' => 'input-lg', 'placeholder'=>'Fat (gr)' ) ) }}
          {{ Form::text( 'sodium', Input::old( 'sodium' ), array ('class' => 'input-lg', 'placeholder'=>'Sodium (mg)' ) ) }}
          {{ Form::text( 'carbohydrates', Input::old( 'carbohydrates' ), array ('class' => 'input-lg', 'placeholder'=>'Carbohydrates (gr)' ) ) }}
          {{ Form::text( 'fibre', Input::old( 'fibre' ), array ('class' => 'input-lg', 'placeholder'=>'Fibre (gr)' ) ) }}
          {{ Form::text( 'sugars', Input::old( 'sugars' ), array ('class' => 'input-lg', 'placeholder'=>'Sugars (gr)' ) ) }}
          {{ Form::text( 'protein', Input::old( 'protein' ), array ('class' => 'input-lg', 'placeholder'=>'Protein (gr)' ) ) }}
          <br/>
          {{ Form::text( 'vitaminA', Input::old( 'vitaminA' ), array ('class' => 'input-lg', 'placeholder'=>'Vitamin A (daily %)' ) ) }}
          {{ Form::text( 'vitaminC', Input::old( 'vitaminC' ), array ('class' => 'input-lg', 'placeholder'=>'Vitamin C (daily %)' ) ) }}
          {{ Form::text( 'calcium', Input::old( 'calcium' ), array ('class' => 'input-lg', 'placeholder'=>'Calcium (daily %)' ) ) }}      
          {{ Form::text( 'iron', Input::old( 'iron' ), array ('class' => 'input-lg', 'placeholder'=>'Iron (daily %)' ) ) }}

        <img class="" id="loading" src="img/ajax.gif" style="display: none;"/>

        <br/> <br/>
        {{ Form::submit('Add', array('class'=>'btn btn-lg btn-primary'))}}
        {{ Form::close() }}
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
            $( '#to_food_id' ).val( ui.item.id );
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
@stop