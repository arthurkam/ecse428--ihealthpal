@extends('layouts.main')

@section('css') 
    <link href="/css/bootstrap.css" rel="stylesheet">
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
@stop
@section('code')
    <!-- // <script src="/js/jquery.js"></script> -->
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
     <script src="/js/rangy-core.js"></script>
     <script src="/js/caret-position.js"></script>
     <script src="/js/bootstrap-typeahead.js"></script>
     <script src="/js/bootstrap-tagautocomplete.js"></script>

    <script>
      $(function() {
        $( "#food" ).autocomplete({
          source: "/diary/search",
          select: function( event, ui ) {
            $( '#to_food_id' ).val( ui.item.id );
          }
        });
        $('#food').first().focus();
      });
    </script>
@stop