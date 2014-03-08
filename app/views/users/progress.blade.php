@extends('layouts.main')
@section('content')


<div class="tab-content">
  <ul class="nav nav-tabs">
    <li class="active"><a href="#Overview" data-toggle="tab">Overview</a></li>
    <li><a href="#Chart" data-toggle="tab">Chart</a></li>
    <li><a href="#Table" data-toggle="tab">Table</a></li>
  </ul>
  <div class="text-hide">
      {{$id = Auth::user()->id;}}
      
      
     
  </div>
  <div class="tab-pane fade in active" id="Overview">
      <br>
      {{$query = Status::where('id', '1')->orderBy('created_at', 'desc')->first();}}
      {{Form::open();}}
          {{Form::label('Your current height:');}}
          {{$recent_height = $query->addSelect('height')->first()}}
          <br>
          {{Form::label('Your current weight')}}
          {{$query->addSelect('weight')->first()}}
      {{Form::close();}}
  </div>
  <div class="tab-pane fade" id="Chart">
  </div>
  <div class="tab-pane fade" id="Table">
  </div>
</div>

@stop
