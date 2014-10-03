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


@if ($ws->isODworkshop)
  <a href="/tilmelding/dagsvaerk" class="button">
@else
  <a href="/tilmelding/{{$ws->id}}" class="button">
@endif
Jeg vil gerne<br/>tilmelde mig denne workshop</a></p>


      <p><a href="/">Tilbage til forsiden</a></p>
    </div>
  </div>
@stop
