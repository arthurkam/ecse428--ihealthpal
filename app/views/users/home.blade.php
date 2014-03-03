@extends('layouts.main')
@section('content')	

        <p>Welcome, {{{ $name }}}!</p>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3>Diary</h3>
          <a href="diary"><input type="image" name="diary" value="diary" src="img/food_diary.png" width="70" style="margin-bottom:15px"; />
       </div>
        <div class="col-md-3">
          <h3>Goals</h3>
          <a href="goals"><input type="image" name="goals" value="goals" src="img/goals_icon.png" width="70" style="margin-bottom:15px"; /></a>
       </div>
        <div class="col-md-3">
          <h3>Personal stats</h3>
          <a href="status"><input type="image" name="stats" value="stats" src="img/personal_stats.png" width="70" style="margin-bottom:15px"; /></a>
        </div>
       <div class="col-md-3">
          <h3>Progress</h3>
            <a href="progress"><input type="image" name="progress" value="progress" src="img/line_chart_icon.png" width="90" style="margin-bottom:15px"; />
        </div>

      </div>   

      <div class="row">
        <div class="col-md-3">
          <h3>BMI Calculator</h3>
            <a href="BMI"><input type="image" name="BMI" value="BMI" src="img/BMI_icon.png" width="90" style="margin-bottom:15px"; /></a>
        </div>
          <div class="col-md-3">
            <h3>Settings</h3>
            <a href="settings"><input type="image" name="settings" value="settings" src="img/settings_icon.png" width="60" style="margin-bottom:15px"; /></a>
        </div>
      </div> 

@stop