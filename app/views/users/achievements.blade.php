@extends('layouts.main')
@section('content')

<h2>Achievements</h2>
@if(count($achievements)===0)
Sorry you achievements are empty, please set a goal or something
@else
<ul class="nav nav-tabs">
  <li class="active"><a href="#all" data-toggle="tab">All</a></li>
  <li><a href="#completed" data-toggle="tab">Completed</a></li>
  <li><a href="#inProgress" data-toggle="tab">In Progress</a></li>
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
        </tr>
    @foreach ($achievements as $achievement)
    <tr  <?
            $date = $achievement->completedDate;
            if($date!=="0000-00-00 00:00:00"){
              echo 'class="success"';
            }
          ?> >
        <td>
          {{$achievement->oWeight}} kg at {{$achievement->start_date}}
        </td>
        <td>
          {{$achievement->weight}} kg at {{$achievement->eta}}
        </td>
        <td>
          <?
            $date = $achievement->completedDate;
            if($date==="0000-00-00 00:00:00"){
              echo "not completed";
            }
            else{
              echo $date;
            }
          ?>

        </td>
    </tr>
    @endforeach
    </table>

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
            {{$achievement->oWeight}}
          </td>
          <td>
            {{$achievement->weight}}
          </td>
          <td>
            <?
              // $date = $achievement->completedDate;
              //if($date==="0000-00-00 00:00:00"){
              //  echo "not completed";
              //}
              //else{
                echo $date;
              //}
            ?>

          </td>
      </tr>
    @endforeach
    </table>
    @endif
  </div>
  <div class="tab-pane" id="inProgress">
    @if (isset($inProgress)==0 && $inProgress!==null)
    You don't have no achievements that are in progress. Set a goal for yourself!
    @else
    <h3>Your current weight is {{$tes =Auth::user()->weight}} Kg.</h3>
    <h3>Your target weight is {{$inProgress->weight}} Kg.</h3>
    <h3>You have {{number_format((strtotime($achievement->eta)-time())/83600,0)}} days left.</h3>
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

@stop