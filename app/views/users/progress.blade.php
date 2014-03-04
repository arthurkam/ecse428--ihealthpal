@extends('layouts.main')
@section('content')	
    <br /><br />

@stop

    <script>
      $(function() {
        $( "#food" ).autocomplete({
          source: "/diary/search",
          select: function( event, ui ) {
            $( '#to_food_id' ).val( ui.item.id );
          }
        });
      });
    </script>
  </body>
</html>