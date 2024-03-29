{{-- app/views/workshop.blade.php --}}

@extends('layouts.oeggef')

@section('body')

  <div class="row">
    <div class="small-12 medium-12 large-12 columns">

      <div class="wsheader show-for-large-up c{{$ws->id % 6}}">
       
      </div>
      <h2 class="subheader">{{$ws->id}}: {{$ws->title}}</h2>
      <h3 class="subheader">{{$ws->subtitle}}</h3>
      
      <p>
@if ($ws->teaser_image != '')
  <img class="teaserimg" src="{{asset('img/' . $ws->teaser_image)}}"/>
@endif
{{$ws->description}}</p>


@if ($ws->freeplaces >0 &&  Config::get('gef.tilmelding.lukket') == false)
@if ($ws->id == 1)
  <a href="/soldat/tilmelding/" class="button">
@elseif ($ws->id == 3)
  <a href="/od/tilmelding/har/arbejde/" class="button">
@elseif ($ws->id == 4)
  <a href="/od/tilmelding/" class="button">
@else
  <a href="/tilmelding/{{$ws->id}}" class="button">
@endif
Jeg vil gerne<br/>tilmelde mig denne workshop</a></p>
@endif


<div class="gpager">
<div class="row">
  <div class="small-2 columns">
  @unless ($ws->id == 1)
    <span><a href="/workshop/{{$ws->id - 1}}">&laquo; forrige</a></span>
  @endunless
  </div>
  <div class="small-2 small-offset-8 columns">
  @unless ($ws->id == 33)
    <span class="right"><a href="/workshop/{{$ws->id + 1}}">næste &raquo;</a></span>
  @endunless
  </div>
</div>
</div>


@if ($deltager > 0)
<p>Hvem er de andre <a href="/deltagere/{{$ws->id}}">deltagere</a> i denne workshop?</p>
@endif

     <p><a href="/">Tilbage til forsiden</a></p>

    </div>
  </div>
@stop
