{{-- app/views/home.blade.php --}}

@extends('layouts.oeggef')

@section('body')

<?php $header=Config::get('gef.frontpage.message'); ?>

<div class="wsblocks">
  <div class="row">
    <div class="small-12 columns">
      <p>{{$header}}</p>
      <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
        @foreach($workshops as $ws)
        <li>
          <div class="wsno c{{$ws->id % 6}}">Workshop {{$ws->id}}</div>
          <div class="block c{{$ws->id % 6}}"><a href="/workshop/{{$ws->id}}">{{ $ws->title }}</a></div>
          @if ($ws->freeplaces > 0)
            <div class="pladser">{{$ws->freeplaces}}
            @if ($ws->freeplaces == 1)
            plads
            @else
            pladser
            @endif
            </div>
          @else
            <div class="pladser">Ikke flere pladser</div>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>



@stop
