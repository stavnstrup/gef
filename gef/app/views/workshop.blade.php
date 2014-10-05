{{-- app/views/workshop.blade.php --}}

@extends('layouts.oeggef')

@section('body')

  <div class="row">
    <div class="small-12">

      <div class="wsheader c{{$ws->id % 6}}">
        <h2>Workshop {{$ws->id}}</h2>
      </div>
      <h2 class="subheader">#{{$ws->id}}: {{$ws->title}}</h2>
      <h3 class="subheader">{{$ws->subtitle}}</h3>
      
      <p>{{$ws->description}}</p>


@if ($ws->id == 6)
  <a href="/od/tilmelding/har/arbejde/" class="button">
@elseif ($ws->id == 7)
  <a href="/od/tilmelding/har/ikke/arbejde/" class="button">
@else
  <a href="/tilmelding/{{$ws->id}}" class="button">
@endif
Jeg vil gerne<br/>tilmelde mig denne workshop</a></p>


      <p><a href="/">Tilbage til forsiden</a></p>
    </div>
  </div>
@stop
