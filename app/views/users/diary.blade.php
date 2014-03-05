@extends('layouts.main')

@section('scripts') 
    <link href="bootstrap.css" rel="stylesheet">

      <script src="jquery.js"></script>
      <script src="rangy-core.js"></script>
      <script src="caret-position.js"></script>
      <script src="bootstrap-typeahead.js"></script>
      <script src="bootstrap-tagautocomplete.js"></script>

    <style type="text/css">
        .ui-helper-hidden-accessible { display:none; }
    </style>
@stop

@section('content') 

    <div class="container">

    <div class="row">
        {{ Form::open( array('url' => '/diary/add') ) }}
        {{ Form::hidden( 'to_food_id', Input::old( 'to_food_id' ), array( 'id' => 'to_food_id' ) ) }}
        
        {{ Form::text( 'food', Input::old( 'food' ), array ('id'=>'food','class' => 'input-lg', 'placeholder'=>'Search for a food') ) }}
        
        <div id="food" contenteditable="true">TEST HERE<br/> </div>

        <br/> <br/>
        {{ Form::submit('Search', array('class'=>'btn btn-lg btn-primary'))}}
        {{ Form::close() }}
    </div>


    <br /><br />

    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>

    <script>
      $(function() {
        $( "div#food" ).autocomplete({
          source: "/diary/search",
          select: function( event, ui ) {
            $( '#to_food_id' ).val( ui.item.id );
          }
        });
        $('div#food').first().focus();
      });
    </script>
@stop