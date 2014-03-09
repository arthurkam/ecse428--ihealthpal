@extends('layouts.main')
@section('content')


<div class="tab-content">
  <ul class="nav nav-tabs">

    <li class="active"><a href="#Chart" data-toggle="tab">Chart</a></li>
    <li><a href="#Table" data-toggle="tab">Table</a></li>
  </ul>
  <div class="text-hide">

  </div>
  <div class="tab-pane fade" id="Chart">
    
  </div>
  <div class="tab-pane fade" id="Table">
    <table class="table">
      <tr class="info">
        <td>Weight</td>
        <td>Height</td>
        <td>Time</td>
      </tr>
      @foreach($status as $key => $value)
      <tr class="success">
        <td>{{$value->weight}}</td>
        <td>{{$value->height}}</td>
        <td>{{$value->created_at}}</td>
      </tr>
      @endforeach
    </table> 
  </div>
</div>

@stop
