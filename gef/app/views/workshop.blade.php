{{-- app/views/workshop.blade.php --}}

@extends('layouts.oeggef')

@section('body')

  <div class="row">
    <div class="small-12">

      <div class="wsheader">
        <h2>Workshop {{$ws->id}}</h2>
      </div>
      <h2 class="subheader">{{$ws->name}}</h2>
      
      <p>{{$ws->description}}</p>


      <p><a href="/">Tilbage til forsiden</a></p>
    </div>
  </div>
@stop
