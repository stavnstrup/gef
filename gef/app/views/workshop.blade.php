{{-- app/views/workshop.blade.php --}}

@extends('layouts.oeggef')

@section('body')

  <div class="row">
    <div class="small-12">

      <div class="wsheader c{{$ws->id % 6}}">
       
      </div>
      <h2 class="subheader">{{$ws->id}}: {{$ws->title}}</h2>
      <h3 class="subheader">{{$ws->subtitle}}</h3>
      
      <p>
@if ($ws->teaser_image != '')
  <img class="teaserimg" src="{{asset('img/' . $ws->teaser_image)}}"/>
@endif
{{$ws->description}}</p>

@if ($ws->freeplaces >0)
@if ($ws->id == 6)
  <a href="/od/tilmelding/har/arbejde/" class="button">
@elseif ($ws->id == 7)
  <a href="/od/tilmelding/" class="button">
@else
  <a href="/tilmelding/{{$ws->id}}" class="button">
@endif
Jeg vil gerne<br/>tilmelde mig denne workshop</a></p>
@endif

      <p><a href="/">Tilbage til forsiden</a></p>
    </div>
  </div>
@stop
