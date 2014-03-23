@extends('layouts.main')
@section('content')
<style>
.hiddenEdit{
  display:none;
}
.attention{
  background: whitesmoke;
  padding: 10px;
  margin-bottom: 17px;
  border: solid 0.5em rgb(228, 228, 228);
  border-radius: 1em;
}
</style>
<div class="">
<h2>Achievements <span><a class="btn btn-danger btn-xs"id="edit" a="#">edit</a></span></h2>
</div>
@if(count($achievements)===0)
Sorry your achievement list is empty. Please set a goal in the goals page.
@else
  <div class="attention">
  @if (isset($inProgress)==0 && $inProgress===null)
   <h3>You don't have achievements that are in progress. Set a goal and challenge yourself!</h3>
   @else
   <h3>Your current weight is {{$tes =Auth::user()->weight}} Kg.</h3>
   <h3>Your target weight is {{$inProgress->weight}} Kg.</h3>
   <h3>You have {{number_format((strtotime($inProgress->eta)-time())/83600,0)}} days left.</h3>
  @endif
</div>
<ul class="nav nav-tabs">
  <li class="active"><a href="#all" id="clickAll" data-toggle="tab">All</a></li>
  <li><a href="#completed" data-toggle="tab">Completed</a></li>
  <!-- <li><a href="#inProgress" data-toggle="tab">In Progress</a></li> -->
  <!-- <li><a href="#missed" data-toggle="tab">In Progress</a></li> -->
</ul>

<div class="tab-content">
  <div class="tab-pane fade in active" id="all">
    <table class="table table-striped table-hover">
        <tr>
            <th>
                From
            </th>
            <th>
                To
            </th>
            <th>
                Completed Date
            </th>
            <th class="hiddenEdit">
              Completed?
            </th>
        </tr>
    @foreach ($achievements as $achievement)
    <tr  <?
            $date = $achievement->completedDate;
            if($achievement->completed==1){
              echo 'class="success"';
            }
          ?> >
        <td>
          <strong>{{$achievement->oWeight}}</strong> kg at {{$achievement->start_date}}
        </td>
        <td>
          <strong>{{$achievement->weight}}</strong> kg at {{$achievement->eta}}
        </td>
        <td>
          <?
            $date = $achievement->completedDate;
            if($achievement->completed!=1){
              echo "not completed";
            }
            else{
              echo $date;
            }
          ?>

        </td>
        <td class="hiddenEdit">
          <input type="checkbox" value="{{$achievement->id}}"
          <?
            if($achievement->completed==1){
              echo "checked";
            }
          ?> 
          >
        </td>
    </tr>
    @endforeach
    </table>
    <div class="hiddenEdit">
      <a id="save" class="btn btn-success" href="#">save</a>
    </div>
  </div>
  <div class="tab-pane" id="completed">
    @if (count($completed)==0)
      Keep it up! Finish what you have set! 
    @else
      <table class="table table-striped table-hover">
          <tr>
              <th>
                  Original Weight
              </th>
              <th>
                Target Weight
              </th>
              <th>
                  Date
              </th>
          </tr>
      @foreach ($completed as $achievement)
      <tr>
          <td>
            {{$achievement->oWeight}} kg
          </td>
          <td>
            {{$achievement->weight}} kg
          </td>
          <td>
            <?
                echo $date;
            ?>

          </td>
      </tr>
    @endforeach
    </table>
    @endif
  </div>
  <div class="tab-pane" id="missed">
     @if (count($missed)==0)
     You don't have no achievements that are in progress. Set a goal for yourself!
     @else
     <table class="table table-striped table-hover">
         <tr>
             <th>
                 Goal
             </th>
             <th>
                 Start Date
             </th>
         </tr>
     @foreach ($missed as $achievement)
     <tr>
         <td>
           {{$achievement->weight}}
         </td>
         <td>

         </td>
     </tr>
     @endforeach
     </table>
     @endif
   </div>
</div>
@endif
@stop
@section('code')
<script>
$(document).ready(function(){
  $("#edit").on("click",function(){
    //toggle to all page
    $("#clickAll").click();
    $(".hiddenEdit").show();
    return false;

  });
  $("#save").on("click",function(){
    //get all the checkboxes
    var data={};
    var inputs = $("#all tr input");
    var $form = $("<form method='POST'>").attr("action", "/achievements");


    for(var i=0;i<inputs.length;i++){
      data[inputs[i].value] = inputs[i].checked;
      $("<input type='hidden'>")
      .attr("name", "edit["+inputs[i].value+"]")
      .attr("value", inputs[i].checked)
      .appendTo($form);
    }
    $form.appendTo("body");
    $form.submit();
    data ={edit:data};
    console.log($.param(data));

    return false;
  });
});
  </script>
@stop