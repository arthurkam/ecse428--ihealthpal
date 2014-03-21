@extends('layouts.main')
@section('content')

<h2>Achievements</h2>
@if(count($totalAchievements)===0)
Sorry you achievements are empty, please set a goal or something
@else
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">All</a></li>
  <li><a href="#profile" data-toggle="tab">Completed</a></li>
  <li><a href="#settings" data-toggle="tab">In Progress</a></li>
</ul>

<div class="tab-content">
  <div class="tab-pane active" id="all">
    @foreach ($achievement as $totalAchievements)

    @endforeach
  </div>
  <div class="tab-pane" id="completed">
    @foreach ($achievement as $completedAchievements)

    @endforeach
  </div>
  <div class="tab-pane" id="inProgress">
    <table class="table table-striped table-hover">
        <tr>
            <th>
                Goal
            </th>
            <th>
                Date
            </th>
        </tr>
    @foreach ($achievement as $inProgressAchievements)
        <tr>
            <td>
                {{goal}}
            </td>
            <td>
                {{date}}
            </td>
        </tr>
    @endforeach
    </table>
  </div>
</div>
@endif
@stop
@section('code')

@stop