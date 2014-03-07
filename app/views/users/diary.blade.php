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
        <img class="" id="loading" src="img/ajax.gif" style="display: none;"/>
        <div id="food" contenteditable="true">TEST HERE<br/> </div>

        <br/> <br/>
        {{ Form::submit('Search', array('class'=>'btn btn-lg btn-primary'))}}
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