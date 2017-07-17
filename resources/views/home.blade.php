@extends('layouts.app')

@section('content')
  <!--
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
              <table style="width:100%">
              -->
              <div class = "container-fluid">

  @foreach ($record as $diary)
    <div class = "row">
  <form>
    <div class = "col-md-4"> {{ $diary->error }}</div>
      <div class = "col-md-4"> {{ $diary->fix }}</div>
            <div class = "col-md-4"> <button>Add New</button></div>
                  <div class = "col-md-4"> <button>Edit</button></div>
                  </div>
                </form>
              </div>

              @endforeach





       </body>


@endsection
