{{-- app/views/home.blade.php --}}

@extends('layouts.oeggef')

@section('body')
  <h1>Welcome to OEG GEF</h1>

  <ul class="smallsmall-block-grid-2 medium-block-grid-3 large-block-grid-4">
  @foreach($workshops as $ws)
  <li><a href="/workshop/{{$ws->id}}">{{ $ws->name }}</a> ({{$ws->freeplaces}} pladser)</li>
  @endforeach
  </ul>

<p><a href="/">Tilbage til forsiden</a></p>

@stop
