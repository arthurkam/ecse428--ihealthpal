@extends('layouts.main')
@section('content')


<div class="tab-content">
  <ul class="nav nav-tabs">

    <li class="active"><a href="#chart" data-toggle="tab">Chart</a></li>
    <li><a href="#Table" data-toggle="tab">Table</a></li>
  </ul>
  <div class="text-hide">

  </div>
  <div class="tab-pane active" id="chart">
    <h2>Height</h2>
    <div id="weightChart" style="width:800px;height:400px"></div>
  </br>
  <h2>Weight</h2>

    <div id="heightChart" style="width:800px;height:400px"></div>
  </div>
  <div class="tab-pane fade" id="Table">
    <table class="table">
      <tr class="info">
        <td>Weight</td>
        <td>Weight Unit</td>
        <td>Height</td>
        <td>Height Unit</td>
        <td>Time</td>
      </tr>
      @foreach($status as $key => $value)
      <tr class="success">
        <td>{{$value->weight}}</td>
        <td>{{$value->weight_unit}}</td>
        <td>{{$value->height}}</td>
        <td>{{$value->height_unit}}</td>
        <td>{{$value->created_at}}</td>
        <?php
        $t = $value->created_at;
        $status[$key]['created'] = strtotime($t) * 1000
        ?>
      </tr>
      @endforeach
    </table> 
  </div>
</div>

@stop
@section('code')
<script src='//cdnjs.cloudflare.com/ajax/libs/flot/0.8.2/jquery.flot.min.js'></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/flot/0.8.1/jquery.flot.time.min.js"></script>
<script>
$(function() {
  var options = {
      series: {
          lines: { show: true ,
            // fillColor: {colors:["#dddd","#dfdfdf"]},
            fill:true,
          },
          points: { show: true }

      },
      xaxis:{
        mode:"time"
      },
  grid: {
      backgroundColor: {
       colors: ["#f5f5f5", "#91939f"]
     },
     hoverable:true,
     autoHightlight :true
  }
};
  var statusList = {{$status}};
  var weightList={label:"Weight",data:[]};
  var heightList={label:"Height",data:[]};
  //i guess ill just do it in the front end.
  for(var i in statusList){
    var currStat  = statusList[i];
    weightList.data.push([currStat.created,currStat.weight]);
    heightList.data.push([currStat.created,currStat.height]);

  }
  // console.log(weightList);
  if(weightList.data.length>1){
    //cannot have a graph with too little information
    $.plot("#weightChart",[weightList],options);
    $.plot("#heightChart",[heightList],options);
  }
  else{
    $("#chart").html("Too few data points availiable!<br>Please come back later when there is more data collected!");
  }

});
</script>
@stop