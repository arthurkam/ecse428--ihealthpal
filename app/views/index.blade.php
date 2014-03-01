@extends('layouts.main')
@section('content')	
        <p><a class="btn btn-primary btn-lg" href="users/register" role="button">Sign up &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Monitor</h2>
          <img src="/img/monitor_icon.jpg" alt"monitor" width="100" style="margin-bottom:15px;">
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Manage</h2>
          <img src="/img/manage_icon.png" alt"manage" width="100" style="margin-bottom:15px;">
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Share</h2>
          <img src="/img/share_icon.png" alt"share" width="100" style="margin-bottom:15px;">
          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
        </div>
      </div>
@stop