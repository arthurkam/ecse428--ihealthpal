@extends('layouts.main')
@section('content') 

    <div class="container">

    <div class="row">
        {{ Form::open( array('url' => '/diary/add') ) }}
        {{ Form::hidden( 'to_food_id', Input::old( 'to_food_id' ), array( 'id' => 'to_food_id' ) ) }}

        {{ Form::text( 'food', Input::old( 'food' ), array ('id'=>'food','class' => 'input-lg', 'placeholder'=>'Search for a food' ) ) }}

        <br/> <br/>
        {{ Form::submit('Search', array('class'=>'btn btn-lg btn-primary'))}}
        {{ Form::close() }}
    </div>

    <br /><br />
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>

      $(function() {
        $( "#food" ).autocomplete({
          source: "/diary/search",
          select: function( event, ui ) {
            $( '#food' ).val( ui.item.label );
          }
        });
      });
    </script>
@stop