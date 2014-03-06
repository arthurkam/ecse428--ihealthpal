@extends('layouts.main')
@section('content')


<div class="tab-content">
  <ul class="nav nav-tabs">
		<li class="active"><a href="#Overview" data-toggle="tab">Overview</a></li>
		<li><a href="#Edit Current Status" data-toggle="tab">Edit Current Status</a></li>
		<li><a href="#Chart" data-toggle="tab">Chart</a></li>
		<li><a href="#Table" data-toggle="tab">Table</a></li>
  </ul>
  
  <div class="tab-pane fade in active" id="Overview">
  </div>
  <div class="tab-pane fade" id="Edit Current Status">
  {{Form::open(array('url' => ''))}}
  </div>
  <div class="tab-pane fade" id="Chart">
  </div>
  <div class="tab-pane fade" id="Table">
  </div>
</div>

@stop


  </body>
</html>