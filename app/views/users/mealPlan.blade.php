@extends('layouts.main')
@section('content')

<h2>Meal Plan Suggestions</h2>
@if(count($goals)===0 || isset($lastGoal)==0 || $lastGoal===null)
	<!-- Nav tabs -->
	<ul class="nav nav-tabs">
	  <li class="active"><a href="#massGain1" data-toggle="tab">Mass Gain Meal Plan 1</a></li>
	  <li><a href="#massGain2" data-toggle="tab">Mass Gain Meal Plan 2</a></li>
	  <li><a href="#weightLoss1" data-toggle="tab">Weight Loss Meal Plan 1</a></li>
	  <li><a href="#weightLoss2" data-toggle="tab">Weight Loss Meal Plan 2</a></li>
	</ul>

	<!-- Tab panes -->
	<div class="tab-content">
		@include('mealplans.weightgain1')
		@include('mealplans.weightgain2')
		@include('mealplans.weightloss1')
		@include('mealplans.weightloss2')
	</div>


@else
    @if($lastGoal->goal_type=="Gain")
    <!-- Nav tabs -->
    	<ul class="nav nav-tabs">
    	  <li class="active"><a href="#massGain1" data-toggle="tab">Mass Gain Meal Plan 1</a></li>
    	  <li><a href="#massGain2" data-toggle="tab">Mass Gain Meal Plan 2</a></li>
    	</ul>

    	<!-- Tab panes -->
    	<div class="tab-content">
    		@include('mealplans.weightgain1')
    		@include('mealplans.weightgain2')
    	</div> 
    @else
 <!-- Nav tabs -->
     	<ul class="nav nav-tabs">
            <li class="active"><a href="#weightLoss1" data-toggle="tab">Weight Loss Meal Plan 1</a></li>
            <li><a href="#weightLoss2" data-toggle="tab">Weight Loss Meal Plan 2</a></li>
     	</ul>
     	<!-- Tab panes -->
     	<div class="tab-content">
  @include('mealplans.weightloss1')
  @include('mealplans.weightloss2')
     	</div> 
    @endif
@endif

@stop