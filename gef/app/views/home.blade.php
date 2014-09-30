{{-- app/views/home.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <div class="row">
    <div class="small-12 columns">
      <ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
        @foreach($workshops as $ws)
        <li>
          @if ($ws->freeplaces > 0)
            <div class="block"><a href="/workshop/{{$ws->id}}">{{ $ws->name }}</a></div>
            <div class="pladser">{{$ws->freeplaces}} pladser</div>
          @else
            <div class="block">{{ $ws->name }}</div>
            <div class="pladser">Ikke flere pladser</div>
          @endif
        </li>
        @endforeach
      </ul>
    </div>
  </div>
<p><a href="/">Tilbage til forsiden</a></p>

@stop
