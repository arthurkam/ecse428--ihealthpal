@extends('layouts.main')
@section('content') 

    <div class="container">

    <div class="row">
        {{ Form::open( array('url' => '/diary/search') ) }}
        {{ Form::hidden( 'to_food_id', Input::old( 'to_food_id' ), array( 'id' => 'to_food_id' ) ) }}

        {{ Form::text( 'food', Input::old( 'food' ), array ('id'=>'food','class' => 'input-lg', 'placeholder'=>'Search for a food' ) ) }}

        <br/> <br/>
        {{ Form::submit('Search', array('class'=>'btn btn-lg btn-primary'))}}
        {{ Form::close() }}
    </div>
    <br />

    <div class="row">
    
    <h4> ..or, alternatively, add the food to the database yourself!</h4>
    <br />
        {{ Form::open( array('url' => '/diary/add') ) }}
        {{ Form::hidden( 'to_food_id', Input::old( 'to_food_id' ), array( 'id' => 'to_food_id' ) ) }}

        {{ Form::text( 'food', Input::old( 'food' ), array ( 'class' => 'input-lg', 'placeholder'=>'Name' ) ) }}
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
        {{ Form::text( 'calcium', Input::old( 'calcium' ), array ('class' => 'input-lg', 'placeholder'=>'Calcium (daily %)' ) ) }}                                      {{ Form::text( 'iron', Input::old( 'iron' ), array ('class' => 'input-lg', 'placeholder'=>'Iron (daily %)' ) ) }}
    <br/><br/>
        {{ Form::submit('Add', array('class'=>'btn btn-lg btn-primary'))}}
        {{ Form::close() }}
    </div>
    <br /><br />
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>

      $(function() {
        $( "#food" ).autocomplete({
          source: "/diary/search",
          select: function( event, ui ) {
            $( '#to_food_id' ).name( ui.item.id );
          }
        });
      });
    </script>
@stop